<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class todocontroller extends Controller
{
    public function index()
    {
    	  $todos=todo::all();
    	  return view('todo.todo',compact('todos')); 
    }
    public function store(Request $request)
    {
        $todo=new todo;

        // $name=$request->input('name');
        // $description=$request->input('description');
        // return $description;
    	// $todo=new todo;
    	
    	$todo->body=$request->name;
    	$todo->description=$request->description;
     // // //    $todo->description=$request->description;
    	$todo->save();
    	return redirect('todo');
    }
}
