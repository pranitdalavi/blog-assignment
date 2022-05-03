@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/cms-blogs" class="btn btn-outline-primary btn-sm">Go back</a>
            <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h4 class="display-10" style="margin-left:10px">Create a New Post</h4><br>

                <form action="{{ route('store-blog') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="control-group col-8" style="margin-left:10px">
                            <label for="title">Post Title :</label>
                            <input type="text" id="title" class="form-control" name="title" placeholder="Enter Post Title">
                            @if($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif<br>
                        </div>
                        <div class="control-group col-8" style="margin-left:10px">
                            <label for="title">Post Date :</label>
                            <input type="text" id="date" class="form-control" name="date" placeholder="Enter Post Date">
                            @if($errors->has('date'))
                            <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif<br>
                        </div>
                        <div class="control-group col-8" style="margin-left:10px">
                            <label for="title">Post Author :</label>
                            <input type="text" id="author" class="form-control" name="author" placeholder="Enter Post Author">
                            @if($errors->has('author'))
                            <span class="text-danger">{{ $errors->first('author') }}</span>
                            @endif<br>
                        </div>
                        <div class="control-group col-8" style="margin-left:10px">
                            <label for="title">Post Description :</label>
                            <input type="text" id="description" class="form-control" name="description" placeholder="Enter Post Description">
                            @if($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif<br>
                        </div>
                        <div class="control-group col-8" style="margin-left:10px">
                            <label for="title">Post Tags :</label>
                            <input type="text" id="tags" class="form-control" name="tags" placeholder="Enter Post Tags"><br>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-8 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Create Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection