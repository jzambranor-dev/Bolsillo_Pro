@extends('layouts.app')

@section('title', 'Bolsillo Pro | Dashboard')

@section('content')
<div class="content">
  <div class="main-container" id="main-container">

  </div>

@if (auth()->check() && request()->is('dashboard'))
@include('partials.footer')
@endif
</div>
@endsection
