@extends ('layouts.master')
@section('content') 
    <h1>homepage</h1>
@php
    $comics = config('comics');


@endphp
    <button class="btn btn-success">Test</button>
    @endsection