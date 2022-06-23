<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Properties;
use App\Location;
class ApiPropertiesController extends Controller
{
    //
    public function properties($id){
        $properties = Properties::where('location_id',$id)->get();
        return response()->json($properties, 200);
    }
}
