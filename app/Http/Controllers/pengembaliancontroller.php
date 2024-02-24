<?php

namespace App\Http\Controllers;
use App\pengembalian;
use App\buku;
use App\anggota;
use App\peminjaman;



use Illuminate\Http\Request;

class pengembaliancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengembalian =pengembalian::orderBy('created_at', 'DESC')->paginate(10);

        return view('pengembalian.index', compact('pengembalian')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjaman= peminjaman::all();
        $buku= buku::all();
        $anggota= anggota::all();
        return view("pengembalian.create", compact('peminjaman', 'buku', 'anggota'));  
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
            // 'tanggal_pengembalian' => 'required',
            'jumlah_buku_dikembalikan' => 'required',
            'peminjaman_id' => 'required',
            
        ]);

        pengembalian::create([
            // 'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'jumlah_buku_dikembalikan' => $request->jumlah_buku_dikembalikan,
            'peminjaman_id' => $request->peminjaman_id,
        ]); 

        // $peminjaman = peminjaman::find($request->peminjaman_id);
        // $buku = buku::find($peminjaman->peminjaman_id);
       // dd($buku);

        $buku->stok_buku  += $request->jumlah_buku_dikembalikan;
        $buku->update();

        // pengembalian::create($request->all());

        return redirect(route('pengembalian.index'))->with(['success' => 'Pengembalian Baru Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $peminjaman = peminjaman::findorFail($peminjaman_id);

        // return view('pengembalian.index', [
        //     'peminjaman_id' => $peminjaman_id,
        //     'semua_peminjaman' => peminjaman::all(),
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengembalian= pengembalian::find($id)->first();
        $peminjaman = peminjaman::all();
        return view('pengembalian.edit', compact('pengembalian', 'peminjaman')); 
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
            // 'tanggal_pengembalian' => 'required',
            'jumlah_buku_dikembalikan' => 'required',
            'peminjaman_id' => 'required',
            
        ]);

        $pengembalian= pengembalian::find($id);
        $pengembalian->update([
            // 'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'jumlah_buku_dikembalikan' => $request->jumlah_buku_dikembalikan,
            'peminjaman_id' => $request->peminjaman_id,
        ]); 

        // $pengembalian->update($request->all());

        $buku = buku::find($request->buku_id);
        $buku->stok_buku  + $request->jumlah_buku_dikembalikan ;
        $buku->update();


    return redirect(route('pengembalian.index'))->with(['success' => 'Pengembalian Diperbaharui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengembalian::where('id', $id)->delete();
        return redirect(route('pengembalian.index'))->with(['success' => 'Pengembalian Dihapus!']);
    }
}
