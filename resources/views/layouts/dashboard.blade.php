<!DOCTYPE html>
<html lang="en">
@include('data.head')
<body class="min-h-[4000px] bg-g2/25">
    
    <div>
        <main>
            @yield('body')
        </main>
        @include('components.main.footer')
    </div>
    <div id="__blackDip__" style="display: none" class="z-40 bg-b1/50 fixed w-full h-full top-0 left-0 backdrop-blur-sm"></div>

</body>
</html>