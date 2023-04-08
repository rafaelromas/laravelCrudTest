<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function create(Request $request)
    {
        $new_post = [
            'title' => 'Meu Primeiro Post',
            'content' => 'Conteúdo Qualquer',
            'author' => 'Roma'
        ];

        $post = new Post($new_post);
        $post->save();

        dd($post);

    }

}
