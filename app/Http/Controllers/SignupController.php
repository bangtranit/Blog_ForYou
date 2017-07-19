<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\User;
use Input;


class SignupController extends Controller
{
    public function index(){
    	return view('author.signup');
    }

    public function checkSignup(SignupRequest $request){
    	$email = $request->input('email');
    	$name = $request->input('name');
    	$password = md5($request->input('password'));
    	// dd($password);
    	User::create([
    		'email' => $email,
    		'name'  => $name,
    		'password' => $password
    		]);
    	return redirect()->route('author.login');
    }
}
