<?php

namespace App\Http\Controllers;

use App\Models\Appetizer;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create()
    {
        return view('upload');
    }
    public function store(Request $request)
    {
        $size = $request->file('uwu')->getSize();
        $name = $request->uwu->getClientOriginalName();
        $price = $request->price;
        $description = $request->description;

        $request->uwu->storeAs('public/images/appetizer', $name);
        $photo = new Appetizer();
        $photo->name = $name;
        $photo->size = $size;
        $photo->price = $price;
        $photo->description = $description;
        $photo->save();

        return redirect()->back();
    }
}
