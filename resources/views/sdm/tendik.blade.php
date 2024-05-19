@extends('master')
@section('content')
    <main>
        <!-- Title -->
        <section>
            <div class="container mx-auto mt-20 text-center">
                <div class="title">
                    <h1 class="text-5xl font-extrabold text-slate-800">Data Tenaga Didik</h1>
                </div>
                <div class="description mx-auto mt-3 w-2/3 text-center">
                    <h1 class="text-base text-slate-500">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Non voluptas numquam aperiam eum fugit adipisci inventore quae, perspiciatis nulla
                        nostrum.</h1>
                </div>
            </div>
        </section>

        <!-- Chart Diagram -->
        <section>
            <div class="container flex mx-auto px-6 mt-12 flex-wrap gap-8 justify-center mb-20">
                <div class="rounded-lg shadow-md w-2/5 h-[620px] px-6 py-4 bg-white-bone overflow-auto">
                    <div class="overflow-auto w-full text-center">
                        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                            <thead class="ltr:text-left rtl:text-right">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Tahun
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Daya
                                        Tampung</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">04/11/1980</td>
                                </tr>

                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>

                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>

                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">TS-4 (2018)</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="rounded-lg shadow-md w-2/5 h-[620px] px-6 py-4 bg-white-bone overflow-auto">
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