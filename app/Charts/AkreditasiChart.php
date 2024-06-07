<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\Http;
use \ArielMejiaDev\LarapexCharts\BarChart;

class AkreditasiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): BarChart
    {
        $response = Http::get('https://bolainsight.my.id/api/akreditasi');

        if ($response->successful() && isset($response->json()['data'])) {
            # code...
            $api = $response->json()['data'];

            foreach ($api as $data) {
                # code...
                $jenjang[] = $data['jenjang'];
                $akreUnggul[] = $data['akreditasi']['Unggul'];
                $akreA[] = $data['akreditasi']['A'];
                $akreB[] = $data['akreditasi']['B'];
                $akreBaikSekali[] = $data['akreditasi']['Baik Sekali'];
                $akreBaik[] = $data['akreditasi']['Baik'];
            }
            return $this->chart->barChart()
            ->setTitle('Akreditasi')
                ->setSubtitle('Akreditasi tahun 2023/2024')
                ->addData('Unggul', $akreUnggul)
                ->addData('A', $akreA)
                ->addData('B', $akreB)
                ->addData('Baik Sekali', $akreBaikSekali)
                ->addData('Baik', $akreBaik)
                ->setXAxis($jenjang);
        }

        return redirect()->back()->with('error', 'Tidak dapat memuat data mahasiswa aktif.');
    }
}
