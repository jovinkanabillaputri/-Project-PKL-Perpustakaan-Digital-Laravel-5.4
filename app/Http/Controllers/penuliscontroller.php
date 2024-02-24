<?php

namespace App\Http\Controllers;
use App\penulis;

use Illuminate\Http\Request;

class penuliscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis =penulis::orderBy('created_at', 'DESC')->paginate(10);

        return view('penulis.index', compact('penulis'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("penulis.create"); 
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
            'nama_penulis'          => 'required',
        ]);

        penulis::create([    
            'nama_penulis'             => $request->nama_penulis,
            ]);

            return redirect(route('penulis.index'))->with(['success' => 'Penulis Baru Ditambahkan!']);
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
        $penulis = penulis::find($id)->first();
        return view('penulis.edit', compact('penulis'));  
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
        $penulis = penulis::find($id);
        $penulis->update($request->all());

    return redirect(route('penulis.index'))->with(['success' =>'Penulis Diperbaharui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        penulis::where('id', $id)->delete();
        return redirect(route('penulis.index'))->with(['success' => 'Penulis Dihapus!']); 
    }
}
