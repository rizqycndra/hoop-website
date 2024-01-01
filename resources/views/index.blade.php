@extends('layouts.main')

@section('body')
    
    <x-big-banner :data="$banner"/>
    <div class="grid grid-cols-2 md:grid-cols-4 px-2 gap-y-4 max-w-screen-xl mx-auto md:px-5">
        @foreach ($product as $p)
            <x-product-card :data="$p"/>
        @endforeach
    </div>

@endsection