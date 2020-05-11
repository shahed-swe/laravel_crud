<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class admincontrol extends Controller
{
    public function show(){
        return view('back.show',['title' => "Show Data"]);
    }
    public function post(){
        return view('back.post',['title' => "Write Post"]);
    }
    public function storepost(Request $request){
        $validateData = $request->validate([
            'slug' => 'required|unique:posts|max:100|min:4',
            'post_title' => 'required|unique:posts|min:4',
            'post_summary'=> 'required|max:400|min:4',
            'description' => 'required|max:2000|min:4',
        ]);
        $data = array();
        // ['name'] is the database field 
        $data['slug'] = $request->slug;
        $data['post_title'] = $request->post_title;
        $data['post_summary'] = $request->post_summary;
        $data['description'] = $request->description;

        $post = DB::table('posts')->insert($data);
        if($post){
            $notification=array(
                'message'=>'Successfully Done',
                'alert-type'=>'Success'
            );
            return Redirect()->back()->with($notification);
        }
        else{
            $notification=array(
                'message'=>'Failed To insert',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
        // return response()->json($data);
    }
    public function alldata(){
        // for all data use get
        // for single data use first
        $post = DB::table('posts')->get();
        // return response()->json($post);
        return view('back.all_data',compact('post'));
        // return view('back.new_data')->with('','post');
    }
    public function viewdata($id){
         $post = DB::table('posts')->where('id',$id)->first();
        //  return response()->json($post);
        // return view('back.dataview', compact('datapost'));
        return view('back.dataview')->with('p', $post);
    }
    public function delete($id){
        $val = DB::table('posts')->where('id',$id)->delete();
        if($val == 1){
            $notification=array(
                'message'=>'Has Been Successfully Deleted',
                'alert-type'=>'Success'
            );
            return Redirect()->back()->with($notification);
        }
        else{
            $notification=array(
                'message'=>'Data has not been deleted successfully',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
    public function edit_data($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('back.edit_data')->with('p', $post);
    }
    public function update_data(Request $request,$id){
        $validateData = $request->validate([
            'slug' => 'required|max:100|min:4',
            'post_title' => 'required|min:4',
            'post_summary'=> 'required|max:400|min:4',
            'description' => 'required|max:2000|min:4',
        ]);
        $data = array();
        // ['name'] is the database field 
        $data['slug'] = $request->slug;
        $data['post_title'] = $request->post_title;
        $data['post_summary'] = $request->post_summary;
        $data['description'] = $request->description;

        $post = DB::table('posts')->where('id',$id)->update($data);
        if($post){
            $notification=array(
                'message'=>'Data Updated Successfully',
                'alert-type'=>'Success'
            );
            return Redirect()->route('alldata')->with($notification);
        }
        else{
            $notification=array(
                'message'=>'Data Has Failed To update',
                'alert-type'=>'Error'
            );
            return Redirect()->route('alldata')->with($notification);
        }
    }
}
