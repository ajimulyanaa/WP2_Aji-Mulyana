<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index(): string
    {
        return view('form');
    }

    public function save()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nis' => $this->request->getPost('nis'),
            'agama' => $this->request->getPost('agama'),
            'kelas' => $this->request->getPost('kelas'),
            'ttl' => $this->request->getPost('ttl'),
            'alamat' => $this->request->getPost('alamat'),
            'jeniskelamin' => $this->request->getPost('jeniskelamin'),
            ];
        return view('data',$data);
        }
}