<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\form2;

class ResouceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Frontend.form2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= form2::select('id','fname','lname','email')->get();
        return view('Frontend.list2', ['items'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
        ];
        form2::create($data);
                
            $res['status'] = "success";
            $res['msg'] = "data Insert";
            echo json_encode($res);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= form2::find($id);
        $data['id']= $edit->id;
        $data['fname']= $edit->fname;
        $data['lname']= $edit->lname;
        $data['email']= $edit->email;

        return view('Frontend.form',['items'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
        ];
        $id = $request->id;
        form2::where('id',$id)->update($data);

            $res['status'] = "success";
            $res['msg'] = "updated data";
            echo json_encode($res);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form= form2::find($id);
        $form->delete();
        return redirect()->back()->with('status', 'Deleted Successfully');
    }
}
