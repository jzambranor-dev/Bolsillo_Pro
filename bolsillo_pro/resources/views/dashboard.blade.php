@extends('layouts.app')

@section('title', 'Bolsillo Pro | Dashboard')

@section('content')
<div class="content">
  <div class="main-container" id="main-container">
    @include($moduleComponent)
  </div>
</div>
@endsection
