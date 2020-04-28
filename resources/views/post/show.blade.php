@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $post -> title }}</div>

                <div class="card-body">
                    <a href="{{ route('post.form.edit',[$post->id])}}">Düzenle</a>
                    <a href="{{ route('post.delete',[$post->id])}}">Sil</a>
                    <p> {{ $post -> content }}</p>
                    <img src="{{ asset($post-> image) }}" width="100%" alt="">
                    <hr>
                </div>
                <hr>
                <p class="lead">Yorum</p>
                <form action="{{route('comment.save')  }}" method="POST" >
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <textarea name="text" id="" cols="30" rows="10" class="form-control"></textarea>
                <button type="submit" class="btn btn-primary">Cevapla</button>
                </form>
                <hr>
                <p class="lead">Yorumlar</p>
                @foreach ($post->comments as $comment)
                <p>Yazar: {{ $comment->user->name }} - {{ $comment->created_at }}</p> 
                <p>{{ $comment->text }}</p>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
