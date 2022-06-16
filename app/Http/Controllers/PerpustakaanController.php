<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perpustakaan;
use App\Models\Tahun;

class PerpustakaanController extends Controller
{
    public function index()
    {
        $rows = Perpustakaan::all();
        return view('perpustakaan.index', compact('rows'));
    }

    public function create()
    {     
        $tahun_rows = Tahun::all();
        return view('perpustakaan.add', compact('tahun_rows'));        
        //return view('perpustakaan.add');
    }


    public function store(Request $request)
    {
        $request->validate([
        'judul_buku' => 'bail|required|unique:tb_buku',
        'pengarang_buku' => 'required'
        ],
        [
        'judul_buku.required' => 'Nama buku wajib diisi',
        'judul_buku.unique' => 'Nama Tahun sudah ada',
        'pengarang_buku.required' => 'Kode wajib diisi'
        ]);

        Perpustakaan::create([
        'judul_buku' => $request->judul_buku,
        'pengarang_buku' => $request->pengarang_buku,
        'penerbit_buku' => $request->penerbit_buku,
        'tahun_buku' => $request->tahun_buku
        ]);

        return redirect('perpustakaan');
    }

    public function show($id)
    {
        //
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        
        $rows = Perpustakaan::where('penerbit_buku', 'like', "%" . $keyword . "%")->paginate();
        return view('perpustakaan.index', compact('rows'));
    }

    public function lihat($id)
    {
        $row = Perpustakaan::findOrFail($id);
        return view('perpustakaan.lihat', compact('row'));
    }

    public function edit($id)
    {
        $row = Perpustakaan::findOrFail($id);
        return view('perpustakaan.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'judul_buku' => 'bail|required|unique:tb_buku',
        'pengarang_buku' => 'required'
        ],
        [
        'judul_buku.required' => 'NIM wajib diisi',
        'judul_buku.unique' => 'Nama Tahun sudah ada',
        'pengarang_buku.required' => 'Nama wajib diisi'
        ]);

        $row = Perpustakaan::findOrFail($id);
        $row->update([
        'judul_buku' => $request->judul_buku,
        'pengarang_buku' => $request->pengarang_buku,
        'penerbit_buku' => $request->penerbit_buku,
        'tahun_buku' => $request->tahun_buku
        ]);

        return redirect('perpustakaan');
    }

    public function destroy($id)
    {
        $row = Perpustakaan::findOrFail($id);
        $row->delete();
        return redirect('perpustakaan');
    }
}