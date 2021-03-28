@extends('layouts.app')

@section('content')

    <h1>エラだぞーーーーーーーーーーーーーーーーー！</h1>

    {{-- {{ dd($exception->getHeaders()) }} --}}

    {{ dd(config('app.debug')) }}
  
@endsection