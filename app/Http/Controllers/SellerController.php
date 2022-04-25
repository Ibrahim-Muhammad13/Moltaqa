<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
use App\Properties;
use App\location;
class SellerController extends Controller
{
    //


    public function index(){
        $locations = location::all();
        return view('sell',['locations'=>$locations]);
    }





    public function store(Request $request){
    //     Seller::create($request->only(
    // 'firstname',
    // 'lastname',
    // 'email',
    // 'phone'
    // ));
    $seller = $request->validate([
        'firstname'=>'required',
        'lastname'=>'required',
        'email'=>'required|email',
        'phone'=>'required|digits:11'
    ]);
        Seller::create($seller);

        
        $property = $request->validate([
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
            $property['image']=$request->image->store('images');
        }
        Properties::create($property);
    
        return back()
        ->with('success','You have successfully add property.');
    
    }
    
}
