<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.plot.ly/plotly-2.32.0.min.js" charset="utf-8"></script>

    <title>Telwin</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="w-full py-4 flex mx-auto justify-evenly items-center fixed top-0 bg-white-grey shadow-md">

            <!-- Logo -->
            <div class="title text-green-700 font-extrabold text-xl">WOWOW</div>

            <!-- Menu -->
            <div class="menu flex gap-11">
                <div class="relative group">
                    <button class="flex items-center">
                        <span class="text-slate-800 font-bold hover:text-slate-600">Beranda</span>
                    </button>
                </div>
                <div class="relative group">
                    <button class="flex items-center">
                        <span class="text-slate-900 font-bold hover:text-slate-600">Mahasiswa</span>
                        <img src="{{ asset('img/arrow-down-s-line.svg') }}" alt="icon" class="w-3 ml-1 mt-1">
                    </button>
                    <div
                        class="absolute opacity-0 pointer-events-none bg-grey-200 rounded-xl w-72 mt-2 p-5 z-10 bg-white-bone outline outline-1 outline-slate-100 shadow transition-all duration-500 ease-in-out transform translate-y-0 group-hover:opacity-100 group-hover:pointer-events-auto group-hover:translate-y-1 delay-550 group-hover:block focus:">
                        <a href="{{ route('pageMhsCalon') }}" class="block">
                            <span class="text-slate-500 font-bold text-base">Calon Mahasiswa</span>
                            <span class="block text-xs font-medium text-gray-500 mb-3">Memuat S1, Diploma, dll</span>
                        </a>
                        <a href="{{ route('pageMhsAktif') }}">
                            <span class="text-slate-500 font-bold text-base">Mahasiswa Aktif</span>
                            <span class="block text-xs font-medium text-gray-500 mb-3">Memuat S1, Diploma, dll</span>
                        </a>
                        <a href="{{ route('pageMhsLulus') }}">
                            <span class="text-slate-500 font-bold text-base">Mahasiswa Lulus</span>
                            <span class="block text-xs font-medium text-gray-500">Memuat S1, Diploma, dll</span>
                        </a>
                        <a href="{{ route('pageMhsAsing') }}">
                            <span class="text-slate-500 font-bold text-base">Mahasiswa Asing</span>
                            <span class="block text-xs font-medium text-gray-500">Memuat S1, Diploma, dll</span>
                        </a>
                        <a href="{{ route('pageMhsTgsAkhir') }}">
                            <span class="text-slate-500 font-bold text-base">Mahasiswa Tugas Akhir</span>
                            <span class="block text-xs font-medium text-gray-500">Memuat S1, Diploma, dll</span>
                        </a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="flex items-center">
                        <span class="text-slate-800 font-bold hover:text-slate-600">SDM</span>
                        <img src="{{ asset('img/arrow-down-s-line.svg') }}" alt="" class="w-3 ml-1 mt-1">
                    </button>
                    <div
                        class="absolute opacity-0 pointer-events-none bg-grey-200 rounded-xl w-72 mt-2 p-5 z-10 bg-white outline outline-1 outline-slate-100 shadow transition-all duration-500 ease-in-out transform translate-y-0 group-hover:opacity-100 group-hover:pointer-events-auto group-hover:translate-y-1 delay-300">
                        <a href="{{ route('pageDosen') }}">
                            <span class="text-slate-500 font-bold text-base">Dosen</span>
                            <span class="block text-xs font-medium text-gray-500 mb-3">Memuat S1, Diploma, dll</span>
                        </a>
                        <a href="{{ route('pageTendik') }}">
                            <span class="text-slate-500 font-bold text-base">Tenaga Didik</span>
                            <span class="block text-xs font-medium text-gray-500 mb-3">Memuat S1, Diploma, dll</span>
                        </a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="flex items-center">
                        <a href="{{ route('pageAkre') }}">
                            <span class="text-slate-800 font-bold hover:text-slate-600">Akreditasi</span>
                        </a>
                    </button>
                </div>
            </div>

            <div>
                <a href="login.html"><button
                        class="px-4 py-2 text-xs text-green-900 font-extrabold outline outline-offset-2 outline-1 rounded-full hover:bg-green-800 hover:text-green-50 hover:shadow">MWASOK</button></a>
            </div>

            <!-- Mobile Menu -->
            <button class="lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="fill-green-900 w-6 font-bold">
                    <path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z"></path>
                </svg>
            </button>
        </nav>
    </header>
    @yield('content')

</body>

</html>
