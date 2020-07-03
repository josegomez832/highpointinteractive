<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    
    public function store(){
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required'
        ]);
        Contact::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'phone'=>request('phone'),
            'message'=>request('message')
        ]);
        return redirect('/');
    }
}
