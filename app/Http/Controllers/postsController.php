<?php
namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use App\User;

class postsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //$post = $posts->first();

        return view('posts.index',[

            'posts' => $posts
        ]);

    }

    public function show($id){  
    //    dd(route('posts.show'));
    $users = User::all();
       return view('posts.show',[
           'post'=>Post::findOrFail($id),
           'users' => $users
       ]); 
    }

    public function edit($id){
        $post=Post::find($id);
        $users = User::all();
        return view('posts.edit',[
            'post' => $post,
            'users' => $users
        ]);
    }

    // public function delete(){
    //     return view('posts.delete');
    // }


    public function create()
    {
        $users = User::all();

        return view('posts.create',[
            'users' => $users
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Post::create($request->all());
        
       return redirect(route('posts.index')); 
    }


    public function update(Request $request,Post $post)
    {
       
       
        $new_post = $request->only(['title', 'description', 'user_id']);
        $post->update($new_post);
        
       return redirect('/posts'); 
        
    }

    public function destroy(Post $post)
    {
       $post->delete();
        //$post = $posts->first();
        return redirect(route('posts.index'));
    }

}
