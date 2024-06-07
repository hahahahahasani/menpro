<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\PieChart;
use Illuminate\Support\Facades\Http;

class DsnHombeBaseChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): PieChart
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-homebase');

        if ($response->successful() && isset($response->json()['data'])) {
            # code...
            $api = $response->json()['data'];

            foreach ($api as $items) {
                # code...
                $jabatan[] = $items['nama_fakultas'];
                $jml[] = (int) $items['jumlah'];
            }
        }

        return $this->chart->pieChart()
            ->setTitle('Data Dosen per Homebase')
            ->setSubtitle('Season 2021.')
            ->addData($jml)
            ->setLabels($jabatan);
    }

}
