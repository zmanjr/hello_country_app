@extends('base')

@section('title','About us | '. config('app.name'))
@section('content')
    <div>
        <div style="margin : 80px;">
       <img src="{{asset('/images/benin.jpg')}}" alt="benin" style="border-radius : 50%;height : 100px; width : 100px;"/>
       <div>
       <h1>Built with <span color="pink">&hearts;</span> by Zman Jr</h1>
       <p>It's currently {{ date('h:i A')}}. <a href = "{{route('app_home')}}">Back to welcome page</a></p>
    </div>

@endsection
