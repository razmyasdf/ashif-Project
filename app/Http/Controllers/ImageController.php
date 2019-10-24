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


        $img->save();
        return redirect()->back();

    }

    public function save(Request $request, Vehicle $vehicle){

        request()->validate([

            'img' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($image = $request->file('img')) {
            foreach ($image as $files) {
            $destinationPath = 'public/image/'; // upload path
            $imagePath = $files->store('uploads','public');

            $images[]=$imagePath;
            }
        }
        foreach ($images as $imageP) {
            $img = new image;
            $img->img =$imageP;
            $img->vehicle_vcn = $vehicle->vcn;

            $img->save();
        }
       //dd($images);
        //$img = new image;
        //$img->img =$images;
        //$img->vehicle_vcn = $vehicle->vcn;
        //$img->save();

    }
}
