@extends('layouts.app')

@section('content')

    <header-component></header-component>
    <router-view></router-view>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
  
@endsection