@extends('layouts.master')


@section('content')

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Post</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#">Posts</a></li>
    </div>
  </div>
</nav>


<div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                                            
                    </div>
                    <div class="col-sm-4">
                        <a href="{{route('posts.create')}}" class="btn btn-success" data-toggle="modal"> <span>Add New Post</span></a>
                    </div>
                    
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Posted By</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
        @foreach ($posts as $post)

                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{ $post->created_at->toDateString() }}</td>
                        
                        <td>
                        <a href="{{route('posts.show',$post->id)}}"  class="btn btn-info" role="button">View</a>
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" role="button">Edit</a>
                        <!-- <a href="#" class="btn btn-danger" role="button">Delete</a> -->
                        <form method="post" action="/posts/{{$post->id}}" >
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button onclick="return confirm('are you sure')" type="submit" class="btn btn-danger" > Delete </button>
                    </form>



                        </td>
                    </tr>
                    
        @endforeach           
                </tbody>
            </table>
            <div class="clearfix">
                
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item "><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>


@endsection