<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class PageController extends Controller
{
    public function contact(){
        return view('contact');        
    }
    public function sendMessage(Request $request){
    	Message::create([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'content'=>$request->content
    	]);
    	return redirect()->action('PageController@contact');
    }
}
