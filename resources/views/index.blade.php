@extends('master')
@section('content')
    <main>
        <!-- Title -->
        <section>
            <div class="container mx-auto mt-28 text-center">
                <div class="title">
                    <h1 class="text-5xl font-extrabold text-slate-800">Visualisasi Data Akreditasi</h1>
                </div>
                <div class="description mx-auto mt-3 w-2/3 text-center">
                    <h1 class="text-base text-slate-500">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Non voluptas numquam aperiam eum fugit adipisci inventore quae, perspiciatis nulla
                        nostrum.
                    </h1>
                </div>
            </div>
        </section>

        <!-- Combo Box -->
        {{-- <section>
            <div class="container flex mx-auto mt-8 bg-white-bone px-12 py-6 rounded-lg shadow-md w-4/6 gap-20">
                <!-- Jurusan -->
                <div class="jurusan">
                    <h2 class="text-slate-700 font-bold text-lg mb-3">Jurusan</h2>
                    <div class="" onclick="dropdown1()">
                        <div class="inline-flex items-center overflow-hidden rounded-md border bg-white">
                            <a href="#"
                                class="px-8 py-3 text-sm/normal text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                Input Jurusan
                            </a>

                            <button class="h-full py-2 px-4 text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                <span class="sr-only">Menu</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute z-10 mt-2 w-56 rounded-md border border-gray-100 bg-white shadow-lg hidden"
                            id="drop-down1">
                            <div class="p-2">
                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    Teknik Informatika
                                </a>

                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    Matematika
                                </a>

                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    Kimia
                                </a>

                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    Biologikal
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profesi -->
                <div class="profesi">
                    <h2 class="text-slate-700 font-bold text-lg mb-3">Profesi</h2>
                    <div class="" onclick="dropdown2()">
                        <div class="inline-flex items-center overflow-hidden rounded-md border bg-white">
                            <a href="#"
                                class="px-8 py-3 text-sm/normal text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                Input Profesi
                            </a>

                            <button class="h-full py-2 px-4 text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                <span class="sr-only">Menu</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute z-10 mt-2 w-56 rounded-md border border-gray-100 bg-white shadow-lg hidden"
                            id="drop-down2">
                            <div class="p-2">
                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    S1
                                </a>

                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    S2
                                </a>

                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    S3
                                </a>

                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    Profesi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button Submit -->
                <div class="submit-jurusan mt-9 self-center">
                    <button
                        class="bg-green-800 px-12 py-3 rounded-lg hover:bg-green-700 hover:transition-all hover:duration-300 hover:shadow-md">
                        <h2 class="text-white-bone font-bold text-sm">GOGOGO</h2>
                    </button>
                </div>
            </div>
        </section> --}}

        <!-- Tables -->
        <section>
            <div class="container flex mx-auto mt-12 px-12 py-6 rounded-lg w-full gap-20">
                <div class="flex gap-4">
                    <div
                        class="block justify-center text-center w-4/12 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <img src="{{ asset('img/chart.svg') }}" alt="" class="mx-auto">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Data Calon Mahasiswa
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            Daya Tampung, Pendaftar, dan Lulus Seleksi
                        </p>
                    </div>
                    <div
                        class="block justify-center text-center w-4/12 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <img src="{{ asset('img/monitor.svg') }}" alt="" class="mx-auto">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Data Mahasiswa
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            Mahasiswa Baru, Mahasiswa Aktif, Mahasiswa Tugas Akhir, dan Mahasiswa Asing
                        </p>
                    </div>
                    <div
                        class="block justify-center text-center w-4/12 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <img src="{{ asset('img/folder.svg') }}" alt="" class="mx-auto">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Data Lulusan
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            Mahasiswa Lulusan, Rasio Kelulusan Tepat Waktu dan Keberhasilan Studi
                        </p>
                    </div>
                    <div
                        class="block justify-center text-center w-4/12 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <img src="{{ asset('img/persond.svg') }}" alt="" class="mx-auto">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Sumber Daya Manusia
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            Dosen dan Tenaga Kependidikan
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Chart Diagram -->
        <section>
            <div class="container flex mx-auto mt-12 flex-wrap gap-8 justify-center mb-20">
                <div class="rounded-lg shadow-md w-96 px-6 py-4 bg-white-bone overflow-x-auto">
                    <div id="diagram"></div>
                    <h2 class="text-lg font-semibold text-slate-800 mb-3">Title</h2>
                    <div class="flex items-center">
                        <div class="rounded-full bg-purple-500 h-5 w-5 mr-4"></div>
                        <p class="">Jumlah Mahasiswa</p>
                    </div>
                </div>
                <div class="rounded-lg shadow-md w-96 px-6 py-4 bg-white-bone">
                    <div id="diagram2"></div>
                    <h2 class="text-lg font-semibold text-slate-800 mb-3">Title</h2>
                    <div class="flex items-center">
                        <div class="rounded-full bg-purple-500 h-5 w-5 mr-4"></div>
                        <p class="">Jumlah Mahasiswa</p>
                    </div>
                </div>
                <div class="rounded-lg shadow-md w-96 px-6 py-4 bg-white-bone">
                    <div id="diagram3"></div>
                    <h2 class="text-lg font-semibold text-slate-800 mb-3">Title</h2>
                    <div class="flex items-center">
                        <div class="rounded-full bg-purple-500 h-5 w-5 mr-4"></div>
                        <p class="">Jumlah Mahasiswa</p>
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
            type: 'scatter',
            x: [1, 2, 3, 4, 5],
            y: [5, 10, 2, 8, 4],
            marker: {
                color: '#C8A2C8',
                line: {
                    width: 2
                }
            }
        };

        var data = [trace1];

        var layout = {
            font: {
                size: 14
            }
        };

        var config = {
            responsive: true
        }

        Plotly.newPlot('diagram', data, layout, config);

        var trace1 = {
            type: 'scatter',
            x: [1, 2, 3, 4],
            y: [5, 10, 2, 8],
            marker: {
                color: '#C8A2C8',
                line: {
                    width: 2
                }
            }
        };

        var data = [trace1];

        var layout = {
            font: {
                size: 14
            }
        };

        var config = {
            responsive: true
        }

        Plotly.newPlot('diagram2', data, layout, config);

        var trace1 = {
            type: 'scatter',
            x: [1, 2, 3, 4],
            y: [5, 10, 2, 8],
            marker: {
                color: '#C8A2C8',
                line: {
                    width: 2
                }
            }
        };

        var data = [trace1];

        var layout = {
            font: {
                size: 14
            }
        };

        var config = {
            responsive: true
        }

        Plotly.newPlot('diagram3', data, layout, config);
    </script>
@endsection
