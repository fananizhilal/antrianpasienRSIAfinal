<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAntrianController extends Controller
{
    public function indexPoliAnak()
    {
        return view('dashboard.antrian.poliAnak');
    }

    public function indexPoliKandungan()
    {
        return view('dashboard.antrian.poliKandungan');
    }

    public function indexPoliNeonatologi()
    {
        return view('dashboard.antrian.poliNeonatologi');
    }
}
