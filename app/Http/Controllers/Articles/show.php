<?php

namespace App\Http\Controllers\Articles;

use App\Models\Article;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class show
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Article $article)
    {
        try {
            $article = Article::findOrFail($article);
            return $article->load('user');
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Article not found'], 404);
        }
    }

}
