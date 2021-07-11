@extends('layouts.app')



@section('content')
<h1>Edit Post</h1>
<form method="post"  action="/posts/{{$post->id}}">

    {{csrf_field()}}

    <input type="hidden" name="_method" value="PUT">

    <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">
                
    <input type="submit" name="submit" value="UPDATE">

</form>


<form method="post" action="/posts/{{$post->id}}">
{{csrf_field()}}

    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" value="DELETE">


</form>


@endsection