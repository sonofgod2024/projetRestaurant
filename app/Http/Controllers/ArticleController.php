<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
use App\Models\Articles;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'code_article' => 'required',
                'nom' => 'required',
                'description' => 'required'
            ]
        );
        $article = new Article(
            [
                'code_article' => $request->get('code_article'),
                'nom' => $request->get('nom'),
                'description' => $request->get('description')
            ]
        );
        $article->save();
        return redirect('/')->with('success', 'Articles enregistré');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    //Enregistrer les modifications
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'code_article'=>'required',
                'nom'=>'required',
                'description'=>'required'

            ]
        );

        $article = Article::findOrFail($id);
        $article->code_article = $request->get('code_article');
        $article->nom = $request->get('nom');
        $article->description = $request->get('description');


        $article->update();
        return redirect('/articles')->with('success', 'Article modifiée');
    }

    //Suprimer une a$article
    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/articles')->with('success', 'Article supprimée');
    }
}
