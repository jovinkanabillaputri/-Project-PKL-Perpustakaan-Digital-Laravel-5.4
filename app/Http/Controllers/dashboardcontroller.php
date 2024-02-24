<?php

namespace App\Http\Controllers;
use App\anggota;
use App\buku;
use App\penerbit;
use App\penulis;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $jumlah_anggota = anggota::all()->count();
        $jumlah_buku = buku::all()->count();
        $jumlah_penerbit= penerbit::all()->count();
        $jumlah_penulis = penulis::all()->count();
        
        return view('dashboard')
        ->with('jumlah_anggota', $jumlah_anggota)
        ->with('jumlah_buku', $jumlah_buku)
        ->with('jumlah_penerbit', $jumlah_penerbit)
        ->with('jumlah_penulis', $jumlah_penulis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
