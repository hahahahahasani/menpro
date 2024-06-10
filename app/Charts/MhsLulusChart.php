<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\BarChart;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\LineChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MhsLulusChart
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
        $response = Http::get('https://bolainsight.my.id/api/mhs-lulus?id_prodi=' . $request->prodi);

        if ($response->successful() && isset($response->json()['data'])) {
            $api = $response->json()['data'];

            foreach ($api as $items) {
                $tahun[] = $items['tahun'];
                $lulusan[] = (int) $items['jml_lulusan'];
            }
        }

        return $this->chart1->barChart()
            ->setTitle('Jumlah Lulusan')
            ->setSubtitle('Season 2020/2023')
            ->addData('Jumlah Lulusan', $lulusan)
            ->setXAxis($tahun);
    }

    public function buildchart2(Request $request): BarChart
    {
        $response = Http::get('https://bolainsight.my.id/api/mhs-lulus?id_prodi=' . $request->prodi);

        if ($response->successful() && isset($response->json()['data'])) {
            $api = $response->json()['data'];

            foreach ($api as $items) {
                $tahun[] = $items['tahun'];
                $rataipk[] = (int) $items['rerata_ipk'];
                $ratastudi[] = (int) $items['rerata_masa_studi'];
            }
        }

        return $this->chart2->barChart()
            ->setTitle('Rata-Rata Masa Studi & IPK')
            ->setSubtitle('Season 2020/2023')
            ->addData('Rata-Rata IPK', $rataipk)
            ->addData('Rata-Rata Studi', $ratastudi)
            ->setXAxis($tahun);
    }
}
