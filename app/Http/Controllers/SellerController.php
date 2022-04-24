<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
use App\Properties;
class SellerController extends Controller
{
    //


    public function index(){
        return view('sell');
    }





    public function store(Request $request){
        Seller::create($request->only(
    'firstname',
    'lastname',
    'email',
    'phone'
    ));

    if(request('image')){
        request('image')->store('images');
    }
    Properties::create($request->only(
        'type',
        'location_id', 
        'bath',
        'rooms',
        'price',
        'image',
        'adress'
       
    ));
    return back();
    
    }
    
}
