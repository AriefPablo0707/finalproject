<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = order::all();
        return view('order.index', ["order" => $order]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('order.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required|min:4',
            'tanggal_pesanan' => 'required',
        ]);
        
        $order = new order;
 
        $order->id_pelanggan = $request->id_pelanggan;
        $order->'tanggal_pesanan' = $request->tanggal_pesanan;
        
        $order->save();

        return redirect('order');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = order::find($id)
        return view('order.show', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = order::find($id)
        return view('order.edits', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_pelanggan' => 'required|min:4',
            'tanggal_pesanan' => 'required',
        ]);

        $order = order::find($id);
 
        $order->id_pelanggan = $request['nama_pelanggan']
        $order->['tanggal_pesanan']
 
        $order->save();

        return redirect('/order')
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = order::find($id);
        $order->delete();
        return redirect('/order')
    }
}