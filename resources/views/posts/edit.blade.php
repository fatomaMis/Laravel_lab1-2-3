<!-- <h1>Edit Page<h1> -->

@extends('layouts.master')


@section('content')

<form method="post" action="/update/{{$post->id}}">
{{csrf_field()}}
Title :- <input type="text" name="title" value="{{$post->title}}"/>
<br><br>
Description :- 
<textarea name="description">{{$post->description}}</textarea>
<br>
<br>
Post Creator
<select class="form-control" name="user_id">
@foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach

</select>
<br>
<input type="submit" value="Update" class="btn btn-primary">
</form>

@endsection