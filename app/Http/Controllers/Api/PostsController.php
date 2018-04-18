<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Resources\postResource;
use App\Http\Requests\StoreBlogPost;

class PostsController extends Controller
{
    public function index(){

        $posts = Post::with('users')->paginate(3);
        return postResource::collection($posts) ;
    }
    public function store(StoreBlogPost $request){
       $post = Post::create($request->all());
        return new postResource($post);

    }
}
