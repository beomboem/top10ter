<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Polling;
use App\Option;
class PollingController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->model = new Polling;
    }

    public function index()
    {
        $pollings = $this->model->get();
        return view('polling.index', compact('pollings'));
    }

    public function create()
    {
        return view('polling.create');
    }

    public function store(Request $request)
    {
        $input=$request->all();
        $polling=$this->model->create($input);
        Option::create([
        	'polling_id' => $polling->id,
		    'answer' => $input["option1"],
		]);
		Option::create([
        	'polling_id' => $polling->id,
		    'answer' => $input["option2"],
		]);
		Option::create([
        	'polling_id' => $polling->id,
		    'answer' => $input["option3"],
		]);
        
        return redirect()->action('Admin\PollingController@index');
    }

    public function edit(Polling $polling)
    {
       	return view('polling.edit', compact('polling'));
    }

    public function update(Request $request,Polling $polling)
    {
        //update polling
        $input=$request->all();
        $polling->question = $input['question'];
        $polling->option[0]->answer = $input['option1'];
        $polling->option[1]->answer = $input['option2'];
        $polling->option[2]->answer = $input['option3'];
        $polling->save();
        $polling->option[0]->save();
        $polling->option[1]->save();
        $polling->option[2]->save();
        return redirect()->action('Admin\PollingController@index');
    }

    public function destroy($id)
    {
    	//delete polling
        $polling=$this->model->find($id);
        $options = Option::where('polling_id',$polling->id)->get();
        $options[0]->delete();
        $options[1]->delete();
        $options[2]->delete();
        $polling->delete();
        return redirect()->action('Admin\ArticleController@index');
    }
}
