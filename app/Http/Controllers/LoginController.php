<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use Input;
use flash;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(){
    	return view('author.login');
    }

    public function checkLogin(LoginRequest $request){
    	$email = $request->input('email');
    	$password = md5($request->input('password'));
    	$user = User::where('email', $email)->first();
    	if ($user->password == $password) {
   			return redirect()->route('articles.index');
       	}else{
       		
       	}
    }
}
