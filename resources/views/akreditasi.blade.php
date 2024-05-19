@extends('master')
@section('content')
    <main>
        <section>
            <div class="container mx-auto mt-20 text-center">
                <div class="title">
                    <h1 class="text-5xl font-extrabold text-slate-800">Data Akreditasi</h1>
                </div>
                <div class="description mx-auto mt-3 w-2/3 text-center">
                    <h1 class="text-base text-slate-500">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Non voluptas numquam aperiam eum fugit adipisci inventore quae, perspiciatis nulla
                        nostrum.</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="container flex mx-auto px-6 mt-12 flex-row gap-8 justify-center mb-20">
                <div class="rounded-lg shadow-md w-2/5 px-6 py-4 bg-white-bone">
                    <div id="diagram"></div>
                    <h2 class="text-lg font-semibold text-slate-800 mb-3">Akreditasi</h2>
                    <div class="flex items-center">
                        <div class="rounded-full bg-blue-500 h-5 w-5 mr-4"></div>
                        <p class="">Predikat</p>
                    </div>
                </div>
                <div class="container flex mx-auto bg-white-bone px-12 py-6 rounded-lg shadow-md w-4/5 gap-20">
                    <div class="overflow-x-auto w-full">
                        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                            <thead class="">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Predikat
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">S1
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">S2
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">S3
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Profesi
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Jumlah
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Unggul</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">12</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">10</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">3</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">1</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">26</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">A</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">12</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">10</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">3</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">1</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">26</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">B</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">12</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">10</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">3</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">1</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">26</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Baik Sekali</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">12</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">10</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">3</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">1</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">26</td>
                                </tr>
                                <tr class="odd:bg-white-bone">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Baik</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">12</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">10</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">3</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">1</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">26</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        const xArray = ["Unggul", "A", "B", "Baik Sekali", "Baik"];
        const yArray = [55, 49, 44, 24, 15];

        const data = [{
            x: xArray,
            y: yArray,
            type: "bar",
            orientation: "v",
            marker: {
                color: "rgba(0,0,255)"
            }
        }];

        const layout = {
            title: "Akreditasi Program Studi"
        };

        Plotly.newPlot("diagram", data, layout);
    </script>
@endsection
