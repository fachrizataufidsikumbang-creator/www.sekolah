<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KampusController extends Controller
{
public function index() {
        $nama_kampus = "Universitas Erlangga Teknologi";
        $slogan = "Mencetak Genarasi Unggul di Era Digital";
        return view('beranda', compact('nama_kampus', 'slogan'));
    }

    // Halaman Formulir Pendaftaran
    public function formulir() {
        $nama_kampus = "Universitas Erlangga Teknologi";
        $tahun_pendaftaran = date('Y');

        return view('pendaftaran', compact('nama_kampus', 'tahun_pendaftaran'));
    }

    public function proses(Request $request) {
        $request->validate([
            'nama_lengkap' => 'required|max:35',
            'email' => 'required|email|max:35',
            'telepon' => 'required|max:13',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|max:25',
            'fakulitas_pilihan' => 'required|max:35',
            'prodi_pilihan' => 'required|max:35',
            'persetujuan' => 'accepted',
        ]);

        try {
            $id_acak = rand(1000,9999);
            \DB::table('pendaftars')->insert([
                'idpendaftar'   => $id_acak,
                'namalengkap'   => $request->nama_lengkap,
                'email'         => $request->email,
                'no_hp'         => $request->telepon,
                'tgllahir'      => $request->tanggal_lahir,
                'alamat'        => $request->alamat,
                'namafakulitas' => $request->fakulitas_pilihan,
                'namaprodi'     => $request->prodi_pilihan,
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
     
            return redirect()->back()->with('success', 'Data berhasil disimpan ke table pendaftars!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan: ' . $e->getMessage());
        }
    }
}