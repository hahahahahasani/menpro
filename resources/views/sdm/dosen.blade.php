@extends('master')
@section('content')
    <main>
        <!-- Title -->
        <section>
            <div class="container mx-auto mt-28 text-center">
                <div class="title">
                    <h1 class="text-5xl font-extrabold text-slate-800">Data Dosen</h1>
                </div>
                <div class="description mx-auto mt-3 w-2/3 text-center">
                    <h1 class="text-base text-slate-500">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Non voluptas numquam aperiam eum fugit adipisci inventore quae, perspiciatis nulla
                        nostrum.</h1>
                </div>
            </div>
        </section>

        <!-- Dropdown button -->
        <section>
            <div class="flex justify-center mt-8">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">Category<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('pageDosenHomebase') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Per
                                Homebase</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Per
                                Jabatan Akademik</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Per
                                Pendidikan Terakhir</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Per
                                Status Sertifikasi</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tidak
                                Tetap</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Tables -->
        <section>
            <div class="container flex mx-auto mt-8 bg-white-bone px-12 py-6 rounded-lg shadow-md w-4/5 gap-20">
                <div class="overflow-x-auto w-full">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm text-center">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Tahun</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Daya
                                    Tampung</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Pendaftar
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Lulus
                                    Seleksi</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Lulus
                                    Seleksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            <tr class="odd:bg-white-bone">
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Developer</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$120,000</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$120,000</td>
                            </tr>

                            
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Chart Diagram -->
        <section>
            <div class="container flex mx-auto px-6 mt-12 flex-wrap gap-8 justify-center mb-20">
                <div class="rounded-lg shadow-md w-2/5 px-6 py-4 bg-white-bone overflow-y-auto">
                    <div id="diagram"></div>
                    <h2 class="text-lg font-semibold text-slate-800 my-3">Title</h2>
                    <div class="flex items-center mb-1">
                        <div class="rounded-full bg-green-500 h-5 w-5 mr-4"></div>
                        <p class="">Jumlah Dosen</p>
                    </div>
                    <div class="flex items-center mb-1">
                        <div class="rounded-full bg-yellow-500 h-5 w-5 mr-4"></div>
                        <p class="">Jumlah Dosen</p>
                    </div>
                    <div class="flex items-center mb-1">
                        <div class="rounded-full bg-blue-500 h-5 w-5 mr-4"></div>
                        <p class="">Jumlah Dosen</p>
                    </div>
                </div>
                <div class="rounded-lg shadow-md w-2/5 px-6 py-4 bg-white-bone overflow-y-auto">
                    <div id="diagram2"></div>
                    <h2 class="text-lg font-semibold text-slate-800 my-3">Title</h2>
                    <div class="flex items-center mb-1">
                        <div class="rounded-full bg-green-500 h-5 w-5 mr-4"></div>
                        <p class="">Jumlah Dosen</p>
                    </div>
                    <div class="flex items-center mb-1">
                        <div class="rounded-full bg-yellow-500 h-5 w-5 mr-4"></div>
                        <p class="">Jumlah Dosen</p>
                    </div>
                    <div class="flex items-center mb-1">
                        <div class="rounded-full bg-blue-500 h-5 w-5 mr-4"></div>
                        <p class="">Jumlah Dosen</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Javascript -->
    <script>
        function dropdown1() {
            document.querySelector('#drop-down1').classList.toggle('hidden');
        }

        function dropdown2() {
            document.querySelector('#drop-down2').classList.toggle('hidden');
        }

        var trace1 = {
            values: [19, 26, 55],
            type: 'pie'
        };

        var data = [trace1];

        var config = {
            responsive: true
        }

        Plotly.newPlot('diagram', data, config);

        var trace1 = {
            values: [35, 20, 45],
            type: 'pie'
        };

        var data = [trace1];

        var config = {
            responsive: true
        }

        Plotly.newPlot('diagram2', data, config);
    </script>
@endsection
