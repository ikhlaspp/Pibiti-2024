<nav class="bg-white border-gray-200 dark:bg-gray-800 sticky top-0 shadow z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="/image/logo_24_2.png" class="h-12 mr-3" alt="PIBITI Logo" />
            <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{-- {{ config('app.name') }} --}}</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-cemnter p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden md:w-8 w-full  overscroll-x-none md:block" id="navbar-default">
            <ul id="menu"
                class="absolute left-0 right-0 md:right-3 md:left-1/2 font-medium flex flex-col p-4 md:p-0 mt-4 md:top-3 border border-gray-100 rounded-b-lg bg-gray-50 md:flex-row md:space-x-8 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700">
                @if (Request::is('/') || Request::is('contact'))
                    <li>
                        <a href="/"
                            class="text-primary-1000 block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-violet-400 md:p-0 dark:text-white md:dark:hover:text-violet-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Beranda</a>
                    </li>
                    <li>
                        <a href="/#agenda"
                            class="text-primary-1000 block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-violet-400 md:p-0 dark:text-white md:dark:hover:text-violet-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Agenda</a>
                    </li>
                    <li>
                        <a href="/#benefit"
                            class="text-primary-1000 block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-violet-400 md:p-0 dark:text-white md:dark:hover:text-violet-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Benefit</a>
                    </li>
                    <li>
                        <a href="/#pemateri"
                            class="text-primary-1000 block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-violet-400 md:p-0 dark:text-white md:dark:hover:text-violet-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pemateri</a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="{{ Route::is('contact') ? 'text-primary-1000' : '' }}  block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-violet-400 md:p-0 dark:text-white md:dark:hover:text-violet-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kontak
                            Kami</a>
                    </li>

                    @if (Auth::user())
                        <li>
                            <a href="{{ url('/welcome') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-violet-400 md:p-0 dark:text-white md:dark:hover:text-violet-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                Dashboard</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('auth.login.view') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-violet-400 md:p-0 dark:text-white md:dark:hover:text-violet-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                Login</a>
                        </li>
                        <li>
                            <a href="{{ route('auth.register.view') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-violet-400 md:p-0 dark:text-white md:dark:hover:text-violet-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                Register</a>
                        </li>
                    @endif
                @else
                    <li>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownPeserta"
                            class="font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                            type="button">
                            <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                                data-dropdown-placement="bottom-start"
                                class="w-10 h-10 mr-4 rounded-full cursor-pointer hidden md:block"
                                src="/image/profile.jpg" alt="User dropdown">
                            {{ Auth::user()->name }}
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">

                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownPeserta"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-32 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDelayButton">

                                <li>
                                    <button data-modal-toggle="grade-modal"
                                        class="block w-full py-2 text-black hover:bg-gray-100">
                                        Lihat Nilai
                                    </button>
                                </li>

                                <li>
                                    <a href="{{ route('password.change') }}">
                                        <button class="block w-full py-2 text-black hover:bg-gray-100">
                                            Ubah Password
                                        </button>
                                    </a>
                                </li>

                                <li>
                                    <form method="POST" action="{{ route('auth.logout') }}">
                                        @csrf
                                        <button class="block w-full py-2 text-black hover:bg-gray-100"
                                            type="submit">Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
    id="grade-modal">
    <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                <h3 class="text-xl font-semibold dark:text-white">
                    Nilai Yang Kamu Peroleh
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                    data-modal-toggle="grade-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->

            <div class="relative overflow-x-auto">
                @if (!empty($nilai))
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Keterangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nilai
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nilai as $grade)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $grade['keterangan'] }}
                                    </th>
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        {{ $grade['nilai'] }}
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="border-b bg-gray-100 dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Total Nilai Yang Anda Peroleh:
                                </th>
                                <td class="px-6 py-4 font-bold text-gray-900">
                                    {{ $totalNilai }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endif
            </div>

        </div>
    </div>
</div>

<script>
    // $(document).ready(function () {
    //     $("ul li a").click(function () {
    //         location.reload();
    //         $("ul li a").removeClass("text-blue-700");
    //         $(this).addClass("text-blue-700");
    //     });
    // });

    // $(document).ready(function() {
    //     $("ul li a").click(function() {
    //         $("ul li a").removeClass("text-blue-700");
    //         $(this).addClass("text-blue-700");
    //         var button = $("[data-collapse-toggle='navbar-default']");
    //         button.click();
    //     });
    // });


    //     $(document).ready(function() {
    //     $("ul li a").click(function() {
    //         // Menghapus kelas "text-blue-700" dari semua tautan dan menambahkannya ke tautan yang diklik
    //         $("ul li a").removeClass("text-blue-700");
    //         $(this).addClass("text-blue-700");

    //         // Mendapatkan target tautan
    //         var target = $(this).attr("href");

    //         // Menggulir ke elemen target dengan animasi
    //         $("html, body").animate({
    //             scrollTop: $(target).offset().top
    //         }, 1000); // Anda dapat mengatur durasi animasi sesuai kebutuhan

    //         // Temukan tombol dengan atribut data-collapse-toggle yang sesuai
    //         var button = $("[data-collapse-toggle='navbar-default']");
    //         button.click();
    //     });
    // });


    $(document).ready(function() {
        $("ul li a").click(function() {
            // Menghapus kelas "text-blue-700" dari semua tautan dan menambahkannya ke tautan yang diklik
            $("ul li a").removeClass("text-blue-700");
            $(this).addClass("text-blue-700");

            // Temukan tombol dengan atribut data-collapse-toggle yang sesuai
            var button = $("[data-collapse-toggle='navbar-default']");

            // Pemicu klik pada tombol tersebut
            button.click();

            // Ambil target dari tautan yang diklik
            var target = $(this).attr("href");

            // Animasi autoscroll ke elemen target
            $("html, body").animate({
                scrollTop: $(target).offset().top
            }, 1000); // Anda dapat mengatur durasi animasi sesuai kebutuhan
        });
    });
</script>
