<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
class Taskcontroller extends Controller
{
  public function index(){
   
    $tasks=Task::all();
    $tasks= DB::table('tasks')->orderBy('name' ,'asc')->get();
    return view('tasks',compact('tasks'));
     
  }
 public function store(Request $request){

    $task= new Task();
    $task->name=$request->name ;
    $task->save();
    return 'store';
  }
  
 public function delete($id){
 
   Task::find($id)->delete();
   return redirect()->back();
  }
 
 public function update(Request $request ,$id){
  

   $task =Task::find($id);
  
   $task->name =$request->name ;
   //Task::where('id', '$id')->update(['name' => $task]);
 
   $task->save();
   return 'task';
 }
 
}