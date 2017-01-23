<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

use App\Article;

use App\Polling;

use App\Option;

use App\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    public function addArticle(){
        $author = Auth::user()->name;
        return view('public.add-article',compact('author'));
    }
    public function addPolling(){
        return view('public.add-polling');
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
        $comments = Comment::where('article_id', $id)->get();
        return view('public.show-articles',compact('article', 'comments'));        
    }
    public function submitPoll(Request $request){
        $selectedOption=Option::find($request->poll);
        $selectedOption->count++;
        $selectedOption->save();
    }
    public function submitComment(Request $request, $article_id){
        //insert new comment to database
        Comment::create([
            'user_id' => Auth::user()->id,
            'article_id' => $article_id,
            'comment' => $request->content
        ]);
        return redirect()->action('PageController@showArticles',$article_id);
    }
    public function deleteComment($id){
        //delete comment from database
        $comment = Comment::find($id);
        $article_id = $comment->article_id;
        $comment->delete();
        return redirect()->action('PageController@showArticles',$article_id);
    }
}
