<?php

namespace App\Http\Controllers;
use App\peminjaman;
use App\anggota;
use App\buku;

use Illuminate\Http\Request;

class peminjamancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman =peminjaman::orderBy('created_at', 'DESC')->paginate(10);

        return view('peminjaman.index', compact('peminjaman')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = anggota::all();
        $buku = buku::all();
        return view("peminjaman.create", compact('anggota', 'buku'));  
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
            'tanggal_pinjam'        => 'required',
            'tanggal_kembali'       => 'required',
            'jumlah_buku_dipinjam'  => 'required',
            'anggota_id'            => 'required',
            'buku_id'               => 'required',
        ]);

        peminjaman::create([
            'tanggal_pinjam'          => $request->tanggal_pinjam,
            'tanggal_kembali'         => $request->tanggal_kembali,
            'jumlah_buku_dipinjam'    => $request->jumlah_buku_dipinjam,
            'anggota_id'              => $request->anggota_id,
            'buku_id'                 => $request->buku_id,
        ]);

        $buku = buku::find($request->buku_id);
        $buku->stok_buku  -= $request->jumlah_buku_dipinjam;
        $buku->update();

        // $tanggal_pinjam = date('Y-m-d',strtotime('2022-04-05'));
        // $tanggal_kembali = date('Y-m-d',strtotime('2022-04-12'));

        // $peminjaman = peminjaman::whereDate('created_at','>=',$tanggal_pinjam)->whereDate('created_at','<=',$tanggal_kembali)->get();
 

        return redirect(route('peminjaman.index'))->with(['success' => 'Peminjaman Baru Ditambahkan!']);
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
        $peminjaman = peminjaman::where('id',$id)->first();
        $anggota = anggota::all();
        $buku = buku::all();
        return view('peminjaman.edit', compact('peminjaman', 'anggota', 'buku')); 
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
        $this->validate($request, [
            'tanggal_pinjam'        => 'required',
            'tanggal_kembali'       => 'required',
            'jumlah_buku_dipinjam'  => 'required',
            'anggota_id'            => 'required',
            'buku_id'               => 'required',
        ]);

        $peminjaman= peminjaman::find($id);
        $peminjaman->update([
            'tanggal_pinjam'          => $request->tanggal_pinjam,
            'tanggal_kembali'         => $request->tanggal_kembali,
            'jumlah_buku_dipinjam'    => $request->jumlah_buku_dipinjam,
            'anggota_id'              => $request->anggota_id,
            'buku_id'                 => $request->buku_id,
        ]);

        $buku = buku::find($request->buku_id);
        $buku->stok_buku  -= $request->jumlah_buku_dipinjam;
        $buku->update();

    return redirect(route('peminjaman.index'))->with(['success' => 'Peminjaman Diperbaharui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        peminjaman::where('id', $id)->delete();
        return redirect(route('peminjaman.index'))->with(['success' => 'Peminjaman Dihapus!']); 
    }
}
