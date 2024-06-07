<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\LineChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MhsAsingChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(Request $request): LineChart
    {
        $response = Http::get('https://bolainsight.my.id/api/mhs-asing?id_prodi=' . $request->prodi);

        if ($response->successful() && isset($response->json()['data'])) {
            $api = $response->json()['data'];

            foreach ($api as $items) {
                # code...
                $tahun[] = $items['tahun'];
                $mhsasing[] = (int) $items['jml_mhs_asing'];
            }
        }

        return $this->chart->lineChart()
            ->setTitle('Data Mahasiswa Asing')
            ->setSubtitle('Season 2020/2021')
            ->addData('Mahasiswa Asing', $mhsasing)
            ->setXAxis($tahun);
    }
}
