<?php

namespace App\Http\Controllers;

use App\Models\Payment;
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

    public function read(Request $request)
    {
        $post = new Post();

        $post = $post->find(2);

        // dd($post);

        return $post;

    }

    public function readAll(Request $request)
    {
        $post = Post::all();

        return $post;

    }

    public function update(Request $r)
    {
        $post = Post::where('id', "=", 2)->update([
            'title' => "Meu Título Atualizadaço",
            'author' => "Romanescal"
        ]);

        return $post;
        
    }

    public function returnPayment(Request $r)
    {

        $payment = new Payment();
        $payment->setCreditCard("12345...");
        $payment->setFlag("CA");
        $payment->setInstallment("10");

        $data = [
            "payment" => [
                "creditCard" => $payment->getCreditCard(),
                "flag" => $payment->getFlag(),
                "installment" => $payment->getInstallment()
            ],
            "company" => "JJ",
            "command" => "fmpccaa..."
        ];
 

        return $data;
    }

}
