<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
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
        // $this->validate($request, [
        //     'image-main' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        //         ]);

        $input=$request->all();
        $article=$this->model->create($input);
        // if ($request->hasFile('image-main')) { 
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
