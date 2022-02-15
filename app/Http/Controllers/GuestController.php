<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postcard;

class GuestController extends Controller
{
    public function home(){
       
        return view('pages.home');
    }

    public function createPostcard(){
       
        return view('pages.create');
    }

    public function store(Request $request){
       
        $data = $request ->validate([
            'sender' => 'rquired|string',
            'address' => 'rquired|string',
            'text' => 'rquired|string',
            'image' => 'rquired|image',
        ]);
        
        $imageFile = $data['image'];
        $imageName = rand(100000, 999999) .'_'. time() .'.'. $imageFile -> getClientOriginalExtension();

        $imageFile -> storeAs('/postcards/', $imageName, 'public');

        $postcard = Postcard::create($data);

        return redirect() -> route('home');
    }
}
