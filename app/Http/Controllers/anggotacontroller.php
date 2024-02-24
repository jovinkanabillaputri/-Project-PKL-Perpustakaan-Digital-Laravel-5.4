<?php

namespace App\Http\Controllers;
use App\anggota;

use Illuminate\Http\Request;

class anggotacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = anggota::orderBy('created_at', 'DESC')->paginate(10);

        return view('anggota.index', compact('anggota'));
    }

    public function cetakanggota()
    {
        $dtanggota = anggota::orderBy('created_at', 'DESC')->get();

        return view('laporan.cetak-anggota', compact('dtanggota'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("anggota.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'             => 'required|string|max:150',
            'jenis_kelamin'    => 'required',
            'no_hp'            => 'required|numeric',
            'email'            => 'required|string|max:150|unique:anggota',
            'alamat'           => 'required',
            'tanggal_daftar'   => 'required',
            'status'           => 'required',
            ]);


        anggota::create($request->all());
        return redirect(route('anggota.index'))->with(['success' => 'Anggota Baru Ditambahkan!']);
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = anggota::find($id)->first();
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $anggota = anggota::find($id);
        $anggota->update($request->all());

    return redirect(route('anggota.index'))->with(['success' => 'Anggota Diperbaharui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        anggota::where('id', $id)->delete();
    return redirect(route('anggota.index'))->with(['success' => 'Anggota Dihapus!']);
    }
}
