@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="mx-auto max-w-screen-xl">
        <div class="flex flex-col md:flex-row gap-2 md:gap-5 w-full">
            <div id="alert-4"
                class="mt-10 flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
                role="alert">
                <p>Status Pendaftaran:
                    @if (Auth::user()->role == 0)
                        <span class="text-gray-500 font-bold">Masih Belum Terverifikasi</span>
                    @else
                        <span class="text-green-500 font-bold">Terverifikasi</span>
                    @endif
                </p>
            </div>
        </div>

        <div id="alert-4"
            class="mt-10 flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-yellow-300"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                Berikut adalah <a href="#" target="_blank" class="font-semibold underline hover:no-underline">Link
                    Guidebook</a>,
                yang telah disediakan oleh panitia untuk panduan seputar PIBITI 2023.
                Harap dibaca!
            </div>
        </div>

        @if (!empty(Auth::user()->kelompok))
            <div id="alert-4"
                class="mt-10 flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    Berikut link group WhatsApp kelompok anda yang telah disediakan oleh panitia.
                    <a href="<?= Auth::user()->kelompok ?>" target="_blank"
                        class="font-semibold underline hover:no-underline">Klik Disini</a>.
                </div>
            </div>
        @endif

        <div class="my-7 mx-auto">
            <iframe src="https://drive.google.com/file/d/1i7Y2DXZuB51AF5l6LMgfnuonqgg-FnPD/preview" width="1280"
                height="600" allow="autoplay" class="mx-auto"></iframe>
            <div class="pl-4">
                <p class="w-1/2 h-10 truncate text-2xl font-medium mt-3 mb-1">Mau Belajar Bikin Website? Bingung Mulai
                    Darimana?</p>
                <p class="text-grey-darker text-xs mb-2">
                    <span>PIBITI 2023</span>
                    <span>&middot;</span>
                    <span>7.5M views</span>
                    <span>&middot;</span>
                    <span>2 days ago</span>
                </p>
            </div>
            <div class="flex justify-between items-center py-4 px-16 bg-slate-100">

                <div class="flex items-center">
                    <img class="w-24 h-24 bg-white  rounded-full" src="../image/Logo PIBITI 1.png" alt="channel_logo">
                    <div class="ml-6">
                        <div class="text-2xl font-normal flex items-center">
                            <span class="mr-2">PIBITI 2023</span>
                            <span
                                class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                        </div>
                        <p class="mt-2 font-hairline text-sm">1.5M subscribers</p>
                    </div>
                </div>
                <div class="text-grey-dark">
                    <button
                        class="appearance-none bg-white px-3 py-2 bg-grey-light uppercase text-grey-darker text-sm mr-4">Subscribed
                        126K</button>
                    <span><i class="fa fa-bell fa-lg" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>




        {{--        <a href="/password/change" type="button" --}}
        {{--                class="inline-flex items-center mt-5 justify-center w-1/2 px-3 py-3 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 me-4"> --}}
        {{--            Ubah Password --}}
        {{--        </a> --}}
    </section>
@endsection
