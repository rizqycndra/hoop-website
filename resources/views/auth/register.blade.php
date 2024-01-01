@extends('layouts.auth')

@section('body')
    <div class="h-fit w-full max-w-[400px] bg-w1 px-8 py-8 rounded-xl fixed inset-2/4 -translate-x-2/4 -translate-y-2/4">

        <div class="text-center mb-6">
            <h1 class="text-xl font-bold mb-1">Daftar Dashboard</h1>
            <p>Daftar akun admin</p>
        </div>

        <form method="POST">
            @csrf
            <div class="flex flex-col gap-4">

                <label for="name">
                    @error('name')
                        <p class="text-xs text-red-600 text-center mb-2">{{ $errors->first('name') }}</p>
                    @enderror
                    <input required class="text-center w-full p-4 bg-g2/10 rounded-md" type="text" name="name"
                        placeholder="Nama Lengkap" value="{{ old('name') }}">
                </label>

                <label for="username">
                    @error('username')
                        <p class="text-xs text-red-600 text-center mb-2">{{ $errors->first('username') }}</p>
                    @enderror
                    <input required class="text-center w-full p-4 bg-g2/10 rounded-md" type="text" name="username"
                        placeholder="Masukan Username" value="{{ old('username') }}">
                </label>

                <label for="email">
                    @error('email')
                        <p class="text-xs text-red-600 text-center mb-2">{{ $errors->first('email') }}</p>
                    @enderror
                    <input required class="text-center w-full p-4 bg-g2/10 rounded-md" type="email" name="email"
                        placeholder="Masukan Email" value="{{ old('email') }}">
                </label>

                <label for="password">
                    @error('password')
                        <p class="text-xs text-red-600 text-center mb-2">{{ $errors->first('password') }}</p>
                    @enderror
                    <input required class="text-center w-full p-4 bg-g2/10 rounded-md" type="password" name="password"
                        placeholder="Masukan Password">
                </label>
                
                <label for="password_confirmation">
                    @error('password_confirmation')
                        <p class="text-xs text-red-600 text-center mb-2">{{ $errors->first('password_confirmation') }}</p>
                    @enderror
                    <input required class="text-center w-full p-4 bg-g2/10 rounded-md" type="password" name="password_confirmation"
                        placeholder="Konfirmasi Password">
                </label>

                <button
                    class="mt-3 hover:bg-b2 transition-colors bg-b1 text-w1 rounded-md px-4 py-3 font-bold uppercase tracking-widest">
                    Daftar
                </button>

            </div>
        </form>

    </div>
@endsection
