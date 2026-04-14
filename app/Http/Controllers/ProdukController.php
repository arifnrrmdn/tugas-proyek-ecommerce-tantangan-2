<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data['name'] = 'Ariev';
        $data['jk'] = 'Laki-laki';
        $data['role'] = 'ERP Consultant';
        return view('view-data', $data);
    }
}
