@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach ($posts as $post)
                    <p class="lead"> Kategori: {{ $post-> category }}</p>
                    <p class="lead"> {{ $post -> title }} </p>
                    <p> Yazar: {{ $post->user->name }}</p>
                    <p>{{ Str::words($post->content,10,'...')}}</p>
                    <a href="{{ route('post.show', [$post->id]) }}">Devamını oku</a>
                   @endforeach
                   @foreach ($pages as $post)
                    <p class="lead"> {{ $post -> title }} </p>
                    <a href="{{ route('page.form.edit', [$post->id]) }}">Düzenle</a>
                    <a href="{{ route('page.delete', [$post->id]) }}">Sil</a>
                    <p>{{ $post -> content }} </p>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
