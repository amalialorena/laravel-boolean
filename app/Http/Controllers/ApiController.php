<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;

class ApiController extends Controller
{
    public function getPostcards(){

        $postcards= Postcard::all();
        return json_encode($postcards);
    }

    public function createPostcards () {

        return view('pages.form');
    }

    public function storePostcards(Request $request) {

        $data = $request-> validate([
            'sender' => 'required|string|min:3',
            'address' => 'required|string',
            'text' => 'string|min:3',
            'image' => 'image'
        ]);

        $imageFile = $request -> file('image');
        //$data['image']; 

        $imageName = rand(100000, 999999).'_'.time() 
                    .'.'.$imageFile -> getClientOriginalExtension();

        $imageFile -> storeAs('/postcards/', $imageName, 'public');

        $data['image'] = $imageName;

        $postcard = Postcard::create($data);
       

       return redirect() -> route('home');




    }
}
