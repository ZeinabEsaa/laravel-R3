<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Mail\contactMail;
use Mail;


class ExampleController extends Controller
{
    public function show(){
        return 'Welcome to my first controller';
    }

    // public function upload(Request $request){
    //     $file_extension = $request->image->getClientOriginalExtension();
    //     $file_name = time() . '.' . $file_extension;
    //     $path = 'assets/images';
    //     $request->image->move($path, $file_name);
    //     return 'Uploaded';
    // }

    // public function createSession(){
    //     session()->flash('testSession', 'My first session value');
    //     //session()->forget('testSession');
    //     return 'session created ';
    // }
    public function contant()
    {
        return view('contant');
    }

    public function contactMail(Request $request)
    {
       Mail::to('Zahraa@example.com')->send(new contactMail($request));
       return redirect('contact');
    }
}

   