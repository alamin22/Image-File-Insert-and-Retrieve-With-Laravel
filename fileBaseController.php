<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\redirect;
use DB;
use Session;
session_start();

class fileBaseController extends Controller
{
    function viewForm(){
    	return view('fileCrud');
    }

   function insertFile(Request $request){
   	     $data=array();
   	     $data['name']=$request->name;
         $file=$request->file('file');
         $file_ext=$file->getClientOriginalExtension();
         $file_name=time().'.'.$file_ext;
         $file->move('files/',$file_name); //create files folder in public
         $data["file"]=$file_name;
          DB::table('user_table')
          ->insert($data);
          Session::put('message','Insert Successfully');
          return redirect('/insertFile');

   }

 function display(){
 	$view=DB::table('user_table')->get();
 	return view('fileCrud')->with('value',$view);
 }

}
