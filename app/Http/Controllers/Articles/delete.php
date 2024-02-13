<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class delete extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Article $article)
    {
        $this->authorize('delete', $article);

        $article->delete();
    }
}
