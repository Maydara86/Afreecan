@extends('layouts.master')

@if(auth()->check() && auth()->user()->email === 'admin_mohican@parrainagetunisie.org')
    @section('content')

        @foreach($children as $child)

            @include('children.child')
                
        @endforeach

        {{ $children->links() }}
        
    @endsection
@endif