<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\PieChart;
use Illuminate\Support\Facades\Http;

class DsnJabatanChart
{
    protected $chart1;
    protected $chart2;
    protected $chart3;

    public function __construct(LarapexChart $chart)
    {
        $this->chart1 = $chart;
        $this->chart2 = $chart;
        $this->chart3 = $chart;
    }

    public function buildchart1(): PieChart
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-jabatan-akademik');

        if ($response->successful() && isset($response->json()['data'])) {
            # code...
            $api = $response->json()['data'];

            foreach ($api as $items) {
                # code...
                $jabatan[] = $items['jabatan_akademik'];
                $s1[] = (int) $items['pendidikan_terakhir']['S1'];
            }
        }
        
        return $this->chart1->pieChart()
            ->setTitle('Jabatan Akademik S1')
            ->setSubtitle('Season 2021.')
            ->addData($s1)
            ->setLabels($jabatan);
    }

    public function buildchart2(): PieChart
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-jabatan-akademik');

        if ($response->successful() && isset($response->json()['data'])) {
            # code...
            $api = $response->json()['data'];

            foreach ($api as $items) {
                # code...
                $jabatan[] = $items['jabatan_akademik'];
                $s2[] = (int) $items['pendidikan_terakhir']['S2'];
            }
        }
        
        return $this->chart1->pieChart()
            ->setTitle('Jabatan Akademik S2')
            ->setSubtitle('Season 2021.')
            ->addData($s2)
            ->setLabels($jabatan);
    }

    public function buildchart3(): PieChart
    {
        $response = Http::get('https://bolainsight.my.id/api/dosen-jabatan-akademik');

        if ($response->successful() && isset($response->json()['data'])) {
            # code...
            $api = $response->json()['data'];

            foreach ($api as $items) {
                # code...
                $jabatan[] = $items['jabatan_akademik'];
                $s3[] = (int) $items['pendidikan_terakhir']['S3'];
            }
        }
        
        return $this->chart1->pieChart()
            ->setTitle('Jabatan Akademik S3')
            ->setSubtitle('Season 2021.')
            ->addData($s3)
            ->setLabels($jabatan);
    }
}
