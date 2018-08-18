<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todocontroller extends Controller
{
    public function index()
    {
    	  return view('todo.todo'); 
    }
    public function store()
    {
    	return "HelloWorld";
    }
}
