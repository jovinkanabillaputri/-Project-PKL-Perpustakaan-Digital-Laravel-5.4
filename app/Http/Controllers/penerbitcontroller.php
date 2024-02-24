<?php

namespace App\Http\Controllers;
use App\penerbit;

use Illuminate\Http\Request;

class penerbitcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $penerbit =penerbit::orderBy('created_at', 'DESC')->paginate(10);

        return view('penerbit.index', compact('penerbit'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("penerbit.create"); 
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
            'nama_penerbit'          =>  'required|string|max:150|unique:penerbit' ,
        ]);

        penerbit::create([    
            'nama_penerbit'             => $request->nama_penerbit,
            ]);

            return redirect(route('penerbit.index'))->with(['success' => 'Penerbit Baru Ditambahkan!']);
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
        $penerbit = penerbit::find($id)->first();
        return view('penerbit.edit', compact('penerbit')); 
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
        $penerbit = penerbit::find($id);
        $penerbit->update($request->all());

    return redirect(route('penerbit.index'))->with(['success' => 'Penerbit Diperbaharui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        penerbit::where('id', $id)->delete();
        return redirect(route('penerbit.index'))->with(['success' => 'Penerbit Dihapus!']); 
    }
}
