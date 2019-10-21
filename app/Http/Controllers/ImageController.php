<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;
use App\vehicle;

class ImageController extends Controller
{
    public function add(Request $request, vehicle $vehicle){

        $imagePath = request('img')->store('uploads','public');
        $img = new image;
        $img->img = $imagePath;
        $img->vehicle_vcn = $vehicle->vcn;

        //dd(request('img'));
        //dd(request('img')->store('uploads','public'));
        $img->save();
        return redirect()->back();

    }
}
