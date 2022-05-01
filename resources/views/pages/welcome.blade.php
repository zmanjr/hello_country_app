@extends('base')

@section('content')
<img src="{{asset('/images/benin.jpg')}}" alt="benin" style="height : 100px; width : 100px;"/>
<h1>Hello from Benin</h1>
<p>It's currently {{ date('h:i A')}}</p>
@endsection
