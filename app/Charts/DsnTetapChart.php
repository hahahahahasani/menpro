<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\PieChart;
use Illuminate\Support\Facades\Http;

class DsnTetapChart
{
    protected $chart1;
    protected $chart2;
    protected $chart3;
    protected $chart4;

    public function __construct(LarapexChart $chart)
    {
        $this->chart1 = $chart;
        $this->chart2 = $chart;
        $this->chart3 = $chart;
        $this->chart4 = $chart;
    }

    public function buildchart1(): PieChart
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-tidak-tetap');

        if ($response->successful() && isset($response->json()['fakultas'])) {
            # code...
            $api = $response->json()['fakultas'];

            foreach ($api as $items) {
                # code...
                $fakultas[] = $items['nama_fakultas'];
                $jmldosentetap[] = (int) $items['jumlah_dosen_tetap'];
            }
        }
        
        return $this->chart1->pieChart()
            ->setTitle('Data Dosen Tidak Tetap Perfakultas')
            ->setSubtitle('Season 2021.')
            ->addData($jmldosentetap)
            ->setLabels($fakultas);
    }

    public function buildchart2(): PieChart
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-tidak-tetap');

        if ($response->successful() && isset($response->json()['jabatan_akademik'])) {
            # code...
            $api = $response->json()['jabatan_akademik'];

            foreach ($api as $items) {
                # code...
                $jabatan[] = $items['jabatan_akademik'];
                $pendidikan[] = (int) $items['pendidikan_terakhir']['S1'];
            }
        }
        
        return $this->chart2->pieChart()
            ->setTitle('Pendidikan Akhir S1')
            ->setSubtitle('Season 2021.')
            ->addData($pendidikan)
            ->setLabels($jabatan);
    }

    public function buildchart3(): PieChart
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-tidak-tetap');

        if ($response->successful() && isset($response->json()['jabatan_akademik'])) {
            # code...
            $api = $response->json()['jabatan_akademik'];

            foreach ($api as $items) {
                # code...
                $jabatan[] = $items['jabatan_akademik'];
                $pendidikan[] = (int) $items['pendidikan_terakhir']['S2'];
            }
        }
        
        return $this->chart3->pieChart()
            ->setTitle('Pendidikan Akhir S2')
            ->setSubtitle('Season 2021.')
            ->addData($pendidikan)
            ->setLabels($jabatan);
    }

    public function buildchart4(): PieChart
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-tidak-tetap');

        if ($response->successful() && isset($response->json()['jabatan_akademik'])) {
            # code...
            $api = $response->json()['jabatan_akademik'];

            foreach ($api as $items) {
                # code...
                $jabatan[] = $items['jabatan_akademik'];
                $pendidikan[] = (int) $items['pendidikan_terakhir']['S3'];
            }
        }
        
        return $this->chart4->pieChart()
            ->setTitle('Pendidikan Akhir S3')
            ->setSubtitle('Season 2021.')
            ->addData($pendidikan)
            ->setLabels($jabatan);
    }
}
