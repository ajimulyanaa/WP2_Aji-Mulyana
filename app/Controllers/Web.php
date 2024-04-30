<?php

namespace App\Controllers;

class Web extends BaseController
{
    public function Home()
    {
        $data=[
            'judul'=>'Halaman Depan',
        ];
        return view('pustakabooking/home', $data);
    }

    public function about()
    {
        $data=[
            'judul'=>'About',
        ];
        return view('pustakabooking/about', $data);
    }

}