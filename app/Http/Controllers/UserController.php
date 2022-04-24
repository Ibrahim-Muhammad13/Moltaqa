<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Properties;
class UserController extends Controller
{
    //
    public function store(Request $request){
        User::create($request->only(
    'name',
    'email'
));

    Properties::create($request->only(
        'adress'
       
    ));
    
    }
}
