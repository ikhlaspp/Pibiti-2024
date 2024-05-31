@extends('layouts.admin.layout')

@section('section')
    <main class="p-5">
        <h1>Form Input Materi</h1>
        @if(session('success'))
            <p style="color:green;">{{ session('success') }}</p>
        @endif
        @if($errors->any())
            <div style="color:red;">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('materi.create') }}" method="POST">
            @csrf

            <div class="form-tambah-materi bg-white shadow-md rounded-lg">
                <div class="bg-white p-5 shadow-sm mt-1 md:mt-10 rounded-lg w-full">
                    <label for="first_name"
                           class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Judul</label>
                    <input type="text" id="judul" name="judul"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Judul" required>
                </div>
                <div class="bg-white p-5 shadow-sm rounded-lg w-full">
                    <label for="URL" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">URL</label>
                    <input type="text" id="url" name="urlmateri"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Url Materi" required>
                </div>

                <div class="bg-white p-5 shadow-sm rounded-lg w-full">
                    <div class="relative max-w-sm">
                        <label for="hari" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                            Pilih Tanggal
                        </label>
                        <input type="date" id="hari" name="hari"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Select date" required>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <button type="submit"
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 me-4 float-right">
                    Submit
                </button>
            </div>
    </main>
@endsection

