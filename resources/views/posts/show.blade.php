@extends('layouts.master')


@section('content')

<!-- <h1>Posts Index</h1> -->

<div class="container">
        <div class="table-wrapper">         

            <table class="table table-bordered">
            <th style="background-color:#D3D3D3">Post Info</th>        
                <tr><td><b>Title </b>:-{{$post->title}}
                <br><b>Description </b>:-{{$post->description}}</td></tr>
            </table>
            <table class="table table-bordered">
            <th style="background-color:#D3D3D3">Post Creator Info</th>   
                <tr><td><b>Name </b>:- {{$post->user->name}}
                <br><b>Email </b>:- {{$post->user->email}}
                <br><b>Created At </b>:- {{$post->user->created_at}}
   
                </td></tr>
            </table>
        </div>
    </div>
@endsection