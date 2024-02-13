<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class store extends Controller
{
    /**
     * Handle the incoming request.
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function __invoke(ArticleRequest $request)
    {
        $user = Auth::user();

        $article = $user->articles()->create($request->validated());

        return response()->json($article, 201);
    }
}
