@extends('layouts.admin.layout')

@section('section')
    <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        Total Materi</p>
                                    <h5 class="mb-2 font-bold dark:text-white"> {{ $materialCount }} </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card2 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        Total Pendaftar</p>
                                    <h5 class="mb-2 font-bold dark:text-white">{{ $userCount }} </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                    <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card3 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        Total Peserta</p>
                                    <h5 class="mb-2 font-bold dark:text-white">{{ $pesertaCount }}</h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                    <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card4 -->
            <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        Total Tugas</p>
                                    <h5 class="mb-2 font-bold dark:text-white">{{ $taskCount }}</h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                    <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards row 3 -->
        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 rounded-t-4">
                        <div class="flex justify-between">
                            <h6 class="mb-2 dark:text-white">Daftar Materi</h6>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table
                            class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
                            <tbody>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                            <div class="ml-6">
                                                <h6 class="mb-0 font-semibold text-md leading-normal dark:text-white">
                                                    Judul</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <h6 class="mb-0 text-md leading-normal dark:text-white font-semibold">
                                                Link Materi</h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <h6 class="mb-0 text-md font-semibold leading-normal dark:text-white">Tanggal
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                                @foreach ($materials as $materi)
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                            <div class="flex items-center px-2 py-1">
                                                <div class="ml-6">
                                                    <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                        {{ $materi->judul }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                    <a href="{{ $materi->urlmateri }}" class="text-blue-500">Klik untuk
                                                        melihat materi</a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">{{ $materi->hari }}
                                                </h6>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="p-4 pb-0 rounded-t-4">
                        <h6 class="mb-0 dark:text-white">Daftar Peserta</h6>
                    </div>
                    <div class="flex-auto p-4">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            @foreach ($users as $user)
                                <li
                                    class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                    <div class="flex items-center">
                                        {{-- <div
                                            class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                            <i class="text-white ni ni-mobile-button relative top-0.75 text-xxs"></i>
                                        </div> --}}
                                        <div class="w-4 h-4 bg-indigo-500 rounded-full mr-5"></div>
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">
                                                {{ $user->name }}
                                            </h6>
                                            <span class="text-xs leading-tight dark:text-white/80">
                                                <span class="font-semibold">{{ $user->email }}</span></span>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <button
                                            class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i
                                                class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 rounded-t-4">
                        <div class="flex justify-between">
                            <h6 class="mb-2 dark:text-white">Daftar Tugas</h6>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table
                            class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
                            <tbody>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                            <div class="ml-6">
                                                <h6 class="mb-0 font-semibold text-md leading-normal dark:text-white">
                                                    Judul</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <h6 class="mb-0 text-md leading-normal dark:text-white font-semibold">
                                                Link Tugas</h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <h6 class="mb-0 text-md font-semibold leading-normal dark:text-white">Tanggal
                                            </h6>
                                        </div>
                                    </td>
                                </tr>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                            <div class="flex items-center px-2 py-1">
                                                <div class="ml-6">
                                                    <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                        {{ $task->judul }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                    <a href="{{ 'http://localhost:8000/storage/' . $task->urltugas }}"
                                                        target="_blank" class="text-blue-500">Klik untuk melihat tugas</a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                    {{ $task->hari }}
                                                </h6>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
