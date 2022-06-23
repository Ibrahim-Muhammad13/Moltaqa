<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Properties;
use App\Location;
class SearchController extends Controller
{
    //
    public function index(){
        $locations = Location::all();
         $properties = Properties::all();
         return view('search',['properties'=>$properties,'locations'=>$locations]);
    }
    public function search(Request $request)
    {
        $locations = Location::all();
        $city     = $request->location_id;
        $bedroom  = $request->rooms;
        $bathroom = $request->bath;
        if($request->minprice){
            $minprice = $request->minprice;
        }else{
            $minprice = 100000000;
        }
        if($request->maxprice){
            $maxprice = $request->maxprice;
        }else{
            $maxprice = 0;
        }
        $type = $request->type;
        $properties = Properties::where('bath',$bathroom)
        ->orwhere('rooms',$bedroom)
        ->orwhere('location_id',$city)
        ->orwhere('price','>=',$minprice)
        ->orwhere('price','<=',$maxprice)
        ->orwhere('type',$type)
        ->get();                
        return view('search',['properties'=>$properties,'locations'=>$locations]);
    }

   
}
