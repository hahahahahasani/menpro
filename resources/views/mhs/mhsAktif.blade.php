@extends('master')
@section('content')
    <main>
        <!-- Title -->
        <section>
            <div class="container mx-auto mt-28 text-center">
                <div class="title">
                    <h1 class="text-5xl font-extrabold text-slate-800">Data Mahasiswa Aktif</h1>
                </div>
                <div class="description mx-auto mt-3 w-2/3 text-center">
                    <h1 class="text-base text-slate-500">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Non voluptas numquam aperiam eum fugit adipisci inventore quae, perspiciatis nulla
                        nostrum.</h1>
                </div>
            </div>
        </section>

        <!-- Combo Box -->
        <section>
            <form action="{{ route('getMhsAktif') }}" method="POST">
                @csrf
                <div class="container flex mx-auto mt-8 bg-white-bone px-12 py-6 rounded-lg shadow-md w-4/6 gap-20">
                    <!-- Jenjang -->
                    <div class="lg:block lg:w-[21%]">
                        <h1 class="text-lg font-semibold text-slate-900 mb-4">Input Jenjang</h1>
                        <div class="mb-4">
                            <label for="asuransi" class="block mb-2 text-sm font-medium text-gray-500"></label>
                            <select id="jenjang" name="jenjang"
                                class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-300 focus:border-gray-300 block w-1/2 p-2.5 lg:w-full">
                                <option selected>--Input Jenjang--</option>
                            </select>
                        </div>
                    </div>

                    <!-- Jurusan -->
                    <div class="lg:block lg:w-[21%]">
                        <h1 class="text-lg font-semibold text-slate-900 mb-4">Prodi</h1>
                        <div class="mb-4">
                            <label for="asuransi" class="block mb-2 text-sm font-medium text-gray-500"></label>
                            <select id="prodi" name="prodi"
                                class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-300 focus:border-gray-300 block w-1/2 p-2.5 lg:w-full">
                                <option selected>--Prodi--</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button Submit -->
                    <div class="submit-jurusan mt-9 self-center">
                        <button
                            class="bg-green-800 px-12 py-3 rounded-lg hover:bg-green-700 hover:transition-all hover:duration-300 hover:shadow-md"
                            type="submit">
                            <h2 class="text-white-bone font-bold text-sm">CARI</h2>
                        </button>
                    </div>
                </div>
            </form>
        </section>

        <!-- Tables -->
        @isset($data)
            @php
                $ts = count($data);
            @endphp
            <section>
                <div class="container flex mx-auto mt-12 bg-white-bone px-12 py-6 rounded-lg shadow-md w-4/5 gap-20">
                    <div class="overflow-x-auto w-full text-center">
                        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                            <thead class="ltr:text-left rtl:text-right">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Tahun</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Mahasiswa
                                        Aktif</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Mahasiswa
                                        Transfer</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">

                                @foreach ($data as $row)
                                    <tr class="odd:bg-white-bone">
                                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                            TS-{{ --$ts . ' (' . $row['tahun'] . ')' }}
                                        </th>
                                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                            {{ $row['jml_mhs_aktif'] }}
                                        </th>
                                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                            {{ $row['jml_mhs_transfer'] }}
                                        </th>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Chart Diagram -->
            <section>
                <div class="container flex mx-auto px-6 mt-12 flex-wrap gap-8 justify-center mb-20">
                    @isset($chart1)
                        <div class="rounded-lg shadow-md w-2/5 px-6 py-4 bg-white-bone">
                            <div id="">{!! $chart1->container() !!}</div>
                            {{-- <h2 class="text-lg font-semibold text-slate-800 mb-3">Title</h2>
                            <div class="flex items-center">
                                <div class="rounded-full bg-purple-500 h-5 w-5 mr-4"></div>
                                <p class="">Jumlah Mahasiswa</p>
                            </div> --}}
                        </div>
                    @endisset
                    @isset($chart2)
                        <div class="rounded-lg shadow-md w-2/5 px-6 py-4 bg-white-bone">
                            <div id="">{!! $chart2->container() !!}</div>
                            {{-- <h2 class="text-lg font-semibold text-slate-800 mb-3">Title</h2>
                            <div class="flex items-center">
                                <div class="rounded-full bg-purple-500 h-5 w-5 mr-4"></div>
                                <p class="">Jumlah Mahasiswa</p>
                            </div> --}}
                        </div>
                    @endisset
                </div>
            </section>
        @else
            <section>
                <div class="container flex mx-auto mt-12 bg-white-bone px-12 py-6 rounded-lg shadow-md w-4/5 gap-20">
                    <div class="overflow-x-auto w-full text-center">
                        <blockquote class="text-2xl italic font-semibold text-center text-gray-900 dark:text-white">
                            <p>
                                Harap input Jenjang dan Prodi untuk ditampilkan
                            </p>
                        </blockquote>
                    </div>
                </div>
            </section>
        @endisset


    </main>

    <!-- Javascript -->
    @isset($chart1)
        <script src="{{ $chart1->cdn() }}"></script>
        {{ $chart1->script() }}
    @endisset

    @isset($chart2)
        <script src="{{ $chart2->cdn() }}"></script>
        {{ $chart2->script() }}
    @endisset

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="{{ asset('prodi.js') }}"></script>

    {{-- <script>
        function dropdown1() {
            document.querySelector('#drop-down1').classList.toggle('hidden');
        }

        function dropdown2() {
            document.querySelector('#drop-down2').classList.toggle('hidden');
        }

        var trace1 = {
            type: 'scatter',
            x: [1, 2, 3, 4, 5],
            y: [4, 1, 9, 8, 4],
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
                size: 18
            }
        };

        var config = {
            responsive: true
        }

        Plotly.newPlot('diagram', data, layout, config);

        var trace1 = {
            type: 'scatter',
            x: [1, 2, 3, 4],
            y: [6, 10, 7, 8],
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
                size: 18
            }
        };

        var config = {
            responsive: true
        }

        Plotly.newPlot('diagram2', data, layout, config);
    </script> --}}
@endsection
