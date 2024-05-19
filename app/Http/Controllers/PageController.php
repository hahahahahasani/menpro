<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pageMhsCalon()
    {
        return view('mhs.mhsCalon');
    }

    public function pageMhsAktif()
    {
        return view('mhs.mhsAktif');
    }

    public function pageMhsLulus()
    {
        return view('mhs.mhsLulus');
    }

    public function pageMhsAsing()
    {
        return view('mhs.mhsAsing');
    }

    public function pageMhsTgsAkhir()
    {
        return view('mhs.mhsTgsAkhir');
    }

    public function pageDosen()
    {
        return view('sdm.dosen');
    }
    
    public function pageTendik()
    {
        return view('sdm.tendik');
    }
    
    public function pageAkre()
    {
        return view('akreditasi');
    }
}
