@extends('layout.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card w-75 p-5">
            <h3>Show post</h3>

            <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input readonly id="title" type="text" class="form-control-plaintext" name="title"
                           placeholder="Title"
                           value="{{$post->title}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="category" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <input readonly id="category" type="text" class="form-control-plaintext" name="category" placeholder="Category"
                           value="{{$post->category}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                        <textarea readonly id="description" type="text" class="form-control-plaintext"
                                  name="description"
                                  placeholder="Description">{{$post->description}}</textarea>
                </div>
            </div>
            <a class="btn btn-primary" href="{{ route('posts.index') }}">
                Back
            </a>
        </div>
    </div>
    @if($errors->any())
        @foreach ($errors as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif
@endsection
