@extends('layouts.main')

@section('body')

    <div class="max-w-screen-xl mx-auto px-5 my-3 flex flex-wrap gap-x-2 gap-y-3">
        @foreach ($categories ?? [] as $i)
            <a href="category/{{ $i->id }}" class="uppercase text-lg px-3 py-1 bg-g2/25 hover:bg-g2/50 rounded-full">{{ $i->name }}</a>
        @endforeach
    </div>

@endsection
