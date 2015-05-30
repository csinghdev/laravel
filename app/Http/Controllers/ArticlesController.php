<?php namespace App\Http\Controllers;

use Auth;
use App\Article;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\ArticleController;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

	public function index(){

        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $tags = Tag::lists('name', 'id');
        return view('articles.create', compact('tags'));
    }

    public function store(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());

        $article->tags()->attach($request->input('tag_list'));

        flash()->overlay('Your article has been successfully created !', 'Good Job');

        return redirect('articles');
    }

    public function edit(Article $article)
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article','tags'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());
        return redirect('articles');
    }
}
