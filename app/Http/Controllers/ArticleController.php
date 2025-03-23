<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Scategory;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with(['user', 'tags'])->latest()->paginate(5); // Adjust the number as needed
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        return view('articles.create', $this->getFormData());
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(StoreArticleRequest $request)

    {
        // echo '<pre>';

        // print_r($request->all());

        //dd($request);
        $article = Article::create([
            'slug' => Str::slug($request->title),
            'user_id' => Auth::user()->id,
            'status' => $request->status === "on"
        ] + $request->validated());

        // $article = Article::create([
        //     'title' => $request->title,
        //     'slug' => Str::slug($request->title),
        //     'excerpt' => $request->excerpt,
        //     'description' => $request->description,
        //     'status' => $request->status === "on",
        //     'scategory_id' => $request->scategory_id,
        //     'user_id' => Auth::user()->id,
        // ]);
        // dd($request);
        $article->tags()->attach($request->tags);


        return redirect(route('articles.index'))
            ->with('message', 'Article created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {

        return view('articles.edit', array_merge(compact('article'), $this->getFormData()));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article->update($request->validated() +[
            'slug' => Str::slug($request->title)]);

        $article->tags()->sync($request->tags);

        return redirect(route('articles.index'))
            ->with('message', 'Article has successfully been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }

    private function getFormData()
    {
        $scategories = Scategory::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');

        return compact('scategories', 'tags');
    }
}
