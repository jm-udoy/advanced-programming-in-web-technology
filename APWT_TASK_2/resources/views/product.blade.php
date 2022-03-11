@extends('layouts.app')
@section('content')
<h1>This is product page</h1>

<ul>
    @foreach($names as $n)
    <li>{{$n}}</li>
    @endforeach
</ul>
@endsection



