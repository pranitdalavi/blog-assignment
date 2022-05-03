@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 pt-2">
            <a href="/cms-blogs" class="btn btn-outline-primary btn-sm">Go back</a>
            <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h4 class="display-20" style="margin-left:10px">Edit Post</h4><br>

                <form action="{{ route('store-blog') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="control-group col-8">
                            <input type="hidden" name="id" value="{{ $post->id }}">
                        </div>
                        <div class="control-group col-8" style="margin-left:10px">
                            <label for="title">Post Title :</label>
                            <input type="text" id="title" class="form-control" name="title" placeholder="Enter Post Title" value="{{ $post->title }}"><br>
                        </div>
                        <div class="control-group col-8" style="margin-left:10px">
                            <label for="title">Post Date :</label><br>
                            <input type="text" id="date" class="form-control" name="date" placeholder="Enter Post Date" value="{{ $post->date }}"><br>
                        </div>
                        <div class="control-group col-8" style="margin-left:10px">
                            <label for="title">Post Author :</label><br>
                            <input type="text" id="author" class="form-control" name="author" placeholder="Enter Post Author" value="{{ $post->author }}"><br>
                        </div>
                        <div class="control-group col-8" style="margin-left:10px">
                            <label for="title">Post Description :</label><br>
                            <input type="text" id="description" class="form-control" name="description" placeholder="Enter Post Description" value="{{ $post->description }}"><br>
                        </div>
                        <div class="control-group col-8" style="margin-left:10px">
                            <label for="title">Post Tags :</label><br>
                            <input type="text" id="tags" class="form-control" name="tags" placeholder="Enter Post Tags" value="{{ $post->tags }}"><br>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-8 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Update Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection