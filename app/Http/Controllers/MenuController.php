<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nama'=>'required',
            'email'=>'required'
        ],
        [
            'nama.required'=>
        ]
        );
    }
}
