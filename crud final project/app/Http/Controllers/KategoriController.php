<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = kategori::all();
        return view('order.index', ["kategori" => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('kategori.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|min:4',
            'nama_kategori' => 'required',
        ]);
        
        $kategori = new kategori;
 
        $kategori->id_kategori = $request->id_kategori;
        $kategori->'nama_kategori' = $request->nama_kategori;
        
        $kategori->save();

        return redirect('kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = kategori::find($id)
        return view('kategori.show', ['kategori' => $kategori]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = kategori::find($id)
        return view('order.edits', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_kategori' => 'required|min:4',
            'nama_kategori' => 'required',
        ]);

        $kategori = kategori::find($id);
 
        $kategori->id_kategori = $request['id_kategori']
        $kategori->['nama_kategori']
 
        $order->save();

        return redirect('/kategori')
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = kategori::find($id);
        $kategori->delete();
        return redirect('/kategorir')
    }
}