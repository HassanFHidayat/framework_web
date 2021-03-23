<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index() {
        return view('table', [
            'nama' => 'Eden Hazard',
            'tahun20' => '2020',
            'tahun21' => '2021',
            'gol20' => '50',
            'gol21' => '60',
            'assist20' => '40',
            'assist21' => '30'
        ]);
    }
}
