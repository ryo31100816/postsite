@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if(isset($posts))
                @foreach($posts as $post)
                    <div class="col-lg-4 col-xs-6 thumbnail">
                    <a href="/post/{{ $post->id }}"><img src="{{ asset($post->images[0]->icon) }}" class="img-thumbnail"></a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection