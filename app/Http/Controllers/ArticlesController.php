<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Article;
use Input;

class ArticlesController extends Controller
{
	protected $articleModel;

	public function __construct(Article $article){
		$this->articleModel = $article;
	}

	public function index(){
		$articles = $this->articleModel->getListArticles();
		// $articles = Article::paginate(10);
		return view('articles.index',compact('articles'));
	}    

	public function show($id){
		// $article = Article::find($id);
		$article = $this->articleModel->getArticleWithID($id);
		return view('articles.show',compact('article'));
	}

	public function delete($id){
		$this->articleModel->deleteArticle($id);
		return redirect()->route('articles.index');
	}
}
