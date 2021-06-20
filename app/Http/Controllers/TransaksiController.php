<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaksi = Transaksi::all();
        $posts = Transaksi::orderBy('id', 'desc')->paginate(6);
        return view('transaksi.daftar', compact('transaksi'))->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();
        return view('transaksi.transaksi',compact('produk'));
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
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'jumlah_barang' => 'required',
            'total_harga' => 'required',
        ]);

        Transaksi::create($request->all());

        return redirect()->route('user')
        ->with('succes', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $artikel)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Transaksi = Transaksi::find($id);
        return view('transaksi.edit', compact('Transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'jumlah_barang' => 'required',
            'total_harga' => 'required',
        ]);
        Transaksi::find($id)->update($request->all());
        
        return redirect()->route('transaksi.index')->with('success', 'Penjualan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Transaksi::find($id)->delete();
        return redirect()->route('transaksi.index')->with('success', 'data berhasil dihapus');
    }
    
    public function cetak_pdf()
    {
        $transaksi = Transaksi::all();
        $pdf = PDF::loadview('cetak-pdf',['transaksi'=>$transaksi]);
        return $pdf->stream();
    }
}
