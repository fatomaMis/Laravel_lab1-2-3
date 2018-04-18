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
            @foreach ($users as $user)     
                <tr><td><b>Name </b>:- {{$user->name}}
                <br><b>Email </b>:- {{$user->email}}
                <br><b>Created At </b>:- {{$user->created_at->toDateString()}}
            @endforeach
                </td></tr>
            </table>
        </div>
    </div>
@endsection