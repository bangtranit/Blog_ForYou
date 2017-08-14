<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;

use App\User;
use Input;
use flash;
use Hash;


class LoginController extends Controller
{

    protected $userModel;

    public function __construct(User $user){
      $this->userModel = $user;
    }

    public function index(){
    	return view('author.login');
    }

    public function checkLogin(LoginRequest $request){
    	$email = $request->input('email');
    	$password = $request->input('password');
    	// $user = User::where('email', $email)->first();
      $user = $this->userModel->getUserWithEmail($email);
    	if (Hash::check($password, $user->password)) {
   			return redirect()->route('articles.index');
       	}else{
       		
       	}
    }
}
