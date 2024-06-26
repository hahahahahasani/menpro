@extends('master')

@section('content')
<main>
    <section>
        <div class="container mx-auto mt-28 text-center">
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
                <div>{!! $chart->container() !!}</div>
                {{-- <h2 class="text-lg font-semibold text-slate-800 mb-3">Akreditasi</h2>
                <div class="flex items-center">
                    <div class="rounded-full bg-blue-500 h-5 w-5 mr-4"></div>
                    <p class="">Predikat</p>
                </div> --}}
            </div>
            <div class="container flex mx-auto bg-white-bone px-12 py-6 rounded-lg shadow-md w-4/5">
                <div class="overflow-x-auto w-full">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm text-center">
                        <thead class="">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Jenjang</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Unggul</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">A</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">B</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Baik Sekali</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Baik</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Jumlah</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($jenjang as $row)
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $row['jenjang'] }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $row['akreditasi']['Unggul'] }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $row['akreditasi']['A'] }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $row['akreditasi']['B'] }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $row['akreditasi']['Baik Sekali'] }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $row['akreditasi']['Baik'] }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $row['jumlah'] }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">Jumlah</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">{{ $unggul }}</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">{{ $a }}</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">{{ $b }}</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">{{ $bs }}</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">{{ $bk }}</th>
                                <th class="whitespace-nowrap px-4 py-2 font-semibold text-base text-gray-900">{{ $sum }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Load the LarapexChart scripts -->
<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}
@endsection
