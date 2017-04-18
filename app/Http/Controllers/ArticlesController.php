<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests as Requester;

use App\Article;

use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller
{
    public function index() {
      //$articles = Article::all();
      //$articles = Article::paginate(2);
        $articles = Article::simplePaginate(2);

      return view('articles.index', compact('articles'));
    }

    public function show($id) {
      $article = Article::find($id);
      return view('articles.article')->with('article', $article);
    }

    public function create() {
      return view('articles.create');
    }

    public function store(Requester\ArticleFormRequest $request) {
      $title = Input::get('title');
      $description = Input::get('description');

      Article::create([
        'title' => $title,
        'description' => $description
      ]);

      return redirect()->route('articles.index');
    }
    
    public function edit($id) {
        $article = Article::find($id);
        
        return view('articles.edit', compact('article'));
    }
    
    public function update($id, Requester\ArticleFormRequest $request) {
        //dd("Stop here");
        $article = Article::find($id);
        
        $article->update([
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);
        
        return redirect()->route('article.show', $article->id);
    }
    
    public function delete($id) {
        $article = Article::find($id);
        $article->delete();
        
        return redirect()->route('articles.index');
    }
}
