<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function index(){

        $posts = Post::latest();

        if(request('search')){

            $posts 
                  ->where('title', 'like', '%' . request('search'). '%')
                  ->orWhere('body', 'like', '%' . request('search'). '%');
            // write your requests here



        }

        return view (

            'posts',

            [
                'posts' => $posts->get()
            
            
            
            ]

        

        );
    }
}
