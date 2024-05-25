<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
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
        return view('sdm.tendik');
    }

    public function pageAkre()
    {
        $response = Http::get('https://bolainsight.my.id/api/akreditasi');
        $jenjang = $response->json()['data'];
        // $akreditasi = $response->json()['data']['akreditasi'];

        $sum = $response->json()['total_data'];
        $unggul = $response->json()['total_akreditasi_unggul'];
        $a = $response->json()['total_akreditasi_a'];
        $b = $response->json()['total_akreditasi_b'];
        $bs = $response->json()['total_akreditasi_baik_sekali'];
        $bk = $response->json()['total_akreditasi_baik'];
        return view('akreditasi', compact('jenjang', 'sum', 'unggul', 'a', 'b', 'bs', 'bk'));
    }
}
