@extends('layouts.app')
@section('content') 
<div class="container">
    <h1>This is product page</h1>

    <ul>
        @foreach($names as $n)
        <li>{{$n}}</li>
        @endforeach
    </ul>
</div>
@endsection 
