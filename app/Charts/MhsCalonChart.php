<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\BarChart;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MhsCalonChart
{
    protected $chart1;
    protected $chart2;

    public function __construct(LarapexChart $chart)
    {
        $this->chart1 = $chart;
        $this->chart2 = $chart;
    }

    public function buildchart1(Request $request): BarChart
    {
        $response = Http::get('https://bolainsight.my.id/api/calon-mhs?id_prodi=' . $request->prodi);

        $dayatampung = [];
        $daftar = [];
        $seleksi = [];

        if ($response->successful() && isset($response->json()['data'])) {
            $api = $response->json()['data'];

            foreach ($api as $items) {
                if ($items['tahun'] == '2020') {
                    $dayatampung[] = (int) $items['daya_tampung'];
                    $daftar[] = (int) $items['pendaftar'];
                    $seleksi[] = (int) $items['lulus_seleksi'];
                }
            }
        }

        $labels = ['Daya Tampung', 'Pendaftar', 'Lulus Seleksi'];
        $data2020 = [$dayatampung[0], $daftar[0], $seleksi[0]];

        return $this->chart1->barChart()
            ->setTitle('Calon Mahasiswa 2020')
            ->setSubtitle('Season 2020')
            ->addData('2020', $data2020)
            ->setXAxis($labels);
    }

    public function buildChart2(Request $request): BarChart
    {
        $response = Http::get('https://bolainsight.my.id/api/calon-mhs?id_prodi=' . $request->prodi);

        $dayatampung = [];
        $daftar = [];
        $seleksi = [];

        if ($response->successful() && isset($response->json()['data'])) {
            $api = $response->json()['data'];

            foreach ($api as $items) {
                if ($items['tahun'] == '2021') {
                    $dayatampung[] = (int) $items['daya_tampung'];
                    $daftar[] = (int) $items['pendaftar'];
                    $seleksi[] = (int) $items['lulus_seleksi'];
                }
            }
        }

        $labels = ['Daya Tampung', 'Pendaftar', 'Lulus Seleksi'];
        $data2021 = [$dayatampung[0], $daftar[0], $seleksi[0]];

        return $this->chart2->barChart()
            ->setTitle('Calon Mahasiswa 2021')
            ->setSubtitle('Season 2021')
            ->addData('2021', $data2021)
            ->setXAxis($labels);
    }
}
