<div id="bigBanner">

    {{-- CONTAINER --}}
    <div class="max-w-screen-xl mx-auto my-6 px-2 md:px-5">

        {{-- IMAGE MASK --}}
        <div class="relative overflow-hidden rounded-xl md:aspect-[1280/500] aspect-video bg-g2">

            {{-- IMAGE --}}
            <img src="storage/banner/{{ $data[0]->image }}" alt="Banner Image"
                class="absolute inset-0 min-h-full min-w-full object-cover">

            {{-- BANNER CONTROLLER --}}
            <div id="controller" class="absolute inset-0 w-full h-full">

                <div id="move"
                    class="absolute w-full flex justify-between px-3 top-2/4 -translate-y-2/4 hover:[&_svg]:opacity-100">
                    <button>
                        <span class="iconify text-w1 text-[36px] opacity-50 transition-opacity"
                            data-icon="ant-design:left-outlined"></span>
                    </button>
                    <button>
                        <span class="iconify text-w1 text-[36px] opacity-50 transition-opacity"
                            data-icon="ant-design:right-outlined"></span>
                    </button>
                </div>

                {{-- DOT --}}
                <div id="dot"
                    class="absolute left-2/4 bottom-1 md:bottom-3 -translate-x-2/4 flex justify-center gap-2 w-full">
                    @foreach ($data as $d)
                        <button class="py-2 [&_span]:hover:h-[5px] [&_span]:hover:bg-b1">
                            <span class="block h-[3px] bg-w1 w-10 transition-all"></span>
                        </button>
                    @endforeach
                </div>

            </div>

        </div>

    </div>

    {{-- BANNER DATA --}}
    <script type="appllication/json">{!! $data !!}</script>

</div>
