<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendToContact(){
        return view('Contact');
    }
    public function sendToAdmin(Request $request){
        return redirect()->route('sent');
}
}
