<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;

class MessageController extends Controller
{
    public function index(Request $request)
    {
    	$messages = Message::orderBy('created_at','DESC')->get();
    	return view('message.index',compact('messages'));
    }
    public function data(Request $request){
        $id = $request->input('id');
        $message=Message::find($id);
        $response = $message;
        return response()->json($response);
    }
     public function destroy($id)
    {
    	$message = Message::find($id);
    	$message->delete();
        $messages = Message::orderBy('created_at','DESC')->get();
        return view('message.index', compact('messages'));
    }
}

