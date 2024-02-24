<?php

namespace App\Http\Controllers;
use App\rak;
use Illuminate\Http\Request;

class rakcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rak =rak::orderBy('created_at', 'DESC')->paginate(10);

        return view('rak.index', compact('rak')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("rak.create");  
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
            'lokasi_rak' => 'required|string|max:150|unique:rak' 
        ]);


        rak::create($request->all());

        return redirect(route('rak.index'))->with(['success' => 'Rak Baru Ditambahkan!']);

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
        $rak= rak::find($id)->first();
        return view('rak.edit', compact('rak')); 
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
        $rak= rak::find($id);
        $rak->update($request->all());

    return redirect(route('rak.index'))->with(['success' => 'Rak Diperbaharui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        rak::where('id', $id)->delete();
        return redirect(route('rak.index'))->with(['success' => 'Rak Dihapus!']);
    }
}
