<!DOCTYPE html>
<html>

<head>
    <title>Create Blog</title>
</head>

<body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-10">
                    </div>
                    <div class="col-2">
                        <p>Create new Post</p>
                        <a href="/blog/create" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
                </div>
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Blog title</th>
                                <th scope="col">Date</th>
                                <th scope="col">Author</th>
                                <th scope="col">Description</th>
                                <th scope="col">Tags</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $key => $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->date}}</td>
                                <td>{{$post->author}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->tags}}</td>
                                @if(Auth::user()->id == $post->created_by)
                                <td><a href="<?php echo env('app_url'); ?>/edit/blog/{{$post->id}}">Edit</a></td>
                                @endif
                                @if(Auth::user()->id != $post->created_by)
                                <td>---</td>
                                @endif
                                @if(Auth::user()->id == $post->created_by)
                                <td><a href="<?php echo env('app_url'); ?>/delete/{{$post->id}}">Delete</a></td>
                                @endif
                                @if(Auth::user()->id != $post->created_by)
                                <td>---</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>