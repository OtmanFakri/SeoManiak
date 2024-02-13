<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class update extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(ArticleRequest $request, Article $article)
    {
            $this->authorize('update', $article);

            $article->update($request->validated());

            return response()->json($article, 200);

    }
}
