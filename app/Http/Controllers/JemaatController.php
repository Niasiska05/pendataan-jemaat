<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Illuminate\Http\Request;

class JemaatController extends Controller
{
    public function index()
    {
        $jemaat = Jemaat::all();

        return view('Jemaat.index', compact('jemaat'));
    }

    public function create()
    {
        return view('jemaat.create');
    }

    public function store(Request $request)
    {
        $jemaat = new Jemaat;
        $jemaat->id = $request->id;
        $jemaat->nik =$request->nik;
        $jemaat->nama =$request->nama;
        $jemaat->jk =$request->jk;
        $jemaat->tmplhr =$request->tmp_lhr;
        $jemaat->tgllhr =$request->tgl_lhr;
        $jemaat->status_baptis =$request->status_baptis;
        $jemaat->tglsidi =$request->tgl_sidi;
        $jemaat->nama_ayah =$request->nama_ayah;
        $jemaat->nama_ibu =$request->nama_ibu;
        $jemaat->alamt =$request->alamat;
        $jemaat->save();

        Jemaat::create($request->all());

        return redirect()->route('Jemaat.index')->with('success', 'Jemaat berhasil ditambahkan');
    }
    public function show(string $id)
    {
        $Jemaat = Jemaat::findOrFail($id);
        return view('Jemaat.show',compact('jemaat'));
    }

    public function edit($id)
    {
        $jemaat = Fakultas::findOFail($id);
        return view('jemaat.edit', compact('jemat'));
    }

    public function update(Request $request, $id)
    {
            $jemaat->id = $required->iput('id');
            $jemaat->nik =$required->input('nik');
            $jemaat->nama =$required->input('nama');
            $jemaat->jk =$required->input('jk');
            $jemaat->tmptlhr =$required->input('tmplhr');
            $jemaat->tgllhr =$required->input('tgllhr');
            $jemaat->status_baptis =$required->input('status_baptis');
            $jemaat->tglsidi =$required->input('tglsidi');
            $jemaat->nama_ayah =$required->input('nama_ayah');
            $jemaat->nama_ibu =$required->input('nama_ibu');
            $jemaat->alamt =$required->input('alamat');

       $jemaat = Jemaat::findOFail($id);

       $jemaat->update($request->all);

        return redirect()->route('jemaat.index')->with('success', 'Jemaat berhasil diperbarui');
    }

    public function destroy($id)
    {
        $jemaat = Jemaat::findOFail($id);
        $jemaat->delete();

        return redirect()->route('Jemaat.index')->with('success', 'Jemaat berhasil dihapus');
    }
}
