<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $totalPendaftar = Pendaftar::count();
        $PendaftarTerbaru = Pendaftar::latest()->take(5)->get();
        return view('admin', compact('totalPendaftar', 'PendaftarTerbaru'));
    }

    public function pendaftaran()
    {
        $pendaftar = Pendaftar::latest()->get();
        return view('admin_pendaftaran', compact('pendaftar'));
    }
}

