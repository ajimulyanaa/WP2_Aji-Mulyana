<?php

namespace App\Controllers;

class Matakuliah extends BaseController
{
    public function index(): string
    {
        $data['validation'] = \Config\Services::validation();
        return view('form_matakuliah', $data);
    }
    // public function data(): string
    // {
    //     $data = [
    //         'kode' => $this->request->getpost('kode'),
    //         'nama' => $this->request->getpost('nama'),
    //         'skss' => $this->request->getpost('sks'),
    //         ];
    //     return view('data_kuliah',$data);
    // }

    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'sks' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            
        $data = [
            'nama' => $this->request->getPost('kode'),
            'kelas' => $this->request->getPost('nama'),
            'sks' => $this->request->getPost('sks'),
            ];
        return view('data_kuliah',$data);
        }
        
    //    var_dump($this->request->getVar());
    }
}