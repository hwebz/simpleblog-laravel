<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class PagesController extends Controller
{
    public function index() {
      //$articles = Article::all();
      //return view('home', compact('articles'));
      return redirect('/articles');
    }
}
