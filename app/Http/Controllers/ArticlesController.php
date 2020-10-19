<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Inertia\Inertia;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        // Show a list of resources
        $articles = Article::latest()->get();

        return Inertia::render('Articles/index', [
            'articles' => $articles
        ]);
    }

    public function show($id)
    {
        // Show a single resource
        $article = Article::find($id);

        return  Inertia::render('Articles/show', ['article' => $article ]);
    }

    public function create()
    {
        // Shows a view to create a new resource.
        return Inertia::render('Articles/create');
    }
    public function store()
    {
        die("Article stored!");
        // Persist the newly created resource and save to the database.
    }

    public function edit()
    {
        // Show a view to edit an existing resource
    }

    public function update()
    {
        // Persist the edited resource
    }

    public function destroy()
    {
        // Delete the resource
    }
}
