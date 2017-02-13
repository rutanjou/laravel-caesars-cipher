<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessageController extends Controller
{
   public function getIndex(){
    	$message = Message::all();
    	return view('messageView', ['message'=>$message]);
    }
     public function getShow($id){
    		$message = Message::find($id);
    		return view('messageView', ['message'=>$message]);
    }
}
