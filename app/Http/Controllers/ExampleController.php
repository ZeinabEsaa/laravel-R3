<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function show(){
        return 'Welcome to my first controller';
    }

    public function upload(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        return 'Uploaded';
    }
}
