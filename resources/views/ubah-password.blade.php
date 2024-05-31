@extends('layouts.app')
@section('title')
    Ubah Password
@endsection
@section('content')
    <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="/image/login.webp" alt="" class="w-full h-full object-cover">
        </div>

        <div
            class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
                flex items-center justify-center">

            <div class="w-full h-100">
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Ubah Password</h1>
                @if (session('error'))
                    <div class="alert alert-danger text-red-500 text-sm mt-5" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success text-green-500 text-sm mt-5" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('password.update') }}" class="mt-6" method="POST">
                    @csrf
                    @method('put')
                    <div>
                        <label class="block text-gray-700" for="old_password">Password Lama</label>
                        <input type="password" name="old_password" id="old_password" placeholder="Enter Password"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            required>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700" for="password">Password Baru</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password" minlength="4"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                        focus:bg-white focus:outline-none"
                            required>
                    </div>

                    @if ($errors->has('password_confirmation'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('password_confirmation') }}
                        </div>
                    @endif

                    <button type="submit"
                        class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                      px-4 py-3 mt-6">Ubah
                    </button>
                </form>

                <hr class="my-6 border-gray-300 w-full">
                <p class="mt-8">Butuh bantuan kami ? <a href="{{ url('/contact') }}"
                        class="text-blue-500 hover:text-blue-700 font-semibold" target="blank">Hubungi Kami</a></p>


            </div>
        </div>
    </section>
@endsection
