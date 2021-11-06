<?php

namespace App\Controllers;

class KegiatanDimas extends BaseController
{
    public function index()
    {
        $kegiatanmodel = new \App\Models\KegiatanModel_dimas();
        $kegiatan = $kegiatanmodel->findAll();
        $data = [
            'title' => 'Kegiatan',
            'navState' => ['','','active',''],
            'kegiatan' => $kegiatan,
        ];

        return view('pages/kegiatan_dimas',$data);
    }

    public function input()
    {
        $data = [
            'title' => 'Input Kegiatan',
            'navState' => ['','','','active'] 
        ];

        return view('pages/input_dimas',$data);
    }

    public function save()
    {
        $kegiatanmodel = new \App\Models\KegiatanModel_dimas();
        $data = [
            'nama_kegiatan' => $this->request->getVar('nama'),
            'poin' => $this->request->getVar('poin'),
        ];
        $kegiatanmodel->insert($data);
        return redirect()->to('/kegiatandimas');
    }
}
