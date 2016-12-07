<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticleDetail;
use Image;
class ArticleController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->model = new Article;
    }

    public function index()
    {
        $articles = $this->model->get();
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        //add article to database

        $input=$request->all();
        $article=$this->model->create($input);
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
        return redirect()->action('Admin\ArticleController@index');
    }

    public function edit(Article $article)
    {
       	return view('article.edit', compact('article'));
    }

    public function update(Request $request,Article $article)
    {
        //update service
        $this->validate($request, [
            'image-main' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $article->update($request->all());
        // if ($request->hasFile('image-main')) { 
        //     $directory=public_path($service->directory_path);
        //     $files=glob($directory."*");
        //     foreach($files as $file2){
        //         if(is_file($file2))
        //             unlink($file2);
        //     }
        //     $service->files->first()->delete();

        //     $path='images/service'; 
        //     $file = $request->file('image-main'); 
 
        //     $image= $service->files()->create([ 
        //         'attachment_type_id' => 1, 
        //         'name' => '', 
 
        //         'type' => 'cover', 
        //         'file_type' => 'image', 
 
        //         'base_url' => $path.'/'.$service->id.'/', 
        //         'file_name' => $service->id.'_'.date('Y-m-d'), 
        //         'extension' => $file->getClientOriginalExtension(), 
        //     ]); 
        //     $dir=$image->base_url; 
        //     if (!is_dir($dir)) { 
        //         mkdir($dir, 0755, true); 
        //     } 
        //     $full_path=$dir.$image->file_name.'.'.$image->extension; 
        //     Image::make($file)->resize(612, 612)->save($full_path); 
 
        //     $full_path_thumb=$dir.$image->file_name.'_thumb.'.$image->extension; 
        //     Image::make($file)->resize(200, 200)->save($full_path_thumb);
           
        // }
        return redirect()->action('Admin\ArticleController@index');
    }

    public function destroy($id)
    {
    	//delete service
        $article=$this->model->find($id);

        // $directory=public_path($service->directory_path);
        // if($service->directory_path!=""){
        //     $files=glob($directory."*");
        //     foreach($files as $file){
        //         if(is_file($file))
        //             unlink($file);
        //     }
        //     $service->files->first()->delete();
        //     rmdir($directory);
        // }
        $article->delete();
        return redirect()->action('Admin\ArticleController@index');
    }
}
