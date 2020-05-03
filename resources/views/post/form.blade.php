@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post Form</div>

                <div class="card-body">
                    <form action="{{ route('post.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(!empty($post))
                        <input type="hidden" name="id" value="{{ $post -> id}}">
                        @endif
                        <input type="text" name="cat_id" id="cat_id" class="form-control" placeholder="Title">
                        <input value="{{ empty($post) ? '': $post->title }}" type="text" name="title" id="" class="form-control" placeholder="Title">
                        <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ empty($post ->content) ? '': $post->content }}</textarea>
                        <input type="file" name="image" id="">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
