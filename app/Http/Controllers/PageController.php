<?php

namespace App\Http\Controllers;

use App\Charts\AkreditasiChart;
use App\Charts\DsnHombeBaseChart;
use App\Charts\DsnJabatanChart;
use App\Charts\DsnPendidikanChart;
use App\Charts\DsnSertifikasiChart;
use App\Charts\DsnTetapChart;
use App\Charts\MhsAkhirChart;
use App\Charts\MhsAktif;
use App\Charts\MhsAktifChart;
use App\Charts\MhsAsingChart;
use App\Charts\MhsCalonChart;
use App\Charts\MhsLulusChart;
use App\Charts\TendikChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getJenjang()
    {
        $listJenjang = Http::get('https://bolainsight.my.id/api/list-jenjang')->json()['data'];
        return response()->json($listJenjang);
    }

    public function getProdi(Request $request)
    {
        $listProdi = Http::get('https://bolainsight.my.id/api/list-prodi/' . $request->id_jenjang)->json()['data'];
        return response()->json($listProdi);
    }

    public function pageMhsCalon()
    {
        $response = Http::get('https://bolainsight.my.id/api/list-prodi');
        $res_jenjang = Http::get('https://bolainsight.my.id/api/list-jenjang');

        $jenjang = $res_jenjang->json()['data'];
        // dd($jenjang);
        return view('mhs.mhsCalon', compact('jenjang'));
    }

    public function pageMhsAktif()
    {
        return view('mhs.mhsAktif');
    }

    public function pageMhsLulus()
    {
        return view('mhs.mhsLulus');
    }

    public function pageMhsAsing()
    {
        return view('mhs.mhsAsing');
    }

    public function pageMhsTgsAkhir()
    {
        return view('mhs.mhsTgsAkhir');
    }

    public function getMhsAktif(Request $request, MhsAktifChart $mhsAktifChart)
    {
        $response = Http::get('https://bolainsight.my.id/api/mhs-aktif?id_prodi=' . $request->prodi);

        if ($response->successful() && isset($response->json()['data'])) {
            $data = $response->json()['data'];
    
            return view('mhs.mhsAktif', [
                'data' => $data,
                'chart1' => $mhsAktifChart->buildchart1($request),
                'chart2' => $mhsAktifChart->buildChart2($request)
            ]);
        } else {
            return redirect()->back()->with('error', 'Tidak dapat memuat data mahasiswa aktif.');
        }
    }

    public function getMhsCalon(Request $request, MhsCalonChart $mhsCalonChart)
    {
        $respone = Http::get('https://bolainsight.my.id/api/calon-mhs?id_prodi=' . $request->prodi);

        if ($respone->successful() && isset($respone->json()['data'])) {
            $data = $respone->json()['data'];

            return view('mhs.mhsCalon', [
                'data' => $data,
                'chart1' => $mhsCalonChart->buildchart1($request),
                'chart2' => $mhsCalonChart->buildChart2($request),
            ]);
        }
        
    }

    public function getMhsLulus(Request $request, MhsLulusChart $mhsLulusChart)
    {
        $respone = Http::get('https://bolainsight.my.id/api/mhs-lulus?id_prodi=' . $request->prodi);

        if ($respone->successful() && isset($respone->json()['data'])) {
            $data = $respone->json()['data'];

            return view('mhs.mhsLulus', [
                'data' => $data,
                'chart1' => $mhsLulusChart->buildchart1($request),
                'chart2' => $mhsLulusChart->buildchart2($request)
            ]);
        }
    }

    public function getMhsAsing(Request $request, MhsAsingChart $mhsAsingChart)
    {
        $respone = Http::get('https://bolainsight.my.id/api/mhs-asing?id_prodi=' . $request->prodi);

        if ($respone->successful() && isset($respone->json()['data'])) {
            $data = $respone->json()['data'];

            return view('mhs.mhsAsing', [
                'data' => $data,
                'chart' => $mhsAsingChart->build($request)
            ]);
        }
    }

    public function getMhsTgsAkhir(Request $request, MhsAkhirChart $mhsAkhirChart)
    {
        $respone = Http::get('https://bolainsight.my.id/api/mhs-tugas-akhir?id_prodi=' . $request->prodi);

        if ($respone->successful() && isset($respone->json()['data'])) {
            $data = $respone->json()['data'];

            return view('mhs.mhsTgsAkhir', [
                'data' => $data,
                'chart' => $mhsAkhirChart->build($request)
            ]);
        }
    }

    public function pageDosen()
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen');
        $listDosen = $response->json()['data'];
        return view('sdm.dosen', compact('listDosen'));
    }

    public function pageDosenHomebase(DsnHombeBaseChart $dsnHombeBaseChart)
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-homebase');
        $listDosen = $response->json()['data'];
        $sum = $response->json()['total_data'];

        return view('sdm.dosen.homebase', [
            'listDosen' => $listDosen,
            'sum' => $sum,
            'chart' => $dsnHombeBaseChart->build(),
        ]);
    }

    public function pageDosenJabatanaka(DsnJabatanChart $dsnJabatanChart)
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-jabatan-akademik');
        $listDosen = $response->json()['data'];
        $sumall = $response->json()['total_data'];
        $sum1 = $response->json()['total_data_S1'];
        $sum2 = $response->json()['total_data_S2'];
        $sum3 = $response->json()['total_data_S3'];

        return view('sdm.dosen.jabatanaka', [
            'listDosen' => $listDosen,
            'sumall' => $sumall,
            'sum1' => $sum1,
            'sum2' => $sum2,
            'sum3' => $sum3,
            'chart1' => $dsnJabatanChart->buildchart1(),
            'chart2' => $dsnJabatanChart->buildchart2(),
            'chart3' => $dsnJabatanChart->buildchart3(),
        ]);
    }

    public function pageDosenPakhir(DsnPendidikanChart $dsnPendidikanChart)
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-pendidikan-akhir');
        $listDosen = $response->json()['data'];
        $sumall = $response->json()['total_data'];
        $sum1 = $response->json()['total_data_S1'];
        $sum2 = $response->json()['total_data_S2'];
        $sum3 = $response->json()['total_data_S3'];

        return view('sdm.dosen.pendidikan', [
            'listDosen' => $listDosen,
            'sumall' => $sumall,
            'sum1' => $sum1,
            'sum2' => $sum2,
            'sum3' => $sum3,
            'chart1' => $dsnPendidikanChart->buildchart1(),
            'chart2' => $dsnPendidikanChart->buildchart2(),
            'chart3' => $dsnPendidikanChart->buildchart3(),
        ]);
    }

    public function pageDosenStatus(DsnSertifikasiChart $dsnSertifikasiChart)
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-status-sertifikasi');
        $listDosen = $response->json()['data'];
        $sum_dosen = $response->json()['total_dosen'];
        $sum_dosen_s = $response->json()['total_dosen_sertifikasi'];

        return view('sdm.dosen.status', [
            'listDosen' => $listDosen,
            'sum_dosen' => $sum_dosen,
            'sum_dosen_s' => $sum_dosen_s,
            'chart1' => $dsnSertifikasiChart->buildchart1(),
            'chart2' => $dsnSertifikasiChart->buildchart2()
        ]);
    }

    public function pageDosenTetap(DsnTetapChart $dsnTetapChart)
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-tidak-tetap');

        $listDosen = $response->json()['fakultas'];
        $sum_dosen = $response->json()['total_dosen_tetap_fakultas'];

        $akademik = $response->json()['jabatan_akademik'];

        $sum1 = $response->json()['total_data_S1'];
        $sum2 = $response->json()['total_data_S1'];
        $sum3 = $response->json()['total_data_S1'];

        return view('sdm.dosen.tetap', [
            'listDosen' => $listDosen,
            'sum_dosen' => $sum_dosen,
            'akademik' => $akademik,
            'sum1' => $sum1,
            'sum2' => $sum2,
            'sum3' => $sum3,
            'chart1' => $dsnTetapChart->buildchart1(),
            'chart2' => $dsnTetapChart->buildchart2(),
            'chart3' => $dsnTetapChart->buildchart3(),
            'chart4' => $dsnTetapChart->buildchart4(),
        ]);
    }

    public function pageTendik(TendikChart $tendikChart)
    {
        $response = Http::get('https://bolainsight.my.id/api/tendik');
        $data = $response->json()['data'];
        $sum = $response->json()['total_data'];

        return view('sdm.tendik', [
            'data' => $data,
            'sum' => $sum,
            'chart' => $tendikChart->build()
        ]);
    }

    public function pageAkre(AkreditasiChart $akreditasiChart)
    {
        $response = Http::get('https://bolainsight.my.id/api/akreditasi');
        $jenjang = $response->json()['data'];
        $akreditasi = $response->json()['data'];

        $sum = $response->json()['total_data'];
        $unggul = $response->json()['total_akreditasi_unggul'];
        $a = $response->json()['total_akreditasi_a'];
        $b = $response->json()['total_akreditasi_b'];
        $bs = $response->json()['total_akreditasi_baik_sekali'];
        $bk = $response->json()['total_akreditasi_baik'];

        return view('akreditasi', [
            'jenjang' => $jenjang,
            'sum' => $sum,
            'unggul' => $unggul,
            'a' => $a,
            'b' => $b,
            'bs' => $bs,
            'bk' => $bk,
            'akreditasi' => $akreditasi,
            'chart' => $akreditasiChart->build(),
        ]);
        // return view('akreditasi', compact('akreditasi', ));
    }
}
