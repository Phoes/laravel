@extends('template')
@section('title','Hello world')
@section('content')
<h1>Hello World </h1>
<li><a href="hll">hello link</a></li>
<li><a href="{{ url('beer') }}">index link</a></li>
@endsection