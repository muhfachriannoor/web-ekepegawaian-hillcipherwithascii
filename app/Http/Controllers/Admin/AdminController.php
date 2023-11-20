<?php

namespace App\Http\Controllers\Admin;

use App\DataPns;
use App\DataNonPns;
use App\Bidang;
use App\SubBidang;
use App\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Dashboard E-Kepegawaian';
        $hitung_datapns = DataPns::count();
        $hitung_datanonpns = DataNonPns::count();
        $hitung_databidang = Bidang::count();
        $hitung_datasubbidang = SubBidang::count();
        $hitung_dataakun = User::count();
        return view('admin/dashboard', compact('title', 'hitung_datapns', 'hitung_datanonpns', 'hitung_databidang', 'hitung_datasubbidang', 'hitung_dataakun'));
    }

    public function halamanlogin()
    {
        return view('admin/login');
    }
}
