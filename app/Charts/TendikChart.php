<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\PieChart;
use Illuminate\Support\Facades\Http;

class TendikChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): PieChart
    {
        $response = Http::get('https://bolainsight.my.id/api/tendik');

        if ($response->successful() && isset($response->json()['data'])) {
            # code...
            $api = $response->json()['data'];

            foreach ($api as $items) {
                # code...
                $jabatan[] = $items['jabatan_tendik'];
                $jml[] = (int) $items['jumlah'];
            }
        }

        return $this->chart->pieChart()
            ->setTitle('Tenaga Didik UINSA')
            ->setSubtitle('Season 2021.')
            ->setDataset($jml)
            ->setLabels($jabatan);
    }
}
