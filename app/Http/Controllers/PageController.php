<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

use App\Article;

use App\Polling;

use App\Option;

class PageController extends Controller
{
    public function index(){
        $articles=Article::all();
        $pollings=Polling::all();
        return view('public.index',compact('articles','pollings'));
    }
    public function profile(){
        return view('public.profile');
    }
    /*public function contact(){
        $articles=Article::all();
        return view('public.index',compact('articles','pollings'));        
    }*/
    public function sendMessage(Request $request){
    	Message::create([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'content'=>$request->content
    	]);
        
    	return redirect()->action('PageController@index');
    }
    public function showArticles($id){
        $article=Article::find($id);
        //$article=Article::find($id)->first();
        return view('public.show-articles',compact('article'));        
    }
    public function submitPoll(Request $request){
        $selectedOption=Option::find($request->poll);
        $selectedOption->count++;
        $selectedOption->save();
    }
    public function submitComment(){
        //insert new comment to database
    }
    public function deleteComment(){
        //delete comment from database
    }
}
