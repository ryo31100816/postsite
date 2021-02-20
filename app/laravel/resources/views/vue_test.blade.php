@extends('layouts.app')

@section('content')

    <example-component :data="{{ json_encode([
        'word' => 'VueコンポーネントOK'
    ])}}">
    </example-component>

    <test-component :your-name="1"></test-component>

    <test-paginate :posts="{{ $posts }}"></test-paginate>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
  
@endsection