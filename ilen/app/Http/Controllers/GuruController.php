<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function penilaianGuru()
    {
        return view('guru.penilaian_guru');
    }
}
