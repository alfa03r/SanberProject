<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request) {
        $namaAwal = $request['namaAwal'];
        $namaAkhir = $request['namaAkhir'];

        return view('pages.welcome', ['namaAwal' => $namaAwal, 'namaAkhir' => $namaAkhir]);
    }
}
