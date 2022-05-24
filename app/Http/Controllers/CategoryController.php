<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\subcategory;
use Illuminate\Support\Facades\Crypt;

class CategoryController extends Controller
{
    public function category() {
        return view('Frontend.category');
    }

    public function list_category() {
        $data= category::select('id','categoryname','displayorder')->orderBy('id', 'desc')->get();
        return view('Frontend.listcategory', ['items'=> $data]);
    }

    public function category_trash() {
        $data= category::select('id','categoryname','displayorder')->onlyTrashed()->get();
        return view('Frontend.categorytrash', ['items'=>$data]);
    }

    public function subcategory() {
        $data['categoryname'] = category::orderBy('categoryname', 'asc')->get();
        return view('Frontend.subcategory',['items'=>$data]);
    }

    public function subcategorylist() {
        $data= subcategory::with('categories')->orderBy('id', 'desc')->get();
        // $data=  subcategory::leftjoin('categories', 'subcategories.categoryname',"=",'categories.id')
        // ->select('subcategories.*', 'categories.categoryname')->orderBy('id', 'desc')->get();
        return view('Frontend.listsubcategory', ['items'=> $data]);
    }

    public function subcategory_trash() {
        $data= subcategory::with('categories')->onlyTrashed()->get();
        // $data= subcategory::leftjoin('categories', 'subcategories.categoryname',"=",'categories.id')
        // ->select('subcategories.*', 'categories.categoryname')->onlyTrashed()->get();
        return view('Frontend.subcategorytrash', ['items'=>$data]);
    }
    
    public function insert(Request $req){
        $data = [
            'categoryname' => $req->categoryname,
            'displayorder' => $req->displayorder,
        ];

        if($req->id != ''){
            category::where('id',$req->id)->update($data);
            $res['status'] = "success";
            $res['msg'] = "updated data";
        }else{
            category::create($data);
           
            $res['status'] = "success";
            $res['msg'] = "data Insert";
        }
        // echo "<pre>"; print_r($data);die;
        echo json_encode($res);
    }  

    public function editcategory($id){
        $item_id =  Crypt::decrypt($id);
        $edit= category::find($item_id);
        $data['id']= $edit->id;
        $data['categoryname']= $edit->categoryname;
        $data['displayorder']= $edit->displayorder;    
        return view('Frontend.category',['items'=>$data]);
    }

    public function destroy_cat($id){
        $form= category::find($id);
        $form->delete();    
        return redirect('/list-category');
    }

    public function force_delete_cat($id){
        $form= category::withTrashed()->find($id);
        $form->forceDelete();    
        return redirect('/list-category');
    }

    public function restore_cat($id){
        $form= category::withTrashed()->find($id);
        $form->restore();    
        return redirect('/list-category');
    }

    public function editsubcategory($id){
        $item_id =  Crypt::decrypt($id);
        $edit= subcategory::find($item_id);
        $data['id']= $edit->id;
        $data['c_id']=$edit->categoryname;
        $data['categoryname'] = category::orderBy('categoryname', 'asc')->get();
        $data['subcategoryname']= $edit->subcategoryname;
        $data['displayorder']= $edit->displayorder;
        
        return view('Frontend.subcategory',['items'=>$data]);
    }

    public function subcategoryinsert(Request $req){          
        $data = [
            'categoryname' => $req->categoryname,
            'subcategoryname' => $req->subcategoryname,
            'displayorder' => $req->displayorder
        ];

        if($req->id != ''){
            subcategory::where('id',$req->id)->update($data);
            $res['status'] = "success";
            $res['msg'] = "updated data";
        }else{
            subcategory::create($data);           
            $res['status'] = "success";
            $res['msg'] = "data Insert";
        }
        // echo "<pre>"; print_r($data);die;
        echo json_encode($res);
    }

    public function destroy_subcat($id){
        $form= subcategory::find($id);
        $form->delete();    
        return redirect('/sub-category/list');
    }

    public function force_delete_subcat($id){
        $form= subcategory::withTrashed()->find($id);
        $form->forceDelete();    
        return redirect('/sub-category/list');
    }

    public function restore_subcat($id){
        $form= subcategory::withTrashed()->find($id);
        $form->restore();    
        return redirect('/sub-category/list');
    }
}