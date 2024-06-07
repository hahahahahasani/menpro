<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\PieChart;
use Illuminate\Support\Facades\Http;

class DsnSertifikasiChart
{
    protected $chart1;
    protected $chart2;

    public function __construct(LarapexChart $chart)
    {
        $this->chart1 = $chart;
        $this->chart2 = $chart;
    }

    public function buildchart1(): PieChart
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-status-sertifikasi');

        if ($response->successful() && isset($response->json()['data'])) {
            # code...
            $api = $response->json()['data'];

            foreach ($api as $items) {
                # code...
                $fakultas[] = $items['nama_fakultas'];
                $jmldsn[] = (int) $items['jumlah_dosen'];
            }
        }
        
        return $this->chart1->pieChart()
            ->setTitle('Pendidikan Akhir S1')
            ->setSubtitle('Season 2021.')
            ->addData($jmldsn)
            ->setLabels($fakultas);
    }

    public function buildchart2(): PieChart
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-status-sertifikasi');

        if ($response->successful() && isset($response->json()['data'])) {
            # code...
            $api = $response->json()['data'];

            foreach ($api as $items) {
                # code...
                $fakultas[] = $items['nama_fakultas'];
                $sertif[] = (int) $items['jumlah_sertifikasi'];
            }
        }
        
        return $this->chart2->pieChart()
            ->setTitle('Status Sertifikasi Dosen')
            ->setSubtitle('Season 2021.')
            ->addData($sertif)
            ->setLabels($fakultas);
    }

}
