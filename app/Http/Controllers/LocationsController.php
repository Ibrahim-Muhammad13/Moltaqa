<?php

namespace App\Http\Controllers;

// use Request;
use Illuminate\Http\Request;
use App\Location;
use App\Properties;
use Intervention\Image\Facades\Image;
use DB;
class LocationsController extends Controller
{
    //
    public function index(Request $request){
        $locations = Location::withCount(['Properties'])->get();   
        // $count = Properties::where('location_id',1)->count(); 
            return view('buy',['locations'=>$locations]);
    }
    

    public function show(){
        return view('admin.add_location');
    }


    public function store(Request $request){
       
        $inputs = $request->validate([
            'name' => 'required',
            'location_img' =>'file|required'
        ]);
        if($request->location_img){
            $inputs['location_img']=$request->location_img->store('images');
        }
        Location::create($inputs);
    
        return back()
            ->with('success','You have successfully upload image.');
    }
}
