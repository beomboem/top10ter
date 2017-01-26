<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Article;
use App\ArticleDetail;
use Image;
use App\Polling;
use App\Option;
use App\Comment;
use App\Rating;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(){
        $articles=Article::where('status','approved')->orWhere('status',NULL)->get();
        $pollings=Polling::all();
        $testimonials = Message::all();
        return view('public.index',compact('articles','pollings','testimonials'));
    }
    public function profile(){
        $articles=Article::where('submitted_by',Auth::user()->id)->get();
        return view('public.profile',compact('articles'));
    }
    public function articles(){
        $articles=Article::where('status','approved')->orWhere('status',NULL)->get();
        return view('public.articles',compact('articles'));
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
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $rating = Rating::where('article_id',$id)->where('user_id', $user_id)->first();
            if($rating!=null){
                $current_user_rating = $rating->rating;
            }else{
                $current_user_rating = 0;
            }
        }else{
            $current_user_rating = -1;
        }
        return view('public.show-articles',compact('article', 'comments','current_user_rating'));        
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
    public function giveRating($article_id, $rating){
        Rating::updateOrCreate(
            [
                'article_id' => $article_id,
                'user_id' => Auth::user()->id
            ],
            [
                'rating' => $rating
            ]
        );
        return redirect()->action('PageController@showArticles',$article_id);
    } 
    public function submitNewArticle(Request $request){
        //add article to database

        $input=$request->all();
        $article=Article::create($input);
        $article->submitted_by=Auth::user()->id;
        $article->status="submitted";
        $article->save();
        $article_detail_1 = ArticleDetail::create([
            'article_id' => $article->id,
            'title' => $input["item_title_1"],
            'content' => $input["item_content_1"]
        ]);
        $article_detail_2 = ArticleDetail::create([
            'article_id' => $article->id,
            'title' => $input["item_title_2"],
            'content' => $input["item_content_2"]
        ]);
        $article_detail_3 = ArticleDetail::create([
            'article_id' => $article->id,
            'title' => $input["item_title_3"],
            'content' => $input["item_content_3"]
        ]);
        $article_detail_4 = ArticleDetail::create([
            'article_id' => $article->id,
            'title' => $input["item_title_4"],
            'content' => $input["item_content_4"]
        ]);
        $article_detail_5 = ArticleDetail::create([
            'article_id' => $article->id,
            'title' => $input["item_title_5"],
            'content' => $input["item_content_5"]
        ]);
        $article_detail_6 = ArticleDetail::create([
            'article_id' => $article->id,
            'title' => $input["item_title_6"],
            'content' => $input["item_content_6"]
        ]);
        $article_detail_7 = ArticleDetail::create([
            'article_id' => $article->id,
            'title' => $input["item_title_7"],
            'content' => $input["item_content_7"]
        ]);
        $article_detail_8 = ArticleDetail::create([
            'article_id' => $article->id,
            'title' => $input["item_title_8"],
            'content' => $input["item_content_8"]
        ]);
        $article_detail_9 = ArticleDetail::create([
            'article_id' => $article->id,
            'title' => $input["item_title_9"],
            'content' => $input["item_content_9"]
        ]);
        $article_detail_10 = ArticleDetail::create([
            'article_id' => $article->id,
            'title' => $input["item_title_10"],
            'content' => $input["item_content_10"]
        ]);
        if ($request->hasFile('item_image_1')) { 
            $path='images/articles';
            $file = $request->file('item_image_1'); 
            
 
            $image= $article_detail_1->files()->create([ 
                'attachment_type_id' => 1, 
                'name' => '', 
 
                'type' => 'cover', 
                'file_type' => 'image', 
 
                'base_url' => $path.'/'.$article_detail_1->id.'/', 
                'file_name' => $article_detail_1->id.'_'.date('Y-m-d'), 
                'extension' => $file->getClientOriginalExtension(), 
            ]); 
            $dir=$image->base_url; 
            if (!is_dir($dir)) { 
                mkdir($dir, 0755, true); 
            } 
            $full_path=$dir.$image->file_name.'.'.$image->extension; 
            Image::make($file)->resize(612, 612)->save($full_path); 
           
        }
        if ($request->hasFile('item_image_2')) { 
            $path='images/articles';
            $file = $request->file('item_image_2'); 
            
 
            $image= $article_detail_2->files()->create([ 
                'attachment_type_id' => 1, 
                'name' => '', 
 
                'type' => 'cover', 
                'file_type' => 'image', 
 
                'base_url' => $path.'/'.$article_detail_2->id.'/', 
                'file_name' => $article_detail_2->id.'_'.date('Y-m-d'), 
                'extension' => $file->getClientOriginalExtension(), 
            ]); 
            $dir=$image->base_url; 
            if (!is_dir($dir)) { 
                mkdir($dir, 0755, true); 
            } 
            $full_path=$dir.$image->file_name.'.'.$image->extension; 
            Image::make($file)->resize(612, 612)->save($full_path); 
           
        }
        if ($request->hasFile('item_image_3')) { 
            $path='images/articles';
            $file = $request->file('item_image_3'); 
            
 
            $image= $article_detail_3->files()->create([ 
                'attachment_type_id' => 1, 
                'name' => '', 
 
                'type' => 'cover', 
                'file_type' => 'image', 
 
                'base_url' => $path.'/'.$article_detail_3->id.'/', 
                'file_name' => $article_detail_3->id.'_'.date('Y-m-d'), 
                'extension' => $file->getClientOriginalExtension(), 
            ]); 
            $dir=$image->base_url; 
            if (!is_dir($dir)) { 
                mkdir($dir, 0755, true); 
            } 
            $full_path=$dir.$image->file_name.'.'.$image->extension; 
            Image::make($file)->resize(612, 612)->save($full_path); 
           
        }
        if ($request->hasFile('item_image_4')) { 
            $path='images/articles';
            $file = $request->file('item_image_4'); 
            
 
            $image= $article_detail_4->files()->create([ 
                'attachment_type_id' => 1, 
                'name' => '', 
 
                'type' => 'cover', 
                'file_type' => 'image', 
 
                'base_url' => $path.'/'.$article_detail_4->id.'/', 
                'file_name' => $article_detail_4->id.'_'.date('Y-m-d'), 
                'extension' => $file->getClientOriginalExtension(), 
            ]); 
            $dir=$image->base_url; 
            if (!is_dir($dir)) { 
                mkdir($dir, 0755, true); 
            } 
            $full_path=$dir.$image->file_name.'.'.$image->extension; 
            Image::make($file)->resize(612, 612)->save($full_path); 
           
        }
        if ($request->hasFile('item_image_5')) { 
            $path='images/articles';
            $file = $request->file('item_image_5'); 
            
 
            $image= $article_detail_5->files()->create([ 
                'attachment_type_id' => 1, 
                'name' => '', 
 
                'type' => 'cover', 
                'file_type' => 'image', 
 
                'base_url' => $path.'/'.$article_detail_5->id.'/', 
                'file_name' => $article_detail_5->id.'_'.date('Y-m-d'), 
                'extension' => $file->getClientOriginalExtension(), 
            ]); 
            $dir=$image->base_url; 
            if (!is_dir($dir)) { 
                mkdir($dir, 0755, true); 
            } 
            $full_path=$dir.$image->file_name.'.'.$image->extension; 
            Image::make($file)->resize(612, 612)->save($full_path); 
           
        }
        if ($request->hasFile('item_image_6')) { 
            $path='images/articles';
            $file = $request->file('item_image_6'); 
            
 
            $image= $article_detail_6->files()->create([ 
                'attachment_type_id' => 1, 
                'name' => '', 
 
                'type' => 'cover', 
                'file_type' => 'image', 
 
                'base_url' => $path.'/'.$article_detail_6->id.'/', 
                'file_name' => $article_detail_6->id.'_'.date('Y-m-d'), 
                'extension' => $file->getClientOriginalExtension(), 
            ]); 
            $dir=$image->base_url; 
            if (!is_dir($dir)) { 
                mkdir($dir, 0755, true); 
            } 
            $full_path=$dir.$image->file_name.'.'.$image->extension; 
            Image::make($file)->resize(612, 612)->save($full_path); 
           
        }
        if ($request->hasFile('item_image_7')) { 
            $path='images/articles';
            $file = $request->file('item_image_7'); 
            
 
            $image= $article_detail_7->files()->create([ 
                'attachment_type_id' => 1, 
                'name' => '', 
 
                'type' => 'cover', 
                'file_type' => 'image', 
 
                'base_url' => $path.'/'.$article_detail_7->id.'/', 
                'file_name' => $article_detail_7->id.'_'.date('Y-m-d'), 
                'extension' => $file->getClientOriginalExtension(), 
            ]); 
            $dir=$image->base_url; 
            if (!is_dir($dir)) { 
                mkdir($dir, 0755, true); 
            } 
            $full_path=$dir.$image->file_name.'.'.$image->extension; 
            Image::make($file)->resize(612, 612)->save($full_path); 
           
        }
        if ($request->hasFile('item_image_8')) { 
            $path='images/articles';
            $file = $request->file('item_image_8'); 
            
 
            $image= $article_detail_8->files()->create([ 
                'attachment_type_id' => 1, 
                'name' => '', 
 
                'type' => 'cover', 
                'file_type' => 'image', 
 
                'base_url' => $path.'/'.$article_detail_8->id.'/', 
                'file_name' => $article_detail_8->id.'_'.date('Y-m-d'), 
                'extension' => $file->getClientOriginalExtension(), 
            ]); 
            $dir=$image->base_url; 
            if (!is_dir($dir)) { 
                mkdir($dir, 0755, true); 
            } 
            $full_path=$dir.$image->file_name.'.'.$image->extension; 
            Image::make($file)->resize(612, 612)->save($full_path); 
           
        }
        if ($request->hasFile('item_image_9')) { 
            $path='images/articles';
            $file = $request->file('item_image_9'); 
            
 
            $image= $article_detail_9->files()->create([ 
                'attachment_type_id' => 1, 
                'name' => '', 
 
                'type' => 'cover', 
                'file_type' => 'image', 
 
                'base_url' => $path.'/'.$article_detail_9->id.'/', 
                'file_name' => $article_detail_9->id.'_'.date('Y-m-d'), 
                'extension' => $file->getClientOriginalExtension(), 
            ]); 
            $dir=$image->base_url; 
            if (!is_dir($dir)) { 
                mkdir($dir, 0755, true); 
            } 
            $full_path=$dir.$image->file_name.'.'.$image->extension; 
            Image::make($file)->resize(612, 612)->save($full_path); 
           
        }
        if ($request->hasFile('item_image_10')) { 
            $path='images/articles';
            $file = $request->file('item_image_10'); 
            
 
            $image= $article_detail_10->files()->create([ 
                'attachment_type_id' => 1, 
                'name' => '', 
 
                'type' => 'cover', 
                'file_type' => 'image', 
 
                'base_url' => $path.'/'.$article_detail_10->id.'/', 
                'file_name' => $article_detail_10->id.'_'.date('Y-m-d'), 
                'extension' => $file->getClientOriginalExtension(), 
            ]); 
            $dir=$image->base_url; 
            if (!is_dir($dir)) { 
                mkdir($dir, 0755, true); 
            } 
            $full_path=$dir.$image->file_name.'.'.$image->extension; 
            Image::make($file)->resize(612, 612)->save($full_path); 
           
        }
        return redirect()->action('PageController@profile');
    }
}
