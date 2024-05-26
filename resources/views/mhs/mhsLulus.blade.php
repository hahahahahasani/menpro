@extends('master')
@section('content')
    <main>
        <!-- Title -->
        <section>
            <div class="container mx-auto mt-28 text-center">
                <div class="title">
                    <h1 class="text-5xl font-extrabold text-slate-800">Data Mahasiswa Lulus</h1>
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
            <form action="">
                <div class="container flex mx-auto mt-8 bg-white-bone px-12 py-6 rounded-lg shadow-md w-4/6 gap-20">
                    <!-- Jenjang -->
                    <div class="lg:block lg:w-[21%]">
                        <h1 class="text-lg font-semibold text-slate-900 mb-4">Input Jenjang</h1>
                        <div class="mb-4">
                            <label for="asuransi" class="block mb-2 text-sm font-medium text-gray-500"></label>
                            <select id="jenjang" name="jenjang"
                                class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-300 focus:border-gray-300 block w-1/2 p-2.5 lg:w-full">
                                <option selected>--Input Jenjang--</option>
                                <option value="1">S1</option>
                                <option value="2">S2</option>
                                <option value="3">S3</option>
                                <option value="4">PG</option>
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
                                <option value="1">S1</option>
                                <option value="2">S2</option>
                                <option value="3">S3</option>
                                <option value="4">PG</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button Submit -->
                    <div class="submit-jurusan mt-9 self-center">
                        <button
                            class="bg-green-800 px-12 py-3 rounded-lg hover:bg-green-700 hover:transition-all hover:duration-300 hover:shadow-md"
                            type="submit">
                            <h2 class="text-white-bone font-bold text-sm">GOGOGO</h2>
                        </button>
                    </div>
                </div>
            </form>
        </section>

        <!-- Tables -->
        <section>
            <div class="container flex mx-auto mt-12 bg-white-bone px-12 py-6 rounded-lg shadow-md w-4/5 gap-20">
                <div class="overflow-x-auto w-full text-center">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Tahun</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Daya Tampung
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Pendaftar</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Lulus Seleksi
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            <tr class="odd:bg-white-bone">
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Developer</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$120,000</td>
                            </tr>

                            <tr class="odd:bg-white-bone">
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">04/11/1980</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Designer</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$100,000</td>
                            </tr>

                            <tr class="odd:bg-white-bone">
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">Singer</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$20,000</td>
                            </tr>

                            <tr class="odd:bg-white-bone">
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">Singer</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$20,000</td>
                            </tr>

                            <tr class="odd:bg-white-bone">
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">Singer</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$20,000</td>
                            </tr>

                            <tr class="odd:bg-white-bone">
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">Singer</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$20,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Chart Diagram -->
        <section>
            <div class="container flex mx-auto px-6 mt-12 flex-wrap gap-8 justify-center mb-20">
                <div class="rounded-lg shadow-md w-2/5 px-6 py-4 bg-white-bone">
                    <div id="diagram"></div>
                    <h2 class="text-lg font-semibold text-slate-800 mb-3">Title</h2>
                    <div class="flex items-center">
                        <div class="rounded-full bg-purple-500 h-5 w-5 mr-4"></div>
                        <p class="">Jumlah Mahasiswa</p>
                    </div>
                </div>
                <div class="rounded-lg shadow-md w-2/5 px-6 py-4 bg-white-bone">
                    <div id="diagram2"></div>
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
            y: [9, 11, 7, 8, 4],
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
            y: [5, 12, 6, 8],
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
    </script>
@endsection
