<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PantaiModel;

class DashController extends BaseController
{
    public function index()
    {
        $data['activePage'] = 'home';
        return view('dash/index', $data);
    }

    public function wisata()
    {
        $pantaiModel = new PantaiModel();
        $data['pantai'] = $pantaiModel->findAll();
        $data['activePage'] = 'wisata';

        return view('dash/page/wisata', $data);
    }
    public function login()
    {
        return view('auth/login');
    }
    public function pesanTiket($id_pantai)
{
    $pantaiModel = new PantaiModel();
    $pantai = $pantaiModel->find($id_pantai);

    if (!$pantai) {
        // Handle jika pantai tidak ditemukan
        return redirect()->to('/');
    }

    $data['pantai'] = $pantai;

    return view('dash/page/pesan', $data);
}

}
