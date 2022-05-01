@extends('base')

@section('title','About us | '. config('app.name'))
@section('content')
       <img src="{{asset('/images/benin.jpg')}}" alt="benin" style="border-radius : 50%;height : 100px; width : 100px;"/>
       <h1>Built with &hearts; by Zman Jr</h1>
       <p>It's currently {{ date('h:i A')}}. <a href = "{{route('app_home')}}">Back to welcome page</a></p>

@endsection
