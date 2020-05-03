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
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
