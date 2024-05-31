<ol class="items-center sm:flex p-3">
    <li class="relative mb-6 sm:mb-0 sm:w-1/2">
        <div class="flex flex-col items-center sm:items-start">
            <a href="{{ url('/welcome') }}"
                class="flex items-center justify-center w-16 h-16 rounded-full ring-0 ring-white dark:bg-green-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('welcome') ? 'bg-green-300' : 'bg-green-100' }}">
                <p class="text-3xl font-bold">W</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div
            class="mt-3 h-40 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                03 November, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan Event PIBITI23</p>
        </div>
    </li>


    <li class="relative mb-6 sm:mb-0 sm:w-1/2">
        <div class="flex flex-col items-center sm:items-start">
            <a href="{{ url('/peserta/day/1') }}"
                class="flex items-center justify-center w-16 h-16 cursor-pointer rounded-full ring-0 ring-white shrink-0 {{ request()->is('peserta/day/1') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                <p class="text-3xl font-bold">1</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div
            class="mt-3 h-40 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 sm:items-center">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Day 1</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                4 November, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pengerjaan Hari Pertama</p>
        </div>
    </li>


    <li class="relative mb-6 sm:mb-0 sm:w-1/2">
        <div class="flex items-center flex-col sm:items-start">
            <a href="{{ url('/peserta/day/2') }}"
                class="flex items-center justify-center w-16 h-16 cursor-pointer bg rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('peserta/day/2') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                <p class="text-3xl font-bold">2</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div
            class="mt-3 h-40 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Day 2</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                11 November, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pengerjaan Hari Kedua</p>
            <br>
        </div>
    </li>


    <li class="relative mb-6 sm:mb-0 sm:w-1/2">
        <div class="flex flex-col items-center sm:items-start">
            <a href="{{ url('/peserta/day/3') }}"
                class="flex items-center justify-center w-16 h-16 cursor-pointer bg rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('peserta/day/3') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                <p class="text-3xl font-bold">3</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div
            class="mt-3 h-40 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Day 3</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                18 November, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pengerjaan Hari Ketiga</p>
            <br>
        </div>
    </li>
    <li class="relative mb-6 sm:mb-0 sm:w-1/2">
        <div class="flex flex-col items-center sm:items-start">
            <a href="{{ url('/peserta/final-project') }}"
                class="flex items-center justify-center w-16 h-16 cursor-pointer bg rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('peserta/final-project') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                <p class="text-3xl font-bold">FP</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div
            class="mt-3 h-40 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Final Project</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                18 November, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pengumpulan Final Project</p>
        </div>
    </li>
    <li class="relative mb-6 sm:mb-0 sm:w-1/2">
        <div class="flex flex-col items-center sm:items-start">
            <a href="{{ url('/peserta/finalDay') }}"
                class="flex items-center justify-center w-16 h-16 cursor-pointer bg rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('peserta/day/4') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                <p class="text-3xl font-bold">4</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div
            class="mt-3 h-40 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Day 4</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                02 Desember, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Hari terakhir PIBITI</p>
            <br>
        </div>
    </li>


</ol>
