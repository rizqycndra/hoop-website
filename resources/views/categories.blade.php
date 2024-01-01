@extends('layouts.main')

@section('body')

    <div>
        @foreach ($categories ?? [] as $i)
            <a href="category/{{ $i->id }}">{{ $i->name }}</a>
        @endforeach
    </div>

@endsection
