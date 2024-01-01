{{-- CONTAINER --}}
<a class="p-2 hover:bg-g2/10 rounded-3xl [&_h3]:hover:text-blue-500" href="#">
    {{-- IMAGE --}}
    <div class="aspect-square overflow-hidden rounded-2xl">
        <img class="w-full" src="{{ $data->image[0] }}" alt="Product Image">
    </div>

    <h3 class="font-bold mt-3">{{ $data->name }}</h3>

    <div class="mt-2">
        @foreach ($data->categories as $i)
            <span class="text-xs rounded-full px-3 py-1 bg-g2/25">{{ $i->name }}</span>
        @endforeach
    </div>

    <span class="mt-2 block">Rp {{ number_format($data->price) }}</span>

</a>