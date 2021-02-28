@extends('layouts.app')

@section('content')

    <example-component :data="{{ json_encode([
        'word' => 'VueコンポーネントOK'
    ])}}">
    </example-component>
    {{ Form::open(['route' => 'store']) }}
        <test-component></test-component>
    {{ Form::submit('送信') }}
    {{ Form::close() }}

        <test-paginate :posts="{{ $posts }}"></test-paginate>

        <pusher-component></pusher-component>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
  
@endsection