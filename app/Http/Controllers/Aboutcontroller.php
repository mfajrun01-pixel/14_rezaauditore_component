<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    { 
        [[
          'tujuan' =>  'Website ini dibuat untuk memperkenalkan Reza Auditore sebagai streamer gaming' 
          ['halaman' => 'desc' => 'Website ini dibuat untuk memperkenalkan Reza Auditore sebagai streamer gaming']
          ['halaman' => 'desc' => 'Website ini dibuat untuk memperkenalkan Reza Auditore sebagai streamer gaming']
          ['halaman' => 'desc' => 'Website ini dibuat untuk memperkenalkan Reza Auditore sebagai streamer gaming']
        ]],
        return view('about');
    }
}
