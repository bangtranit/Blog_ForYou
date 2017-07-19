<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Input;

class ArticlesController extends Controller
{
	public function index(){
		$articles = Article::all();
		return view('articles.index',compact('articles'));
	}    

	public function show($id){
		$article = Article::find($id);
		return view('articles.show',compact('article'));
	}

	public function create(){
		return view('articles.create');
	}

	public function store(){
		$title = (Input::get('title'));
		$content = (Input::get('content'));
		Article::create([
			'title'=> $title,
			'content'=> $content
		]);
		return redirect()->route('articles.index');
	}
}
