@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                {{ $title }}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                @if (isset($posts))
                    @foreach($posts as $post)
                        <img src="{{ asset($post->images[0]->icon) }}" class="img-thumbnail"></img>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
