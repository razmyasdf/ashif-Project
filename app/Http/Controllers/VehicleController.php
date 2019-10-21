<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicle;
use Auth;

class VehicleController extends Controller
{
    public function create(Request $request){

        $vehicle = new vehicle;
        $vehicle->vcn = $request->vcn;
        $vehicle->user_id = Auth::user()->id;
        $vehicle->save();

       //return view ('show',compact('vehicle'));
      return redirect()->back();

    }

   public function show(vehicle $vehicle){

    return view ('show',compact('vehicle'));
   }
}
