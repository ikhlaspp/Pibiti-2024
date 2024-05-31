@extends('layouts.app')

@section('title', 'Final Project')

@section('content')

    {{-- <ol class="items-center sm:flex p-3">
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <a href="{{ url('/welcome') }}"
                    class="z-10 flex items-center justify-center w-16 h-16 bg-green-100 rounded-full ring-0 ring-white dark:bg-green-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <p class="text-3xl font-bold">W</p>
                </a>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                    December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan party PIBITI23</p>
            </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <a href="{{ url('/peserta/day/1') }}"
                    class="z-10 flex items-center justify-center w-16 h-16 cursor-pointer rounded-full ring-0 ring-white shrink-0 {{ request()->is('peserta/day/1') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                    <p class="text-3xl font-bold">1</p>
                </a>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                    December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan party PIBITI23</p>
            </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <a href="{{ url('/peserta/day/2') }}"
                    class="z-10 flex items-center justify-center w-16 h-16 cursor-pointer bg rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('peserta/day/2') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                    <p class="text-3xl font-bold">2</p>
                </a>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                    December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan party PIBITI23</p>
            </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <a href="{{ url('/peserta/day/3') }}"
                    class="z-10 flex items-center justify-center w-16 h-16 cursor-pointer bg rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('peserta/day/3') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                    <p class="text-3xl font-bold">3</p>
                </a>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                    December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan party PIBITI23</p>
            </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <a href="{{ url('/peserta/final-project') }}"
                    class="z-10 flex items-center justify-center w-16 h-16 cursor-pointer bg rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('peserta/final-project') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                    <p class="text-3xl font-bold">FP</p>
                </a>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                    December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan party PIBITI23</p>
            </div>
        </li>
    </ol> --}}

    @if (session('success-tugas'))
        <div id="alert-3"
            class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                Pengumpulan Tugas berhasil.
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    @if (session('warning-tugas'))
        <div id="alert-2"
            class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                Pengumpulan Tugas gagal
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    <div class="m-5">
        {!! $requirement['content'] !!}
    </div>

    <form action="/peserta/tugas/fp" method="POST"
            class="bg-white shadow-sm mt-1 md:mt-2 rounded-lg w-full">
            @csrf

             <div class="bg-white p-5 shadow-sm mt-5 rounded-lg w-full">
                <div class="mt-3">
                    <label for="first_name" class="block text-lg font-medium text-gray-900 dark:text-white">Pengumpulan
                        Tugas</label>
                        @if ($statusTugas == "Belum Mengumpulkan")
                            <p class="w-60 mt-3 rounded-lg text-sm mb-4 text-red-600"> <span class="text-gray-700 font-bold">Status :</span> {{ $statusTugas }}</p>
                            <p class="text-sm text-gray-600 font-bold mb">Jangan lupa untuk mengerjakan Final Project yaa!</p>
                        @elseif($statusTugas == "Sudah di Verifikasi")
                            <p class="w-60 mt-3 rounded-lg text-sm mb-4 text-green-500"> <span class="text-gray-700 font-bold">Status :</span> {{ $statusTugas }}</p>
                            <p>Kamu telah menyelesaikan Final Project</p>
                        @elseif($statusTugas == "Belum di Verifikasi")
                            <p class="w-60  rounded-lg text-sm mb-4 text-yellow-500"> <span class="text-gray-700 font-bold">Status :</span> {{ $statusTugas }}</p>
                            <p>Tunggu yaa, Final Project kamu masih di proses oleh panitia</p>
                        @elseif($statusTugas == "Perlu Perbaikan")
                            <p class="w-60  rounded-lg text-sm mb-4 text-red-600"> <span class="text-gray-700 font-bold">Status :</span> {{ $statusTugas }}</p>
                            <p>Final Project yang kamu serahkan masih perlu perbaikan lagi, Semangat yaa</p>
                        @endif
                       
                    <input type="text" id="first_name" name="tugas"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan link google drive" value="{{ $tugasHariIni != null ? $tugasHariIni->url : '' }}" required>
                </div>

                <button type="submit" class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Kirim</button>
            </div>
    </form>

@endsection
