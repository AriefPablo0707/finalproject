<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = pelanggan::all();
        return view('pelanggan.index', ["pelanggan" => $pelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pelanggan.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|min:4',
            'alamat_pelanggan' => 'required',
        ]);
        
        $pelanggan = new pelanggan;
 
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->alamat_pelanggan = $request->alamat_pelanggan;
        
        $pelanggan->save();

        return redirect('pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelanggan = pelanggan::find($id)
        return view('pelanggan.show', ['pelanggan' => $pelanggan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelanggan = pelanggan::find($id)
        return view('pelanggan.edits', ['pelanggan' => $pelanggan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required|min:4',
            'alamat_pelanggan' => 'required',
        ]);

        $pelanggan = pelanggan::find($id);
 
        $pelanggan->nama_pelanggan = $request['nama_pelanggan']
        $pelanggan->alamat_pelanggan['alamat_pelanggan']
 
        $pelanggan->save();

        return redirect('/pelanggan')
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = pelanggan::find($id);
        $pelanggan->delete();
        return redirect('/pelanggan')
    }
}
