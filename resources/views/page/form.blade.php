@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Page form</div>

                <div class="card-body">
                   <form action="{{ route('page.save') }}" method="POST">
                   @csrf
                   @if(!empty($post))
                    <input type="hidden" name="id" value="{{ $post -> id}}">
                    @endif
                    <input value="{{ empty($post) ? '': $post->title }}" type="text" name="title" id="" class="form-control" placeholder="Title">
                    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ empty($post ->content) ? '': $post->content }}</textarea>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection