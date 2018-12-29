<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   public function create(){
       return view('create');
   }
   public function store(Request $request){
       User::create($request->all());
       return "Insert data into database successfully";
    return $request->all();
}
}
