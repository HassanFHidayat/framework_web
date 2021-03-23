<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function list () {
        return view('list', [
            'type' => 'ul',
            'm1' => 'Coffe',
            'm2' => 'Tea',
            'm3' => 'Milk'
        ]);
    }

    public function ordered () {
        return view('list', [
            'type' => 'ol',
            'm1' => 'Coffe',
            'm2' => 'Tea',
            'm3' => 'Milk'
        ]);
    }
}
