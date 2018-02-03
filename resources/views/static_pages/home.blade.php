@extends('layouts.default')
@section('content')
<div class="jumbotron">
  <h1>Hello Laravel</h1>
  <p class="lead">
    what you see is <a href="#">Laravel 教程</a>
  </p>
  <p>
    Everything will begin from here!
  </p>
  <p>
    <a href="#" class="btn btn-lg btn-success" role="button">Register now!</a>
  </p>
  <p>
    <a class="btn btn-lg btn-success" href="{{ route('signup')}}" role="button">Sign up now!</a>
  </p>
</div>
@stop
