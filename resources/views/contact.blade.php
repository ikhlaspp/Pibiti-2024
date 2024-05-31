@extends('components.master')
@section('content')
    {{-- <div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md w-96 text-center">
        <!-- Isi card Anda di sini -->
        <h2 class="text-2xl font-semibold mb-4">Jangan malu untuk hubungi kami ya!</h2>
        <p>Kak Aimee</p>
        <button class="mt-2 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-400 focus:ring-opacity-50 transition duration-300 ease-in-out" onclick="window.location.href='https://wa.me/6288801782678'">Hubungi via WhatsApp</button>
        <p>Kak Asyraf</p>
        <button class="mt-2 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-400 focus:ring-opacity-50 transition duration-300 ease-in-out" onclick="window.location.href='https://wa.me/6281357251810'">Hubungi via WhatsApp</button>
    </div>
</div> --}}

    <main class="max-w-screen-xl mx-auto">

        <section class="flex flex-col-reverse md:flex-row gap-10 mt-20 items-center py-14">
            <div class="w-full md:w-[60%] px-5">
                <h1 class="text-4xl font-semibold mb-3">Hubungi Kami</h1>
                <p class="mb-5">
                    Kontak kami untuk pertanyaan atau sekitar
                    PIBITI!
                </p>
                <button
                    class="text-white bg-primary-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-bold rounded-lg text-sm px-8 py-3 text-center flex gap-2 mx-auto lg:mx-0 mt-3 w-36">
                    <a href="https://wa.me/6285607123785" target="_blank" rel="noopener noreferrer" class="w-full text-center"
                        style="text-decoration: none; color: inherit;">
                        <p class="w-full text-center">Cantika</p>
                    </a>

                </button>
                <button
                    class="text-white bg-primary-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-bold rounded-lg text-sm px-8 py-3 text-center flex gap-2 mx-auto lg:mx-0 mt-3 w-36">
                    <a href="https://wa.me/6285895981540" target="_blank" rel="noopener noreferrer"
                        class="w-full text-center" style="text-decoration: none; color: inherit;">
                        <p class="w-full text-center">Caca</p>
                    </a>
                </button>

            </div>

            <div class="md:w-[40%] h-[400px] relative mt-10">

                <img src="/image/cantika.svg" alt="photo"
                    class="absolute object-cover object-top                                                                                                                      rounded-lg top-0 -left-10 h-[18rem] w-[20rem]" />
                <img src="/image/caca.svg" alt="photo"
                    class="absolute object-cover rounded-lg bottom-0 right-0 h-[18rem] w-[20rem] " />
            </div>
        </section>
</main @endsection
