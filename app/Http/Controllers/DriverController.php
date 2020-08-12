<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    //

    public function registerDriver(Request $request){
        // if($request->has('options') == true){
        //     return view('auth.vehicles');
        // }
        // else{
        //     return view('auth.login');
        // }
        // $boo = $request->has('csrftoken');
        
        // if($boo == true){
        //     return 'We are in...\n'.$request;
        // }
        // else{
        //     return 'Not in bro...\n'.$request;
        // }
        return dd($request->has('options'));
    }

    public function vehicles(){
        return view('auth.vehicles');
    }
};
