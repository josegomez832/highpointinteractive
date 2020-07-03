<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entries;
class EntriesController extends Controller
{
    public function store(){
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required'
        ]);
        Entries::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'phone'=>request('phone'),
            'message'=>request('message')
        ]);
        return redirect('/thank-you');
    }
}
