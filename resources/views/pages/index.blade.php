@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
  <H1>{{$title}}</H1>
  <p>This is Laravel application</p>
  <a class="btn btn-primary btn-lg" href="/login" role="btn">Login</a>
  <a class="btn btn-success btn-lg" href="/register" role="btn">Register</a>
</div>
@endsection
