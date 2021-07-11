@extends('layouts.app')



@section('content')

    <ul>
    
    @foreach($posts as $post)
<!--
    <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
   -->
   <p><ls>The Title is {{ $post->id }}</ls></p>
@endforeach

  
    
    </ul>





@endsection