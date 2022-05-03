@extends('layouts/base')

@section('content')
<div style="margin : 80px;">
    <img src="{{asset('/images/benin.jpg')}}" alt="benin" style="height : 100px; width : 100px;"/>
</div>
<h1>Hello from Benin</h1>
<p>It's currently {{ date('h:i A')}}</p>
@endsection
