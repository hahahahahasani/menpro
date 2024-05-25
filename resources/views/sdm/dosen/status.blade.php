@extends('master')
@section('content')
    <main>

        <section>
            <div class="container mx-auto mt-28 text-center">
                <div class="title">
                    <h1 class="text-5xl font-extrabold text-slate-800">Data Dosen per Status Sertifikasi</h1>
                </div>
                <div class="description mx-auto mt-3 w-2/3 text-center">
                    <h1 class="text-base text-slate-500">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Non voluptas numquam aperiam eum fugit adipisci inventore quae, perspiciatis nulla
                        nostrum.</h1>
                </div>
            </div>
        </section>

        <!-- Tables -->
        <section>
            <div class="container w-9/12 flex mx-auto mt-8 bg-white-bone px-12 py-6 rounded-lg shadow-md w-4/5 gap-20">
                <div class="overflow-x-auto w-full">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm text-center">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">
                                    Fakultas
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">
                                    Jumlah Dosen
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">
                                    Jumlah Dosen Bersertifikat
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($listDosen as $row)
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $row['nama_fakultas'] }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $row['jumlah_dosen'] }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $row['jumlah_sertifikasi'] }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Jumlah
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">
                                    {{ $sum_dosen }}
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">
                                    {{ $sum_dosen_s }}
                                </th>
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

    <script>
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
