<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');

        $servis = $this->dataServis();
        $jumlahServis = count($servis);

        return view('dashboard', [
            'username' => $username,
            'jumlahServis' => $jumlahServis
        ]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');

        return view('profile', [
            'username' => $username
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');

        $servis = $this->dataServis();

        return view('pengelolaan', [
            'username' => $username,
            'servis' => $servis
        ]);
    }

    private function dataServis()
    {
        return [
            [
                'komponen' => 'Oli Mesin',
                'kategori' => 'Mesin',
                'status' => 'Selesai'
            ],
            [
                'komponen' => 'Busi Iridium',
                'kategori' => 'Pengapian',
                'status' => 'Selesai'
            ],
            [
                'komponen' => 'Rantai Motor',
                'kategori' => 'Penggerak',
                'status' => 'Perlu Dicek'
            ]
        ];
    }
}
