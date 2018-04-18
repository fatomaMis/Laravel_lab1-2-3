<?php
namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon ;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBlogPost;
use Illuminate\pagination\paginator;

class postsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);//3dd el posts in one page
        

      
        return view('posts.index',[

            'posts' => $posts,
            
        ]);

    }

    public function create()
    {
        $users = User::all();

        return view('posts.create',[
            'users' => $users
        ]);
    }

    public function store(StoreBlogPost $request)
    {
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);
        
       return redirect(route('posts.index')); 
    }


    public function show($id){  
    //    dd(route('posts.show'));
       return view('posts.show',[
           'post'=>Post::findOrFail($id)
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
