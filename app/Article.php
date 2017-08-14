<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
    	'title',
    	'content'
    ];

    public function getListArticles(){
    	$articles = DB::table('articles')->paginate(10);
    	return $articles;
    }

    public function getArticleWithID($id){
    	$article = DB::table('articles')->where('id',$id)->first();
    	return $article;
    }

    public function createNewArticle($title, $content){
    	DB::table('articles')->insert(['title' => $title, 'content' => $content]);
    }

    public function editArticle($id, $title, $content){
        DB::table('articles')->where('id', $id)->update(['title' => $title, 'content' => $content]);
    }

    public function deleteArticle($id){
        DB::table('articles')->where('id', $id)->delete();
    }
}
