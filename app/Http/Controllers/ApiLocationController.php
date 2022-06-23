<?php

namespace App\Http\Controllers;
use App\Location;
use App\Properties;
use Illuminate\Http\Request;

class ApiLocationController extends Controller
{
    //
    public function index(){
        return response()->json(Location::get(), 200);
    }
    
}
