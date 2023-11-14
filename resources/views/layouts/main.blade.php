<!DOCTYPE html>
<html lang="en">
@include('data.head')
<body>
    
    <div>
        @include('components.main.navbar')
        <main>
            @yield('body')
        </main>
        @include('components.main.footer')
    </div>

</body>
</html>