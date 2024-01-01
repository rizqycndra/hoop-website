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
<nav class="sticky w-full top-0 text-b1 z-30">

    {{-- WRAPPER --}}
    <div class="max-w-screen-xl mx-auto bg-w1 px-5 py-3 sm:p-5 lg:pb-0 flex justify-between gap-2 md:gap-8 items-center md:items-stretch">

        {{-- LOGO --}}
        <div class="shrink-0 mr-2 md:mr-0">
            <a class="inline-block mt-[12px]" href="/">
                <img class="h-[1.5rem] sm:h-[1.75rem]" src="/image/logo.svg" alt="Hoop Logo">
            </a>
        </div>

        {{-- GROUP --}}
        <div class="w-full max-w-[620px]">

            {{-- SEARCH --}}
            <div class="flex rounded-md bg-w2 w-full items-center px-1 py-0 sm:py-1 sm:px-2">

                {{-- CATEGORY BUTTON --}}
                <button id="navbarCB" class="hidden sm:flex items-center gap-2 py-1 pl-3 pr-4 border-r-2 border-r-g1/25 [&>*]:hover:opacity-75">
                    <span class="font-[GeneralSans-Medium]">Men's</span>
                    <span class="iconify" data-icon="mingcute:down-line"></span>
                </button>

                {{-- FORM --}}
                <form action="/search" class="w-full py-2 pl-2 sm:pl-4 pr-2 flex items-center justify-between">
                    <input type="text" name="q" placeholder="Search..." class="w-full"/>
                    <button type="submit">
                        <span class="iconify text-[20px] sm:text-[24px] text-g2 hover:text-g1 transition-colors" data-icon="akar-icons:search"></span>
                    </button>
                </form>

            </div>

            {{-- RECOMMENDATION BUTTON --}}
            <div class="hidden lg:flex my-4 ml-2 gap-[30px] whitespace-nowrap">
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
                <div class="hidden lg:flex gap-2">
                    @foreach (["cil:bell", "ant-design:heart-outlined", "solar:bag-4-linear"] as $i)
                        <button class="p-2 rounded-md hover:bg-w2 transition-colors">
                            <span class="iconify text-[24px]" data-icon="{{ $i }}"></span>
                        </button>
                    @endforeach
                </div>

                {{-- DIVIDER --}}
                <div class="hidden lg:block h-[25px] bg-g1 w-px mr-2"></div>

                {{-- GROUP 2 --}}
                <div class="hidden md:flex items-center gap-2 font-[GeneralSans-Semibold] whitespace-nowrap">
                    <a href="/login" class="py-2 px-4 rounded-lg bg-w1 text-b1 hover:bg-w2 hover:border-w2 hover:text-b1 transition-colors border-b1 border-2">Sign In</a>
                    <a href="/register" class="py-2 px-4 rounded-lg bg-b1 text-w1 hover:bg-b2 hover:text-w1 hover:border-b2 transition-colors border-b1 border-2">Register</a>
                </div>

                {{-- DIVIDER --}}
                <div class="hidden md:block lg:hidden h-[25px] bg-g1 w-px ml-4"></div>

                {{-- MENU BUTTON --}}
                <button id="navbarMB" class="lg:hidden p-2 rounded-md hover:bg-w2 transition-colors">
                    <span class="iconify text-[24px] sm:text-[30px]" data-icon="mingcute:menu-line"></span>
                </button>

            </div>

            {{-- SHIPMENT PICKER --}}
            <div class="hidden lg:block mt-3">
                <button id="navbarLocPic" class="py-1 px-3 hover:bg-w2 rounded-md flex items-center gap-2">
                    <span class="iconify" data-icon="carbon:location-filled"></span>
                    <span class="font-[GeneralSans-Medium]">
                        <span class="text-g1 text-sm mr-px">Ship to</span>
                        <span class="text-sm">Bandung, Indonesia</span>
                    </span>
                    <span class="iconify" data-icon="mingcute:down-line"></span>
                </button>
            </div>

        </div>

    </div>

</nav>

{{-- MOBILE SIDEBAR MENU --}}
<nav id="navbarMS" class="translate-x-full transition-transform z-50 fixed w-full h-full bg-w1 top-0 right-0 max-w-xs flex flex-col gap-8 px-6 py-8">

    {{-- TITLE & CLOSE BUTTON --}}
    <div class="flex justify-between gap-3 items-center">
    
        {{-- BUTTON --}}
        <div class="flex items-center gap-2 w-full">
            @foreach (["cil:bell", "ant-design:heart-outlined", "solar:bag-4-linear"] as $i)
                <button class="p-2 rounded-md hover:bg-w2 transition-colors">
                    <span class="iconify text-[24px]" data-icon="{{ $i }}"></span>
                </button>
            @endforeach
        </div>

        <div class="bg-g2/50 h-px w-full"></div>
        
        {{-- CLOSE BUTTON --}}
        <button id="navbarMSClose" class="p-2">
            <span class="iconify text-[24px] text-g1" data-icon="uiw:close"></span>
        </button>

    </div>

    {{-- GROUP 1 --}}
    <div>

        {{-- SEARCH --}}
        <div class="flex rounded-md bg-w2 w-full items-center px-1 py-0 sm:py-1 sm:px-2">

            {{-- FORM --}}
            <form action="/search" class="w-full py-3 px-3 flex items-center justify-between">
                <input type="text" name="q" placeholder="Search..." class="w-full"/>
                <button type="submit">
                    <span class="iconify text-[20px] sm:text-[24px] text-g2 hover:text-g1 transition-colors" data-icon="akar-icons:search"></span>
                </button>
            </form>

        </div>

        {{-- CATEGORY BUTTON --}}
        <div class="mt-3">
            <a href="category" id="navbarMSCategory" class="py-2 px-3 w-full bg-w2 hover:bg-g2/50 rounded-md flex items-center justify-center gap-2">
                <span class="font-[GeneralSans-Medium]">Category</span>
                <span class="iconify" data-icon="mingcute:right-line"></span>
            </a>
        </div>

        {{-- SHIPMENT PICKER --}}
        <div class="w-full flex justify-center mt-2">
            <button id="navbarMSLocPic" class="py-1 px-3 hover:bg-w2 rounded-md flex items-center gap-2">
                <span class="iconify" data-icon="carbon:location-filled"></span>
                <span class="font-[GeneralSans-Medium]">
                    <span class="text-g1 text-sm mr-px">Ship to</span>
                    <span class="text-sm">Bandung, Indonesia</span>
                </span>
                <span class="iconify" data-icon="mingcute:down-line"></span>
            </button>
        </div>
        
    </div>

    {{-- GROUP 2 --}}
    <div class="flex w-full justify-center items-center gap-2 font-[GeneralSans-Semibold] whitespace-nowrap">
        <a href="/login" class="py-2 px-4 rounded-lg bg-w1 text-b1 hover:bg-w2 hover:border-w2 hover:text-b1 transition-colors border-b1 border-2">Sign In</a>
        <a href="/register" class="py-2 px-4 rounded-lg bg-b1 text-w1 hover:bg-b2 hover:text-w1 hover:border-b2 transition-colors border-b1 border-2">Register</a>
    </div>

    {{-- MORE LINK --}}
    <div class="flex items-center gap-5 justify-center w-full mt-3">
        @foreach (["about", "partner", "promo"] as $i)
            <a class="capitalize text-sm font-[GeneralSans-Medium] text-g1 hover:text-b1 transition-colors" href="/{{ $i }}">{{ $i }}</a>
        @endforeach
    </div>

</nav>