@extends('base')

@section('title','About us | '. config('app.name'))
@section('content')
       <h1>Built with &hearts; by Zman Jr</h1>
       <p>It's currently {{ date('h:i A')}}. <a href = "/">Back to welcome page</a></p>

@endsection
