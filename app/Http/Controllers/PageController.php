<?php

namespace App\Http\Controllers;

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
        return view('mhs.mhsCalon');
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

    public function getMhsAktif(Request $request)
    {
        $respone = Http::get('https://bolainsight.my.id/api/mhs-aktif?id_prodi=' . $request->prodi);
        $data = $respone->json()['data'];
        return view('mhs.mhsAktif', compact('data'));
    }

    public function getMhsCalon(Request $request)
    {
        $respone = Http::get('https://bolainsight.my.id/api/calon-mhs?id_prodi=' . $request->prodi);
        $data = $respone->json()['data'];
        return view('mhs.mhsCalon', compact('data'));
    }

    public function getMhsLulus(Request $request)
    {
        $respone = Http::get('https://bolainsight.my.id/api/mhs-lulus?id_prodi=' . $request->prodi);
        $data = $respone->json()['data'];
        return view('mhs.mhsLulus', compact('data'));
    }

    public function getMhsAsing(Request $request)
    {
        $respone = Http::get('https://bolainsight.my.id/api/mhs-asing?id_prodi=' . $request->prodi);
        $data = $respone->json()['data'];
        return view('mhs.mhsAsing', compact('data'));
    }

    public function getMhsTgsAkhir(Request $request)
    {
        $respone = Http::get('https://bolainsight.my.id/api/mhs-tugas-akhir?id_prodi=' . $request->prodi);
        $data = $respone->json()['data'];
        return view('mhs.mhsTgsAkhir', compact('data'));
    }

    public function pageDosen()
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen');
        $listDosen = $response->json()['data'];
        return view('sdm.dosen', compact('listDosen'));
    }

    public function pageDosenHomebase()
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-homebase');
        $listDosen = $response->json()['data'];
        $sum = $response->json()['total_data'];
        return view('sdm.dosen.homebase', compact('listDosen', 'sum'));
    }

    public function pageDosenJabatanaka()
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-jabatan-akademik');
        $listDosen = $response->json()['data'];
        $sumall = $response->json()['total_data'];
        $sum1 = $response->json()['total_data_S1'];
        $sum2 = $response->json()['total_data_S2'];
        $sum3 = $response->json()['total_data_S3'];
        return view('sdm.dosen.jabatanaka', compact('listDosen', 'sumall', 'sum1', 'sum2', 'sum3'));
    }

    public function pageDosenPakhir()
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-pendidikan-akhir');
        $listDosen = $response->json()['data'];
        $sumall = $response->json()['total_data'];
        $sum1 = $response->json()['total_data_S1'];
        $sum2 = $response->json()['total_data_S2'];
        $sum3 = $response->json()['total_data_S3'];
        return view('sdm.dosen.pendidikan', compact('listDosen', 'sumall', 'sum1', 'sum2', 'sum3'));
    }

    public function pageDosenStatus()
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-status-sertifikasi');
        $listDosen = $response->json()['data'];
        $sum_dosen = $response->json()['total_dosen'];
        $sum_dosen_s = $response->json()['total_dosen_sertifikasi'];
        return view('sdm.dosen.status', compact('listDosen', 'sum_dosen', 'sum_dosen_s'));
    }

    public function pageDosenTetap()
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-tidak-tetap');

        $listDosen = $response->json()['fakultas'];
        $sum_dosen = $response->json()['total_dosen_tetap_fakultas'];

        $akademik = $response->json()['jabatan_akademik'];

        $sum1 = $response->json()['total_data_S1'];
        $sum2 = $response->json()['total_data_S1'];
        $sum3 = $response->json()['total_data_S1'];
        return view('sdm.dosen.tetap', compact('listDosen', 'akademik', 'sum_dosen', 'sum1', 'sum2', 'sum3'));
    }

    public function pageTendik()
    {
        $response = Http::get('https://bolainsight.my.id/api/tendik');
        $data = $response->json()['data'];
        $sum = $response->json()['total_data'];
        return view('sdm.tendik', compact('data', 'sum'));
    }

    public function pageAkre()
    {
        $response = Http::get('https://bolainsight.my.id/api/akreditasi');
        $akreditasi = $response->json()['data'];
        return view('akreditasi', compact('akreditasi'));
    }
}
