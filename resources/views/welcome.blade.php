@extends('layouts.master')

@if(auth()->check())
@section('content')

@foreach($children as $child)

        @include('children.child')
        
    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

@endsection
@endif