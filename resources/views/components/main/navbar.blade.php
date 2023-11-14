{{-- SUB NAV --}}
<nav class="bg-w2">

    {{-- WRAPPER --}}
    <div class="max-w-screen-xl mx-auto flex justify-end gap-[2rem] py-2 px-5">

        {{-- ITEM --}}
        @foreach (["about", "partner", "promo"] as $i)
            <a class="capitalize text-sm font-[GeneralSans-Medium] text-g1 hover:text-b1 transition-colors" href="/{{ $i }}">{{ $i }}</a>
        @endforeach

    </div>

</nav>

{{-- MAIN NAV --}}
<nav class="sticky top-0 text-b1 z-30">

    {{-- WRAPPER --}}
    <div class="max-w-screen-xl mx-auto bg-w1 p-5 flex justify-between gap-8">

        {{-- LOGO --}}
        <a class="mt-[12px]" href="/">
            <img class="h-[1.75rem]" src="/image/logo.svg" alt="Hoop Logo">
        </a>

        {{-- GROUP --}}
        <div class="w-full max-w-[620px]">

            {{-- SEARCH --}}
            <div class="rounded-md bg-w2 w-full flex items-center py-1 px-2">

                {{-- CATEGORY BUTTON --}}
                <button class="flex items-center gap-2 py-1 pl-3 pr-4 border-r-2 border-r-g1/25">
                    <span class="font-[GeneralSans-Medium]">Men's</span>
                    <span class="iconify" data-icon="mingcute:down-line"></span>
                </button>

                {{-- FORM --}}
                <form action="/search" class="w-full py-2 pl-4 pr-2 flex items-center justify-between">
                    <input type="text" name="q" placeholder="Search..." class="w-full"/>
                    <button type="submit">
                        <span class="iconify text-[24px] text-g2 hover:text-g1 transition-colors" data-icon="akar-icons:search"></span>
                    </button>
                </form>

            </div>

            {{-- RECOMMENDATION BUTTON --}}
            <div class="my-4 ml-2 flex gap-[30px]">
                @foreach (["Holographic Neon Jacket", "Casual Streetwear", "80's Outfit"] as $i)
                    <a href="#" class="text-sm text-g2 font-[GeneralSans-Medium] hover:text-b1 transition-colors">{{ $i }}</a>
                @endforeach
            </div>

        </div>

        {{-- GROUP BUTTON --}}
        <div class="flex flex-col items-end">

            {{-- WRAPPER --}}
            <div class="flex items-center gap-3">

                {{-- GROUP 1 --}}
                <div class="flex gap-2">
                    @foreach (["cil:bell", "ant-design:heart-outlined", "solar:bag-4-linear"] as $i)
                        <button class="p-2 rounded-md hover:bg-w2 transition-colors">
                            <span class="iconify text-[24px]" data-icon="{{ $i }}"></span>
                        </button>
                    @endforeach
                </div>

                {{-- DIVIDER --}}
                <div class="h-[25px] bg-g1 w-px mr-2"></div>

                {{-- GROUP 2 --}}
                <div class="flex items-center gap-2 font-[GeneralSans-Semibold]">
                    <a href="/login" class="py-2 px-4 rounded-lg bg-w1 text-b1 hover:bg-w2 hover:border-w2 hover:text-b1 transition-colors border-b1 border-2">Sign In</a>
                    <a href="/register" class="py-2 px-4 rounded-lg bg-b1 text-w1 hover:bg-b2 hover:text-w1 hover:border-b2 transition-colors border-b1 border-2">Register</a>
                </div>

            </div>

            {{-- SHIPMENT PICKER --}}
            <div class="mt-3">
                <button class="py-1 px-3 hover:bg-w2 rounded-md flex items-center gap-2">
                    <span class="iconify" data-icon="carbon:location-filled"></span>
                    <span class="font-[GeneralSans-Medium] ">
                        <span class="text-g1 text-sm mr-px">Ship to</span>
                        <span class="text-sm">Bandung, Indonesia</span>
                    </span>
                    <span class="iconify" data-icon="mingcute:down-line"></span>
                </button>
            </div>

        </div>

    </div>

</nav>