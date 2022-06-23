<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Properties;
use App\Location;
class PropertyController extends Controller
{
    //

    public function index(){
        $locations = Location::all();
        return view('admin.create_property',['locations'=>$locations]);
    }
    public function show($id){
        $properties = Properties::where('location_id',$id)->get();
        return view('location_properties',['properties'=>$properties]);
    }

    public function store(Request $request){
       
        $inputs = $request->validate([
            'title' =>'required',
            'adress' =>'required',
            'location_id' =>'required',
            'price' =>'required',
            'type' =>'required',
            'status' =>'required',
            'rooms' =>'required',
            'bath' =>'required',
            'image' => 'file', 
        ]);
        if($request->image){
            $inputs['image']=$request->image->store('images');
        }
        Properties::create($inputs);
    
        return back()
            ->with('success','You have successfully added property.');
    }
}
