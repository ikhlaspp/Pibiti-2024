@extends('components.master')
@section('content')
    {{-- Banner --}}
    <section class="bg-white dark:bg-gray-800 py-30">
        <!-- <div class="grid max-w-screen-xl px-4 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"> -->
        <div
            class="max-w-screen-xl px-4 mx-auto lg:py-16 flex flex-col-reverse justify-center md:flex-row gap-5 md:gap-32 min-h-screen">
            {{-- <video autoplay loop muted plays-inline class="absolute inset-0 z-0 w-full h-full md:w-auto md:h-full">
                <source src="../image/test.mp4" type="video/mp4">
            </video> --}}

            <img class="absolute left-0 mb-10 aspect-[9/16] md:aspect-[16/9] md:w-full md:mb-10 md:top-0"
                src="../image/hero.jpg" />


            <div class=" place-self-center flex justify-center flex-col lg:col-span-7 w-full z-10">
                <h1
                    class="text-center my-5 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5x text-white">
                    Pelatihan Bidang Teknologi dan Informasi
                </h1>

                <p class="text-center mb-6 font-light text-gray-200 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Inovasi Anda adalah perubahan untuk masa depan Anda. Pelajari cara membuat situs web interaktif
                    dengan seorang ahli dan berkolaborasi bersama untuk membangun proyek dunia nyata!
                </p>

                <a href="{{ route('auth.login.view') }}" class="flex justify-center ">
                    <button type="button"
                        class=" text-primary-600 bg-gradient-to-r from-white to-primary-300 hover:animate-spin focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-800 font-bold rounded-lg text-sm px-8 py-4 text-center flex gap-2 mx-auto lg:mx-0 ">
                        Daftar Segera
                    </button>
                </a>
            </div>
            {{-- <div class="lg:mt-0 lg:col-span-5 w-full md:w-1/2 mt-20">
                <img src="../image/logo_pibiti_banner.webp" alt="mockup">
            </div> --}}
        </div>
    </section>
    {{-- End Banner  --}}

    {{-- Agenda  --}}
    <section class="bg-white" id="agenda">

        {{-- nomor 1 --}}
        <!-- <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6"> -->
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="gap-16 items-center px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 flex flex-col md:flex-row">
            <div data-aos="fade-up-right" class="font-light text-gray-500 sm:text-lg dark:text-gray-400 w-full md:w-1/2">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pembukaan Acara (5
                    Juli 2024)</h2>
                <p class=" text-gray-800 text-justify">Terima kasih dan selamat datang di acara
                    penyambutan
                    Pelatihan
                    Bidang
                    Teknologi dan Informasi PIBITI 2024. Kami sangat senang menyambut kehadiran Anda semua. Acara ini
                    dirancang untuk menjadi sebuah perjalanan yang kaya akan pembelajaran, kolaborasi, dan inovasi di dunia
                    teknologi.
                </p>

            </div>

            <div data-aos="fade-up-left" class="grid w-full md:w-1/2">
                <img class="h-30 w-auto rounded-lg" src="../image/image_2.png" alt="intro">
            </div>
        </div>
        {{-- nomor 2 --}}
        <div class="mt-20 gap-16 items-center px-4 mx-auto max-w-screen-xl lg:px-6 flex flex-col-reverse md:flex-row">
            <div data-aos="fade-up left"
                class="font-light text-gray-500 sm:text-lg dark:text-gray-400 order-2 w-full md:w-1/2">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Hari Pertama
                    PIBITI (6 Juli 2024)</h2>
                <p class="mb-4 text-gray-600">Pengenalan Laravel dan MVC. Peserta akan diperkenalkan
                    dengan Laravel, sebuah
                    framework PHP yang elegan dan efisien, serta konsep Model-View-Controller (MVC) yang merupakan dasar
                    dari struktur aplikasi modern. Kita akan memulai dengan instalasi dan konfigurasi Laravel, diikuti
                    dengan pembuatan dan pengaturan rute untuk menangani permintaan web.
                </p>

            </div>
            <div data-aos="fade-up-right" class="grid gap-4 w-full md:w-1/2 md:mt-20">
                <img class="h-30 w-auto rounded-lg" src="../image/image_3.png" alt="office content 1">
            </div>

        </div>
        {{-- nomor 3 --}}
        <div class="gap-16 mt-10 items-center px-4 mx-auto max-w-screen-xl lg:px-6 flex flex-col md:flex-row">
            <div data-aos="fade-up-right" class="font-light text-gray-500 sm:text-lg dark:text-gray-400 w-full md:w-1/2">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Hari Ke-2 PIBITI
                    (7 Juli 2024)</h2>
                <p class="mb-4 text-gray-600">Pembuatan Front-End dengan Blade dan Bootstrap. Hari kedua fokus pada
                    pembuatan
                    antarmuka pengguna dengan Blade Template Engine, yang memungkinkan pembuatan tampilan yang dinamis dan
                    modular. Peserta juga akan mengintegrasikan Bootstrap untuk mempercepat pengembangan dengan komponen
                    yang
                    sudah siap pakai dan responsif, serta mengimplementasikan formulir untuk interaksi pengguna.</p>
            </div>

            <div data-aos="fade-up-left" class="grid gap-4 w-full md:w-1/2 md:mt-20">
                <img class="h-30 w-auto rounded-lg" src="../image/image_4.jpg" alt="office content 1">
            </div>
        </div>
        {{-- nomor 4 --}}
        <div class="gap-16 mt-10 items-center px-4 mx-auto max-w-screen-xl lg:px-6 flex flex-col-reverse md:flex-row">
            <div data-aos="fade-up-left"
                class="font-light text-gray-500 sm:text-lg dark:text-gray-400 order-1 w-full md:w-1/2">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Hari Ke-3 PIBITI
                    (13 Juli 2024)</h2>
                <p class="mb-4 text-gray-600">Pengembangan Back-End dengan Laravel. peserta akan membangun fondasi back-end
                    aplikasi dengan membuat model dan mengelola interaksi dengan database menggunakan Eloquent ORM. Peserta
                    juga akan belajar tentang validasi data menggunakan Laravel Validator, pembuatan controller, dan
                    pengembangan REST API untuk aplikasi web modern.</p>

            </div>
            <div data-aos="fade-up-right" class="grid gap-4 w-full md:w-1/2 md:mt-20">
                <img class="h-30 w-auto rounded-lg" src="../image/image_7.jpg" alt="office content 1">
            </div>
        </div>
        {{-- nomor 5 --}}
        <div
            class="gap-16 mt-10 items-center px-4 mx-auto max-w-screen-xl lg:px-6 flex flex-col-reverse md:flex-row-reverse">
            <div data-aos="fade-up-right"
                class="font-light text-gray-500 sm:text-lg dark:text-gray-400 order-2 w-full md:w-1/2">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Hari Ke-4
                    PIBITI (14 Juli 2024)</h2>
                <p class="mb-4 text-gray-600">Pengelolaan Autentikasi dan Otorisasi. Pada hari ke-4, peserta akan membangun
                    sistem autentikasi menggunakan Laravel Passport atau Laravel Sanctum, atau dengan metode auth manual.
                    Kita juga akan melindungi rute dengan middleware dan menambahkan fungsionalitas untuk mengelola gambar
                    dalam storage.
                </p>

            </div>
            <div data-aos="fade-up-left" class="grid gap-4 w-full md:w-1/2 md:mt-20">
                <img class="h-30 w-auto rounded-lg" src="../image/image_5.png" alt="office content 1">
            </div>

        </div>

        {{-- nomor 6 --}}
        <div class="gap-16 mt-20 items-center px-4 mx-auto max-w-screen-xl lg:px-6 flex flex-col-reverse md:flex-row">
            <div data-aos="fade-up-left"
                class="font-light text-gray-500 sm:text-lg dark:text-gray-400 order-1 w-full md:w-1/2 items-center">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Hari Ke-5 PIBITI
                    (20 Juli 2024)</h2>
                <p class="mb-4 text-gray-600">Pengembangan Aplikasi Berbasis Proyek. Di hari ke-5, peserta akan menerapkan
                    pengetahuan yang telah dipelajari dalam proyek bersama, mengembangkan aplikasi sederhana dengan fitur
                    CRUD, melakukan pengujian dengan PHPUnit, dan melakukan penyesuaian serta pengoptimalan aplikasi. Untuk
                    mempercepat proses, peserta akan menggunakan template Blade untuk dashboard admin.</p>

            </div>
            <div data-aos="fade-up-right" class="grid gap-4 w-full md:w-1/2 md:mt-20 items-center">
                <img class="h-30 w-auto rounded-lg" src="../image/image_6.png" alt="office content 1">
            </div>
        </div>
        {{-- nomor 7  --}}
        <div
            class="gap-16 mb-20 items-center px-4 mx-auto max-w-screen-xl lg:px-6 flex flex-col-reverse md:flex-row-reverse">
            <div data-aos="fade-up-right"
                class="font-light text-gray-500 sm:text-lg dark:text-gray-400 order-2 w-full md:w-1/2">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Hari Ke-6
                    PIBITI (27 Juli 2024)</h2>
                <p class="mb-4 text-gray-600">Dihari Terakhir, peserta akan mengembangkan proyek akhir yang
                    menerapkan semua konsep dan teknik yang telah dipelajari selama sebulan acara ini berlangsung untuk
                    sebuah output yang dapat peserta manfaatkan sebagai portfolio dll

            </div>
            <div data-aos="fade-up-left" class="grid gap-4 w-full md:w-1/2 md:mt-20">
                <img class="h-30 w-auto rounded-lg" src="../image/image_1.jpg" alt="office content 1">
            </div>

        </div>

    </section>
    {{-- End Agenda  --}}

    {{-- Benefit  --}}
    <section class="dark:bg-white bg-primary-900" id="benefit">
        <div class=" w-full sm:py-20 mt-10">
            <div class=" max-w-screen-md mx-auto text-center py-10">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold dark:text-primary-900 text-white">Apa aja sih
                    Benefitnya ?</h2>
                <p class="dark:text-gray-600 sm:text-xl text-gray-400">Berikut segudang keuntungan yang dapat anda
                    dapatkan ketika bergabung dengan kami.</p>
            </div>

            <div
                class="space-y-8 py-10 mx-auto w-3/4 md:grid md:grid-cols-2 lg:grid-cols-4 md:gap-12 md:space-y-0 sm:flex ">
                <div
                    class="text-center p-5 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div
                        class="flex justify-center mx-auto items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">E - Sertifikat</h3>
                    <p class="text-gray-600 dark:text-gray-400">Yakali ga, gas? Masa kalian ga mikirin SKPM nih. Buruan
                        deh daftar sekarang dan dapatkan poin SKPM berlimpah.</p>
                </div>
                <div
                    class="text-center p-5 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div
                        class="flex justify-center mx-auto items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Network</h3>
                    <p class="text-gray-600 dark:text-gray-400">Selain untuk poin SKPM kalian juga berkenalan dengan
                        teman teman IT Enthusiast. Kalian bisa sharing ilmu dan mendapat teman dengan bergabung
                        PIBITI.</p>
                </div>
                <div
                    class="text-center p-5 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div
                        class="flex justify-center mx-auto items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path
                                d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Real World Project</h3>
                    <p class="text-gray-600 dark:text-gray-400">Kalian dapat mengimplementasikan langsung ilmu yang
                        telah kalian dapatkan dengan belajar bersama PIBITI, dengan membuat mini project yang berguna
                        untuk evaluasi hasil belajar.</p>
                </div>


                <div
                    class="text-center p-5 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div
                        class="flex justify-center mx-auto items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Hadiah Menarik</h3>
                    <p class="text-gray-600 dark:text-gray-400">Bagi kalian yang beruntung, tentu terdapat berbagai
                        hadiah menarik yang menanti. Tunggu apa lagi? ayo bergabung dengan Kami di PIBITI 2024</p>
                </div>
            </div>

        </div>
        {{-- <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16 mx-auto text-center">
            <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Benefit Spesial dari Niagahoster
            </h2>
            <p class="text-gray-600 dark:text-gray-400">
                Dapatkan gratis hosting dan domain untuk website anda selama 1 tahun.
            </p>
        </div>
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400 order-2">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Hosting kualitas
                    Hebat & Terlengkap</h2>
                <p class="mb-4 text-gray-600">Sambut era digital dengan kehadiran event kami, PIBITI 2024! Kami bangga
                    mengumumkan dukungan istimewa dari <a href="https://www.niagahoster.co.id/"
                        class="text-blue-500">NIAGAHOSTER.</a> Layanan Web hosting kualitas hebat dan dengan fitur
                    terlengkap.
                </p>
                <p class="text-gray-600">
                    Jangan lewatkan kesempatan ini! Daftar sekarang di PIBITI 2024 dengan dukungan kelas dunia dari
                    Niagahoster. Jadikan website anda semakin powerful dan lebih handal bersama Niagahoster
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8 order-1">
                <img class="w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
                    alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                    alt="office content 2">
            </div>
        </div> --}}



        </div>

    </section>
    {{-- End Benefit  --}}

    {{-- FAQ  --}}
    <section class="bg-white dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pertanyaan yang
                    sering diajukan</h2>
                <p class="text-gray-600 sm:text-xl dark:text-gray-400">Berikut adalah daftar pertanyaan yang sering
                    diajukan oleh para peserta beserta jawaban yang tepat .</p>
            </div>

            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-600 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                        aria-controls="accordion-collapse-body-1">
                        <span>Apa yang akan saya kuasai setelah mengikuti PIBITI 2024?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-600 dark:text-gray-400">Kamu akan menguasai bagaimana cara membuat
                            sebuah website yang
                            interaktif khususnya dengan menggunakan framework laravel. Tapi
                            tidak hanya itu aja loh! Kalian juga akan menguasai konsep-konsep
                            pemrograman dan tentunya dapat memperluas network kalian.</p>

                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                        aria-controls="accordion-collapse-body-2">
                        <span>Siapa yang cocok untuk mengikuti pelatihan ini?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Jangan khawatir! PIBITI 2024 difokuskan untuk
                            para pemula yang ingin mulai
                            mempelajari Web Development, tapi bukan berarti tidak cocok buat kalian yang
                            sudah handal loh! Skill kalian juga akan meningkat setelah mengikuti pelatihan
                            ini.</p>
                        {{-- <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p> --}}
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                        aria-controls="accordion-collapse-body-3">
                        <span> Apa persyaratan dan hal yang perlu disiapkan untuk mengikuti pelatihan ini?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Untuk mendaftar PIBITI 2024, kalian hanya
                            diwajibkan untuk membayar biaya
                            pelatihannya saja ya. Untuk informasi lebih lanjut silakan cek guidebook kami.</p>
                    </div>
                </div>

                <h2 id="accordion-collapse-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                        aria-controls="accordion-collapse-body-3">
                        <span>Berapa lama durasi bootcamp ini?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">PIBITI 2024 akan dilaksanakan selama bulan
                            Juli 2024
                            dengan jumlah 6 pertemuan pada tanggal 06, 07, 08, 13, 14, 20 dan 27 Juli 2024.</p>
                    </div>
                </div>

                <h2 id="accordion-collapse-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                        aria-controls="accordion-collapse-body-5">
                        <span>Bagaimana cara saya mendaftar pelatihan ini?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Untuk bagaimana cara mendaftar silakan cek
                            guidebook kami yaa.</p>
                    </div>
                </div>

                <h2 id="accordion-collapse-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                        aria-controls="accordion-collapse-body-6">
                        <span>Bagaimana pelaksanaan bootcamp ini? apakah offline atau online?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Pertemuan PIBITI 2024 akan dilaksanakan secara
                            online melalui media ZOOM
                            Meeting.</p>
                    </div>
                </div>


            </div>

        </div>
    </section>
    {{-- End FAQ  --}}

    {{-- Pemateri --}}
    <section class="bg-white dark:bg-gray-800" id="pemateri">
        {{-- <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pemateri
                    PIBITI2024</h2>
                <p class="font-light text-gray-600 sm:text-xl dark:text-gray-400">Belajarlah cara membuat situs web interaktif dengan seorang ahli dan berkolaborasi bersama untuk membangun proyek dunia nyata!</p>
            </div>
            <div class="pemateri">
                <div class="text-center text-gray-500 dark:text-gray-400 ">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="../image/adrian.jpeg" alt="Adrian Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <p>Adrian Frizna Affandi</p>
                    </h3>
                    <p class="text-gray-600">Fullstack Developer at PT. Inosoft Trans System</p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <div class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </li>
                        <li>
                            <div class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                </svg>
                            </div>
                        </li>
                        <li>
                            <a href="https://github.com/AdrianID" target="_blank"
                               class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <div class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div> --}}

        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pemateri
                PIBITI2024</h2>

            <div class="gap-16 items-center px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400 order-2">
                    <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Heaven Ade Ald
                        rico</h2>
                    <p class="mb-4 text-gray-600">Head of Backend Development at GDSC UPN Veteran Jawa Timur
                    </p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <a href="https://www.linkedin.com/in/heaven-aldrico" target="_blank"
                                class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    viewBox="0 0 48 48">
                                    <path fill="#0078d4"
                                        d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5	V37z">
                                    </path>
                                    <path
                                        d="M30,37V26.901c0-1.689-0.819-2.698-2.192-2.698c-0.815,0-1.414,0.459-1.779,1.364	c-0.017,0.064-0.041,0.325-0.031,1.114L26,37h-7V18h7v1.061C27.022,18.356,28.275,18,29.738,18c4.547,0,7.261,3.093,7.261,8.274	L37,37H30z M11,37V18h3.457C12.454,18,11,16.528,11,14.499C11,12.472,12.478,11,14.514,11c2.012,0,3.445,1.431,3.486,3.479	C18,16.523,16.521,18,14.485,18H18v19H11z"
                                        opacity=".05"></path>
                                    <path
                                        d="M30.5,36.5v-9.599c0-1.973-1.031-3.198-2.692-3.198c-1.295,0-1.935,0.912-2.243,1.677	c-0.082,0.199-0.071,0.989-0.067,1.326L25.5,36.5h-6v-18h6v1.638c0.795-0.823,2.075-1.638,4.238-1.638	c4.233,0,6.761,2.906,6.761,7.774L36.5,36.5H30.5z M11.5,36.5v-18h6v18H11.5z M14.457,17.5c-1.713,0-2.957-1.262-2.957-3.001	c0-1.738,1.268-2.999,3.014-2.999c1.724,0,2.951,1.229,2.986,2.989c0,1.749-1.268,3.011-3.015,3.011H14.457z"
                                        opacity=".07"></path>
                                    <path fill="#fff"
                                        d="M12,19h5v17h-5V19z M14.485,17h-0.028C12.965,17,12,15.888,12,14.499C12,13.08,12.995,12,14.514,12	c1.521,0,2.458,1.08,2.486,2.499C17,15.887,16.035,17,14.485,17z M36,36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698	c-1.501,0-2.313,1.012-2.707,1.99C24.957,25.543,25,26.511,25,27v9h-5V19h5v2.616C25.721,20.5,26.85,19,29.738,19	c3.578,0,6.261,2.25,6.261,7.274L36,36L36,36z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/heavenaldrico"
                                class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    viewBox="0 0 48 48">
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38"
                                        cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fd5"></stop>
                                        <stop offset=".328" stop-color="#ff543f"></stop>
                                        <stop offset=".348" stop-color="#fc5245"></stop>
                                        <stop offset=".504" stop-color="#e64771"></stop>
                                        <stop offset=".643" stop-color="#d53e91"></stop>
                                        <stop offset=".761" stop-color="#cc39a4"></stop>
                                        <stop offset=".841" stop-color="#c837ab"></stop>
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                        d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                    </path>
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786"
                                        cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#4168c9"></stop>
                                        <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                        d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                    </path>
                                    <path fill="#fff"
                                        d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                    </path>
                                    <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                    <path fill="#fff"
                                        d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                    </path>

                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/AdrianID" target="_blank"
                                class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        {{-- <li>
                            <div class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                <div class="mt-8 ">
                    <img class="rounded-lg " src="../image/heaven.jpg" alt="office content 1">
                </div>
            </div>
        </div>
    </section>
    {{-- End Pemateri --}}

    {{-- Contact  --}}
    <main class="max-w-screen-xl mx-auto">
        <div class="text-center">
            <h1 class="text-4xl font-semibold mb-3 text-center mt-10 md:mt-0">Hubungi Kami</h1>
        </div>
        <!-- <section class="flex flex-col-reverse md:flex-row gap-10 mt-0 md:mt-20 items-center pb-10 md:pb-0 py-0 md:py-14">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <!-- </section> -->
        <section class="flex flex-col-reverse md:flex-row justify-between items-center">
            <div class="w-full md:w-[50%] px-5 mt-20 md:mt-0">
                <p class="mb-5">Hubungi kami apabila ada pertanyaan atau seputar PIBITI!</p>
                <div class="flex gap-2 w-full justify-center flex-row md:flex-col">
                    <a href="https://wa.me/6285607123785" target="_blank" rel="noopener noreferrer" class="text-center"
                        style="text-decoration: none; color: inherit;">
                        <button type="button"
                            class="w-40 text-center px-10 py-3.5 mt-3 text-base font-medium text-white flex items-center bg-gradient-to-r from-primary-500 to-primary-900 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-800 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="25"
                                viewBox="0,0,256,256">
                                <g fill="#fff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(5.12,5.12)">
                                        <path
                                            d="M25,2c-12.682,0 -23,10.318 -23,23c0,3.96 1.023,7.854 2.963,11.29l-2.926,10.44c-0.096,0.343 -0.003,0.711 0.245,0.966c0.191,0.197 0.451,0.304 0.718,0.304c0.08,0 0.161,-0.01 0.24,-0.029l10.896,-2.699c3.327,1.786 7.074,2.728 10.864,2.728c12.682,0 23,-10.318 23,-23c0,-12.682 -10.318,-23 -23,-23zM36.57,33.116c-0.492,1.362 -2.852,2.605 -3.986,2.772c-1.018,0.149 -2.306,0.213 -3.72,-0.231c-0.857,-0.27 -1.957,-0.628 -3.366,-1.229c-5.923,-2.526 -9.791,-8.415 -10.087,-8.804c-0.295,-0.389 -2.411,-3.161 -2.411,-6.03c0,-2.869 1.525,-4.28 2.067,-4.864c0.542,-0.584 1.181,-0.73 1.575,-0.73c0.394,0 0.787,0.005 1.132,0.021c0.363,0.018 0.85,-0.137 1.329,1.001c0.492,1.168 1.673,4.037 1.819,4.33c0.148,0.292 0.246,0.633 0.05,1.022c-0.196,0.389 -0.294,0.632 -0.59,0.973c-0.296,0.341 -0.62,0.76 -0.886,1.022c-0.296,0.291 -0.603,0.606 -0.259,1.19c0.344,0.584 1.529,2.493 3.285,4.039c2.255,1.986 4.158,2.602 4.748,2.894c0.59,0.292 0.935,0.243 1.279,-0.146c0.344,-0.39 1.476,-1.703 1.869,-2.286c0.393,-0.583 0.787,-0.487 1.329,-0.292c0.542,0.194 3.445,1.604 4.035,1.896c0.59,0.292 0.984,0.438 1.132,0.681c0.148,0.242 0.148,1.41 -0.344,2.771z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-2">Cantika</span>
                        </button>
                    </a>
                    <a href="https://wa.me/6285895981540" target="_blank" rel="noopener noreferrer" class="text-center"
                        style="text-decoration: none; color: inherit;">
                        <button type="button"
                            class="w-40 text-center px-10 py-3.5 mt-3 text-base font-medium text-white flex items-center bg-gradient-to-r from-primary-500 to-primary-900 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-800 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="25"
                                viewBox="0,0,256,256">
                                <g fill="#fff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(5.12,5.12)">
                                        <path
                                            d="M25,2c-12.682,0 -23,10.318 -23,23c0,3.96 1.023,7.854 2.963,11.29l-2.926,10.44c-0.096,0.343 -0.003,0.711 0.245,0.966c0.191,0.197 0.451,0.304 0.718,0.304c0.08,0 0.161,-0.01 0.24,-0.029l10.896,-2.699c3.327,1.786 7.074,2.728 10.864,2.728c12.682,0 23,-10.318 23,-23c0,-12.682 -10.318,-23 -23,-23zM36.57,33.116c-0.492,1.362 -2.852,2.605 -3.986,2.772c-1.018,0.149 -2.306,0.213 -3.72,-0.231c-0.857,-0.27 -1.957,-0.628 -3.366,-1.229c-5.923,-2.526 -9.791,-8.415 -10.087,-8.804c-0.295,-0.389 -2.411,-3.161 -2.411,-6.03c0,-2.869 1.525,-4.28 2.067,-4.864c0.542,-0.584 1.181,-0.73 1.575,-0.73c0.394,0 0.787,0.005 1.132,0.021c0.363,0.018 0.85,-0.137 1.329,1.001c0.492,1.168 1.673,4.037 1.819,4.33c0.148,0.292 0.246,0.633 0.05,1.022c-0.196,0.389 -0.294,0.632 -0.59,0.973c-0.296,0.341 -0.62,0.76 -0.886,1.022c-0.296,0.291 -0.603,0.606 -0.259,1.19c0.344,0.584 1.529,2.493 3.285,4.039c2.255,1.986 4.158,2.602 4.748,2.894c0.59,0.292 0.935,0.243 1.279,-0.146c0.344,-0.39 1.476,-1.703 1.869,-2.286c0.393,-0.583 0.787,-0.487 1.329,-0.292c0.542,0.194 3.445,1.604 4.035,1.896c0.59,0.292 0.984,0.438 1.132,0.681c0.148,0.242 0.148,1.41 -0.344,2.771z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-2">Caca</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="flex relative md:w-48 w-full h-80 px-5">
                <img src="/image/cantika.svg" alt="photo"
                    class="absolute top-0 right-10 md:right-36 w-48 h-60 object-cover rounded-lg" />
                <img src="/image/caca.svg" alt="photo"
                    class="w-48 h-60 object-cover absolute top-32 md:top-16 rounded-lg" />
            </div>
        </section>
    </main>
    {{-- End Contact  --}}
@endsection
