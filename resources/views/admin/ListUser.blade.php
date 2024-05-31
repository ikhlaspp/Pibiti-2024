@extends('layouts.admin.layout')

@section('section')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="/admin"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="{{ route('users.view') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Peserta</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">List</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">List Peserta</h1>
            </div>
            <div class="sm:flex">
                <form action="{{ route('users.view') }}" method="GET"
                    class="items-center lg:pr-3 hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <label for="users-search" class="sr-only">Search</label>
                    <div class="relative mt-1 lg:w-64 xl:w-96">
                        <input type="text" name="search" id="users-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="cari nama peserta...">
                    </div>
                    <div class="flex pl-0 space-x-1 sm:pl-2 sm:mt-0">
                        <button type="submit"
                            class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white text-sm rounded-lg px-4 py-2">
                            Cari Peserta
                        </button>
                    </div>
                </form>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <form action="{{ route('users.import') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="first_name" name="excel" placeholder="Masukkan link google drive"
                            required>

                        <button type="submit">
                            <span
                                class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Import
                            </span>
                        </button>
                    </form>
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <form action="{{ route('users.export') }}" method="get">
                        @csrf
                        <button type="submit">
                            <span
                                class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Export
                            </span>
                        </button>
                    </form>
                </div>

            </div>

            @if (Session::get('error'))
                <div class="alert alert-success">
                    <span
                        class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ Session::get('error') }}</span>
                </div>
            @endif

        </div>
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox"
                                            class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Nama
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Email
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Bukti
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Link WA Grub
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Nilai
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @foreach ($user as $item)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox"
                                                class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                        {{ $item->name }}
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                        {{ $item->email }}
                                    </td>
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="{{ $item->urlbukti }}" target="_blank">{{ $item->urlbukti }}</a>
                                    </td>
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="{{ $item->kelompok }}" target="_blank">{{ $item->kelompok }}</a>
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                        {{ $item->total_nilai_tugas }}
                                    </td>

                                    <td>
                                        <button data-modal-toggle="grade-modal-{{ $item->id }}"
                                            class="focus:outline-none text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 mr-2 mb-2">
                                            Lihat Nilai
                                        </button>
                                    </td>

                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white flex items-center gap-2">
                                        @if ($item->role == 0)
                                            <form action="{{ route('users.verification', $item->id) }}" method="post"
                                                onclick="return confirm('Apakah Anda yakin ingin memverifikasi user ini?')">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    class="focus:outline-none text-white bg-lime-600 hover:bg-lime-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-[1rem] py-2 mr-2 mb-2">Verifikasi</button>
                                            </form>
                                        @endif
                                        @if ($item->role == 2)
                                            <form action="{{ route('users.unverification', $item->id) }}" method="post"
                                                onclick="return confirm('Apakah Anda yakin ingin membatalkan verifikasi user ini?')">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 mr-2 mb-2">Batalkan
                                                    Verifikasi</button>
                                            </form>
                                            <a href="https://wa.me/62{{ $item->nomor_telepon }}?text=Selamat!%20Akun%20Anda%20telah%20berhasil%20diverifikasi%20oleh%20admin%20Pibiti2023.%0A%0AAnda%20dapat%20melihat%20informasi%20lebih%20lanjut%20tentang%20program%20Pibiti2023%20di%20website%20kami:%0A%0Ahttps%3A%2F%2Fpibiti2023.com%2F%0A%0ATerima%20kasih%2C%0ATim%20Pibiti2023"
                                                target="_blank" type="submit"
                                                class="focus:outline-none text-white bg-lime-600 hover:bg-lime-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-[1rem] py-2 mr-2 mb-2">Whatsapp</a>
                                        @endif
                                        <form action="{{ route('users.reset-password', $item->id) }}" method="post"
                                            onclick="return confirm('Apakah Anda yakin ingin mereset password user ini?')">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 mr-2 mb-2">
                                                Reset Password</button>
                                        </form>

                                        <button data-modal-toggle="add-point-modal-{{ $item->id }}"
                                            class="focus:outline-none text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 mr-2 mb-2">
                                            Tambah Nilai</button>

                                        <button type="button" data-modal-toggle="add-link-wa-{{ $item->id }}"
                                            class="focus:outline-none text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 mr-2 mb-2">
                                            Tambah Link WA
                                        </button>
                                    </td>

                                    <!-- Modal Tambah Nilai -->
                                    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                        id="add-point-modal-{{ $item->id }}">
                                        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                                                    <h3 class="text-xl font-semibold dark:text-white">
                                                        Tambah Nilai User
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                                        data-modal-toggle="add-point-modal-{{ $item->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                {{-- <form method="post" action="{{ route('Task.verificationFp', [$tugas->pivot->id]) }}"> --}}
                                                <form method="post" action="{{ route('Task.TambahNilai', $item->id) }}">
                                                    <div class="p-6 space-y-6">
                                                        @csrf
                                                        <div class="grid grid-cols-6 gap-6">
                                                            <div class="col-span-12">
                                                                <label for="keterangan"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                                                                <input type="text" name="keterangan" id="keterangan"
                                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                    placeholder="Keterangan..." required>

                                                            </div>
                                                            <div class="col-span-12">
                                                                <label for="nilai"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai</label>
                                                                <input type="number" name="nilai" id="nilai"
                                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                    placeholder="Masukkan nilai..." required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div
                                                        class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                                                        <button
                                                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                                            type="submit">Konfirmasi
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Modal tambah link grub wa --}}
                                    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                        id="add-link-wa-{{ $item->id }}">
                                        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                                                    <h3 class="text-xl font-semibold dark:text-white">
                                                        Tambah Link WA
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                                        data-modal-toggle="add-link-wa-{{ $item->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form method="post" action="{{ route('users.link-group', $item->id) }}">
                                                    <div class="p-6 space-y-6">
                                                        @csrf
                                                        <div class="grid grid-cols-6 gap-6">
                                                            <div class="col-span-12">
                                                                <label for="link"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link
                                                                    URL</label>
                                                                <input type="text" name="kelompok" id="link"
                                                                    value="{{ $item->kelompok }}"
                                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                    placeholder="Masukkan link..." required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div
                                                        class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                                                        <button
                                                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                                            type="submit">Konfirmasi
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                        id="grade-modal-{{ $item->id }}">
                                        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                                                    <h3 class="text-xl font-semibold dark:text-white">
                                                        Nilai Yang Kamu Peroleh
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                                        data-modal-toggle="grade-modal-{{ $item->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->

                                                <div class="relative overflow-x-auto">
                                                    @if (!empty($users))
                                                        <div>
                                                            <div>
                                                                <p scope="col" class="px-6 py-3">
                                                                    Keterangan
                                                                </p>
                                                                <p scope="col" class="px-6 py-3">
                                                                    Nilai
                                                                </p>
                                                            </div>
                                                        </div>
                                                        @foreach ($item->nilai as $grade)
                                                            <div
                                                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                                <p scope="row"
                                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    {{ $grade['keterangan'] }}
                                                                </p>
                                                                <p class="px-6 py-4 font-medium text-gray-900">
                                                                    {{ $grade['nilai'] }}

                                                                </p>
                                                            </div>
                                                        @endforeach
                                                        <div>
                                                            <p scope="row"
                                                                class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                                                Total Nilai Yang Anda
                                                                Peroleh: {{ $item->total_nilai_tugas }}
                                                            </p>
                                                            {{-- <p class="px-6 py-4 font-bold text-gray-900">
                                                                    {{ $totalNilai }}
                                                                </p> --}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <div
        class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center space-x-3">
            <a href="{{ $user->previousPageUrl() }}"
                class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                Previous
            </a>
            <a href="{{ $user->nextPageUrl() }}"
                class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Next
                <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
@endsection
