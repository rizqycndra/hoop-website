@extends('layouts.main')

@section('body')

    @if (sizeof($products ?? []) > 0)
        <div class="max-w-screen-xl mx-auto px-5 mt-5">
            <h1 class="text-[32px] font-bold capitalize">Mencari {{ $query }}</h1>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 px-2 gap-y-4 max-w-screen-xl mx-auto md:px-5">
            @foreach ($products ?? [] as $p)
                <x-product-card :data="$p" />
            @endforeach
        </div>
    @else
        <div class="max-w-screen-xl mx-auto px-5 mt-10">
            <h1 class="text-[32px] font-bold">Produk tidak ditemukan</h1>
        </div>
    @endif

@endsection
