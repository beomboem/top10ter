<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

use App\Article;

class PageController extends Controller
{
    public function index(){
        $articles=Article::all();
        return view('public.index',compact('articles'));
    }
    public function contact(){
        $articles=Article::all();
        return view('public.index',compact('articles'));        
    }
    public function sendMessage(Request $request){
    	Message::create([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'content'=>$request->content
    	]);
        
    	return redirect()->action('PageController@contact');
    }
    public function showArticles(){
        return view('public.show-articles');        
    }
}
