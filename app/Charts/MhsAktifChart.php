<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\LineChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MhsAktifChart
{
    protected $chart1;
    protected $chart2;

    public function __construct(LarapexChart $chart)
    {
        $this->chart1 = $chart;
        $this->chart2 = $chart;
    }

    public function buildchart1(Request $request): LineChart
    {
        $response = Http::get('https://bolainsight.my.id/api/mhs-aktif?id_prodi=' . $request->prodi);

        if ($response->successful() && isset($response->json()['data'])) {
            # code...
            $api = $response->json()['data'];

            foreach ($api as $items) {
                # code...
                $tahun[] = $items['tahun'];
                $mhsaktif[] = (int) $items['jml_mhs_aktif'];
            }
        }

        return $this->chart1->lineChart()
            ->setTitle('Jumlah Mahasiswa Aktif')
            ->setSubtitle('Season 2021')
            ->addData('Mahasiswa Aktif', $mhsaktif)
            ->setXAxis($tahun);
    }

    public function buildChart2(Request $request): LineChart
    {
        $response = Http::get('https://bolainsight.my.id/api/mhs-aktif?id_prodi=' . $request->prodi);

        if ($response->successful() && isset($response->json()['data'])) {
            # code...
            $api = $response->json()['data'];

            foreach ($api as $items) {
                # code...
                $tahun[] = $items['tahun'];
                $mhstransfer[] = (int) $items['jml_mhs_transfer'];
            }
        }

        return $this->chart2->lineChart()
            ->setTitle('Jumlah Mahasiswa Transfer')
            ->setSubtitle('Season 2021')
            ->addData('Mahasiswa Transfer', $mhstransfer)
            ->setXAxis($tahun);
    }
}
