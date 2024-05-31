@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @if (session('success'))
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
                {{ session('success') }}
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
    @if (session('warning'))
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
                {{ session('warning') }}
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
                {{ session('success-tugas') }}
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
    @if (!empty($videoRecord))
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
                Berikut hasil video record yang telah disediakan oleh panitia.
                <a href="<?= $videoRecord['urlvideo'] ?>" target="_blank"
                    class="font-semibold underline hover:no-underline">Klik Disini</a>.
            </div>
        </div>
    @endif
    @if (!empty($postTest))
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
                Berikut link post test yang telah disediakan oleh panitia.
                <a href="<?= $postTest['urlpost'] ?>" target="_blank"
                    class="font-semibold underline hover:no-underline">Klik Disini</a>.
            </div>
        </div>
    @endif
    @if (Request::is('peserta/day/1') ||
            Request::is('peserta/day/2') ||
            Request::is('peserta/day/3') ||
            Request::is('peserta/day/4') ||
            Request::is('peserta/day/5') ||
            Request::is('peserta/day/6'))
        @if ($zoom)
            <div id="alert-4"
                class="mt-10 flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-yellow-300"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    Berikut adalah <a href="{{ $zoom->link_zoom }}" target="_blank"
                        class="font-semibold underline hover:no-underline">Link Zoom</a>,
                    yang telah disediakan oleh panitia untuk panduan seputar PIBITI 2023.
                    Harap untuk segera hadir ya!
                </div>
            </div>
        @endif
        <div class="flex flex-col md:flex-row gap-2 md:gap-5 w-full">
            @if (empty($absen_today['id']))
                <form action="/peserta/absen/{{ $day }}" method="POST"
                    class="bg-white p-5 shadow-sm mt-1 md:mt-2 rounded-lg w-full">
                    @csrf
                    <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Kode
                        Absensi</label>
                    <p class="text-sm font-bold text-gray-600 mb-4">Untuk melakukan absensi, harap masukkan kode absensi
                        yang disediakan oleh panitia saat zoom berlangsung</p>
                    <input type="text" id="first_name" name="token"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan kode" required>
                    <button type="submit"
                        class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Absen</button>
                </form>
            @else
                <div class="bg-white p-5 shadow-sm mt-1 md:mt-2 rounded-lg w-full">
                    <label for="first_name" class="block text-lg font-medium text-green-500 mb-1">Anda sudah berhasil
                        melakukan absensi</label>
                </div>
            @endif
            <div class="bg-white p-5 shadow-sm mt-1 md:mt-2 rounded-lg w-full">
                <label for="first_name" class="block text-lg font-medium text-gray-900 dark:text-white mb-1">Link
                    Materi & Tugas</label>
                @if ($materi != null)
                    <a href="{{ $materi->urlmateri }}" target="_blank">
                        <button type="button"
                            class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2 text-center mr-2 mb-2">Materi</button>
                    </a>
                @endif

                @if ($tugas != null)
                    <button type="button" data-modal-toggle="task-modal-{{ $tugas->id }}"
                        class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2 text-center mr-2 mb-2">Tugas</button>

                    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                        id="task-modal-{{ $tugas->id }}">
                        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                                    <h3 class="text-xl font-semibold dark:text-white">
                                        Tugas Peserta
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                        data-modal-toggle="task-modal-{{ $tugas->id }}">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <iframe src="{{ $tugas->urltugas }}" frameborder="0" width="600" height="600"
                                    class="mx-auto mt-3"></iframe>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        @if (Request::is('peserta/day/3'))
            <form action="/peserta/tugas/{{ $day }}" method="POST"
                class="bg-white shadow-sm mt-1 md:mt-2 rounded-lg w-full">
                @csrf
                <div class="bg-white p-5 shadow-sm mt-5 rounded-lg w-full hidden">
                    <div class="mt-3">
                        <label for="first_name"
                            class="block text-lg font-medium text-gray-900 dark:text-white">Pengumpulan
                            Tugas</label>
                        <p class="text-sm text-gray-600 mb-4">Tugas dikumpulkan jadi 1 folder google drive</p>
                        <p class="text-sm text-gray-600 mb-4">Status : {{ $statusTugas }}</p>
                        <input type="text" id="first_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan link google drive" required>
                    </div>

                    @if ($statusTugas != 'Sudah di Verifikasi')
                        <button type="submit"
                            class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Kirim</button>
                    @endif
                </div>
            </form>
            @if (!empty($postTest))
                <form action="/peserta/upload-posttest/{{ $day }}" method="POST" enctype="multipart/form-data"
                    class="bg-white shadow-sm mt-1 md:mt-2 rounded-lg w-full">
                    @csrf
                    <div class="bg-white p-5 shadow-sm mt-5 rounded-lg w-full">
                        <div class="mt-3">
                            <label for="first_name"
                                class="block text-lg font-medium text-gray-900 dark:text-white">Pengumpulan
                                Hasil Post Test</label>
                            <p class="text-sm text-gray-600 mb-4">Hasil post test dikumpulkan berupa bukti screenshoot
                                hasil post test</p>
                            <p class="text-sm text-gray-600 mb-4">Status : {{ $statusPostTest }}</p>
                            <input type="file" accept="image/png, image/gif, image/jpeg"id="first_name"
                                name="posttest"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan link google drive" required>
                        </div>

                        @if (empty($postTestHariIni))
                            <button type="submit"
                                class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Kirim</button>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </form>
            @endif
        @elseif (Request::is('peserta/day/4'))
            @if ($zoom)
                <div id="alert-4"
                    class="mt-10 flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-yellow-300"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                        Berikut adalah <a href="{{ $zoom->link_zoom }}" target="_blank"
                            class="font-semibold underline hover:no-underline">Link Zoom</a>,
                        yang telah disediakan oleh panitia untuk panduan seputar PIBITI 2023.
                        Harap untuk segera hadir ya!
                    </div>
                </div>
            @endif

            @if ($sertificate)
                <div id="alert-4"
                    class="mt-10 flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-yellow-300"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                        Berikut adalah <a href="#" target="_blank"
                            class="font-semibold underline hover:no-underline">Link Sertifikat</a>
                        anda sebagai bukti apabila anda telah menyelesaikan acara PIBITI 2023 dari awal hingga akhir.
                        Congratulations!! 🥳
                    </div>
                </div>
            @else
                <div id="alert-4" class="mt-10 flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-100"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                        Harap tunggu sertifikat anda masih dalam proses
                    </div>
                </div>
            @endif
        @else
            @if (!empty($tugas))
                <form action="/peserta/tugas/{{ $day }}" method="POST"
                    class="bg-white shadow-sm mt-1 md:mt-2 rounded-lg w-full">
                    @csrf

                    <div class="bg-white p-5 shadow-sm mt-5 rounded-lg w-full">

                        <div class="mt-3">
                            <label for="first_name"
                                class="block text-lg font-medium text-gray-900 dark:text-white">Pengumpulan
                                Tugas</label>
                            <p class="text-sm text-gray-600 mb-4">Tugas dikumpulkan jadi 1 folder google drive</p>

                            @if ($statusTugas == 'Belum Mengumpulkan')
                                <p class="w-60 mt-3 rounded-lg text-sm mb-4 text-red-600"> <span
                                        class="text-gray-700 font-bold">Status :</span> {{ $statusTugas }}</p>
                                <p class="text-sm text-gray-600 font-bold mb">Jangan lupa untuk mengerjakan tugasnya yaa!
                                </p>
                            @elseif($statusTugas == 'Sudah di Verifikasi')
                                <p class="w-60 mt-3 rounded-lg text-sm mb-4 text-green-500"> <span
                                        class="text-gray-700 font-bold">Status :</span> {{ $statusTugas }}</p>
                                <p>Kamu telah menyelesaikan tugas</p>
                            @elseif($statusTugas == 'Belum di Verifikasi')
                                <p class="w-60  rounded-lg text-sm mb-4 text-yellow-500"> <span
                                        class="text-gray-700 font-bold">Status :</span> {{ $statusTugas }}</p>
                                <p>Tunggu yaa, tugas kamu masih di proses oleh panitia</p>
                            @elseif($statusTugas == 'Perlu Perbaikan')
                                <p class="w-60  rounded-lg text-sm mb-4 text-red-600"> <span
                                        class="text-gray-700 font-bold">Status :</span> {{ $statusTugas }}</p>
                                <p>Tugas yang kamu serahkan masih perlu perbaikan lagi, Semangat yaa</p>
                            @endif

                            <input type="text" id="first_name" name="tugas"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan link google drive"
                                value="{{ $tugasHariIni != null ? $tugasHariIni->url : '' }}" required>
                        </div>

                        @if ($statusTugas != 'Sudah di Verifikasi')
                            <button type="submit"
                                class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Kirim</button>
                        @endif
                    </div>
                </form>
            @endif

            @if (!empty($postTest))
                <form action="/peserta/upload-posttest/{{ $day }}" method="POST" enctype="multipart/form-data"
                    class="bg-white shadow-sm mt-1 md:mt-2 rounded-lg w-full">
                    @csrf

                    <div class="bg-white p-5 shadow-sm mt-5 rounded-lg w-full">
                        <div class="mt-3">
                            <label for="first_name"
                                class="block text-lg font-medium text-gray-900 dark:text-white">Pengumpulan
                                Hasil Post test</label>
                            <p class="text-sm text-gray-600 mb-4">Hasil post test dikumpulkan berupa bukti screenshoot
                                hasil post test</p>

                            @if ($statusPostTest == 'Belum Mengumpulkan')
                                <p class="w-60 mt-3 rounded-lg text-sm mb-4 text-red-600"> <span
                                        class="text-gray-700 font-bold">Status :</span> {{ $statusPostTest }}</p>
                                <p class="text-sm text-gray-600 font-bold mb">Jangan lupa untuk mengerjakan Post Test yaa!
                                </p>
                            @elseif($statusPostTest == 'Sudah di Verifikasi')
                                <p class="w-60 mt-3 rounded-lg text-sm mb-4 text-green-500"> <span
                                        class="text-gray-700 font-bold">Status :</span> {{ $statusPostTest }}</p>
                                <p>Kamu telah menyelesaikan Post Test</p>
                            @elseif($statusPostTest == 'Belum di Verifikasi')
                                <p class="w-60  rounded-lg text-sm mb-4 text-yellow-500"> <span
                                        class="text-gray-700 font-bold">Status :</span> {{ $statusPostTest }}</p>
                                <p>Tunggu yaa, Post Test kamu masih di proses oleh panitia</p>
                            @elseif($statusPostTest == 'Ditolak')
                                <p class="w-60  rounded-lg text-sm mb-4 text-red-600"> <span
                                        class="text-gray-700 font-bold">Status :</span> {{ $statusPostTest }}</p>
                                <p>Maaf Post Test yang kamu kumpulkan ditolak</p>
                            @endif

                            <p class="text-sm text-gray-600 mb-4">Status : {{ $statusPostTest }}</p>
                            <input type="file" accept="image/png, image/gif, image/jpeg" id="first_name"
                                name="posttest"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan link google drive" required>
                        </div>

                        @if ($statusPostTest != 'Sudah di Verifikasi')
                            <button type="submit"
                                class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Kirim</button>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </form>
            @endif
        @endif
    @endif


@endsection
