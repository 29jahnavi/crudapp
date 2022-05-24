<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\form;
use App\Models\addpost;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function layout() {
        return view('Frontend.index');
     }
    public function form() {
        return view('Frontend.form');
     }
     public function addpost() {
        return view('Frontend.addpost');
     }
     
     public function list() {
        $data= form::select('id','fname','lname','email')->get();
        return view('Frontend.list', ['items'=>$data]);
     }
     public function list_trash() {
        $data= form::select('id','fname','lname','email')->onlyTrashed()->get();
        return view('Frontend.list-trash', ['items'=>$data]);
     }

     public function addpost_list() {
        $data= addpost::select('id','post','image')->get();
        return view('Frontend.addpost-list', ['items'=>$data]);
     }
     public function insert(Request $req){
        
            $data = [
                'fname' => trim($req->fname),
                'lname' => trim($req->lname),
                'email' => trim($req->email)
            ];

        if($req->id != ''){
            form::where('id',$req->id)->update($data);

            $res['status'] = "success";
            $res['msg'] = "updated data";
        }else{
            form::create($data);
                
            $res['status'] = "success";
            $res['msg'] = "data Insert";
        }
        echo json_encode($res);
    }
    public function edit($id){
        $item_id =  Crypt::decrypt($id);
        // echo "<pre>"; print_r($item_id);die;
        $edit= form::find($item_id);
        $data['id']= $edit->id;
        $data['fname']= $edit->fname;
        $data['lname']= $edit->lname;
        $data['email']= $edit->email;

        return view('Frontend.form',['items'=>$data]);
    }

    public function destroy($id)
    {
        $form= form::find($id);
        $form->delete();    
        return redirect('/list');
    }
    public function force_delete($id)
    {
        $form= form::withTrashed()->find($id);
        $form->forceDelete();    
        return redirect('/list');
    }
    public function restore($id)
    {
        $form= form::withTrashed()->find($id);
        $form->restore();    
        return redirect('/list');
    }

    public function addpost_insert(Request $req){
        $img = '';
        if($req->old_img != ''){
            $img=$req->old_img;            
        }
        if($req->hasfile('image')){
            $file = $req->file('image');
            if ($file != ""){
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension; 
                $file->move('uploads/images/', $filename);
                $img = $req->image = $filename;
            }
        }   
            $data = [
                'post' => $req->post,
                'image' => $img
            ];

        if($req->id != ''){
            addpost::where('id',$req->id)->update($data);
            $res['status'] = "success";
            $res['msg'] = "updated data";
        }else{
            addpost::create($data);   
            $res['status'] = "success";
            $res['msg'] = "data Insert";
        }
        echo json_encode($res);
    } 
    public function edit_addpost($id){
        $item_id =  Crypt::decrypt($id);
        $edit= addpost::find($item_id);
        $data['id']= $edit->id;
        $data['post']= $edit->post;
        $data['image']= $edit->image;

        return view('Frontend.addpost',['items'=>$data]);
    }
    public function destroy_addpost($id)
    {
        $form= addpost::find($id);
        $form->delete();
        return redirect('/addpost-list');
    }
}
