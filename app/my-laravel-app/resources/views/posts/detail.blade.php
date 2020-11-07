@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <img src="{{ asset($post->images[0]->icon) }}" class="img-thumbnail">
            <div class="post-content">{!! nl2br(e($post->contents)) !!}</div>
        </div>
    </div>
@endsection