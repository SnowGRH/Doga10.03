<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $users = response()->json(User::all());
        return $users;
    }
    public function show($id){
        $users = response()->json(User::find($id));
        return $users;
    }
    public function destroy($id){
        User::find($id)->delete();
    }
    public function store(Request $request){
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users=save();
    }    
    public function update(Request $request,$id){
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users=save();
    }



    //view
    public function newView(){
        $users = User::all();
        return view('tasks.new',['users' =>$users]);
    }
    public function listView(){
        $tasks = User::all();
        return view('tasks.list',['tasks'=>$tasks]);
    }


}
