@extends('layouts.auth')

@section('body')
    <div class="h-fit w-full max-w-[400px] bg-w1 px-8 py-8 rounded-xl fixed inset-2/4 -translate-x-2/4 -translate-y-2/4">

        <div class="text-center mb-6">
            <h1 class="text-xl font-bold mb-1">Login Dashboard</h1>
            <p>Masuk ke halaman dashboard admin</p>
        </div>

        <form method="POST">
            @csrf
            <div class="flex flex-col gap-4">

                <label for="username">
                    @error('username')
                        <p class="text-xs text-red-600 text-center mb-2">{{ $errors->first('username') }}</p>
                    @enderror
                    <input required class="text-center w-full p-4 bg-g2/10 rounded-md" type="text" name="username"
                        placeholder="Masukan Username" value="{{ old('username') }}">
                </label>

                <label for="password">
                    <input required class="text-center w-full p-4 bg-g2/10 rounded-md" type="password" name="password"
                        placeholder="Masukan Password" value="{{ old('password') }}">
                </label>

                <button
                    class="mt-3 hover:bg-b2 transition-colors bg-b1 text-w1 rounded-md px-4 py-3 font-bold uppercase tracking-widest">
                    Masuk
                </button>

            </div>
        </form>

    </div>
@endsection
