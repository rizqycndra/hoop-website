@extends('layouts.main')

@section('body')

    @if (isset($category->name))
        <div class="max-w-screen-xl mx-auto px-5 mt-5">
            <h1 class="text-[32px] font-bold">{{ $category->name }}</h1>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 px-2 gap-y-4 max-w-screen-xl mx-auto md:px-5">
            @foreach ($product ?? [] as $p)
                <x-product-card :data="$p" />
            @endforeach
        </div>
    @else
        <div class="max-w-screen-xl mx-auto px-5 mt-10">
            <h1 class="text-[32px] font-bold">Category tidak ditemukan</h1>
        </div>
    @endif

@endsection
