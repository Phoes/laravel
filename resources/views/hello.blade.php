@extends('template')
@section('title','Hello world')
@section('content')
<h1>Hello World {{$name}}</h1>

@endsection
@section('footer')
  <div class="alert alert-danger">
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
@2017
@endsection