<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswa'));
    }
    
    public function insert()
    {
        return view('mahasiswa._formInsert');
    }

    public function update($nim)
    {
        $mahasiswa = Mahasiswa::find($nim);

        return view('mahasiswa._formUpdate', compact('mahasiswa'));
    }

    public function delete($nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        $mahasiswa->delete();

        return redirect('mahasiswa');
    }

    public function save(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->fakultas = $request->input('prodi');
        $mahasiswa->dob = $request->input('dob');
        $mahasiswa->save();

        return redirect('mahasiswa');
    }

    public function updated(Request $request)
    {
        $mahasiswa = Mahasiswa::find($request->nim);
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->fakultas = $request->input('prodi');
        $mahasiswa->dob = $request->input('dob');
        $mahasiswa->update();

        return redirect('mahasiswa');
    }
}
