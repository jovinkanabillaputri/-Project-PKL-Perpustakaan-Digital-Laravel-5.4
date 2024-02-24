<?php

namespace App\Http\Controllers;
use App\buku;
use App\kategori;
use App\rak;
use App\penulis;
use App\penerbit;

use Illuminate\Http\Request;

class bukucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku =buku::orderBy('created_at', 'DESC')->paginate(10);

        return view('buku.index', compact('buku')); 
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        $rak= rak::all();
        $penulis= penulis::all();
        $penerbit= penerbit::all();
        return view('buku.create',compact('kategori', 'rak', 'penulis', 'penerbit'));
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
            'cover'              => 'required',
            'isbn_issn'          => 'required',
            'judul_buku'         => 'required',
            'tahun_terbit'       => 'required',
            'tempat_terbit'      => 'required',
            'stok_buku'          => 'required',
            'deskripsi'          => 'required',
            'kategori_id'        => 'required',
            'rak_id'             => 'required',
            'penulis_id'         => 'required',
            'penerbit_id'        => 'required',
            ]);

            $file = $request->file('cover');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'data_file';
		    $file->move($tujuan_upload,$nama_file);
            //return dd($file);

            buku::create([
                 'cover'                 => $nama_file,    
                 'isbn_issn'             => $request->isbn_issn,
                 'judul_buku'            => $request->judul_buku ,
                 'tahun_terbit'          => $request->tahun_terbit,
                 'tempat_terbit'         => $request->tempat_terbit,
                 'stok_buku'             => $request->stok_buku,
                 'deskripsi'             => $request->deskripsi,
                 'kategori_id'           => $request->kategori_id,
                 'rak_id'                => $request->rak_id,
                 'penulis_id'            => $request->penulis_id,
                 'penerbit_id'           => $request->penerbit_id
        ]);

        // $buku = buku::find($request->buku_id);

        // $buku->jumlah_buku_dipinjam  -= $request->stok_buku;
        // $buku->save();
 
        return redirect(route('buku.index'))->with(['success' => 'Buku Baru Ditambahkan!']);
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
        $buku = buku::where('id',$id)->first();
        $kategori = kategori::all();
        $rak = rak::all();
        $penulis = penulis::all();
        $penerbit = penerbit::all();
        
        return view('buku.edit',compact('buku','kategori', 'rak', 'penulis', 'penerbit'));
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
            'cover'              => 'required',
            'isbn_issn'          => 'required',
            'judul_buku'         => 'required',
            'tahun_terbit'       => 'required',
            'tempat_terbit'      => 'required',
            'stok_buku'          => 'required',
            'deskripsi'          => 'required',
            'kategori_id'        => 'required',
            'rak_id'             => 'required',
            'penulis_id'         => 'required',
            'penerbit_id'        => 'required',
            ]);

            $file = $request->file('cover');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'data_file';
		    $file->move($tujuan_upload,$nama_file);
            // return dd($file);
            
            $buku= buku::find($id);
            $buku->update([
                 'cover'                 => $nama_file,    
                 'isbn_issn'             => $request->isbn_issn,
                 'judul_buku'            => $request->judul_buku ,
                 'tahun_terbit'          => $request->tahun_terbit,
                 'tempat_terbit'         => $request->tempat_terbit,
                 'stok_buku'             => $request->stok_buku,
                 'deskripsi'             => $request->deskripsi,
                 'kategori_id'           => $request->kategori_id,
                 'rak_id'                => $request->rak_id,
                 'penulis_id'            => $request->penulis_id,
                 'penerbit_id'           => $request->penerbit_id
        ]);

        // $buku = buku::find($request->buku_id);

        // $buku->jumlah_buku_dipinjam  -= $request->stok_buku;
        // $buku->save();

    return redirect(route('buku.index'))->with(['success' => 'Buku Berhasil Diubah!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        buku::where('id', $id)->delete();
        return redirect(route('buku.index'))->with(['success' => 'Buku Dihapus!']); 
    }
}
