<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produk = Produk::all();
        $posts = Produk::orderBy('id', 'desc')->paginate(6);
        return view('admin.produk', compact('produk'))->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
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
        $image_name = '';
        if ($request->file('foto')) {
            $image_name = $request->file('foto')->store('images', 'public');
        }
        //validasi data
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
            'foto' => 'required',
            ]);
        $produk = new Produk;
        $produk->nama = $request->get('nama');
        $produk->harga = $request->get('harga');
        $produk->keterangan = $request->get('keterangan');
        $produk->foto = $image_name;
        $produk->save();

        return redirect()->route('produk.index')
            ->with('success', 'Produk Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $produk = Produk::find($id);
        return view('admin.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $image_name = '';
        if ($request->file('foto')) {
            $image_name = $request->file('foto')->store('images', 'public');
        }
        //validasi data
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
            'foto' => 'required',
            ]);
            $produk = new Produk;
            $produk->nama = $request->get('nama');
            $produk->harga = $request->get('harga');
            $produk->keterangan = $request->get('keterangan');
            $produk->foto = $image_name;
            $produk->save();

            Transaksi::find($id)->update($request->all());
        
            return redirect()->route('produk.index')->with('success', 'Produk Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $produk = Produk::find($id)->delete();
        return redirect()->route('produk.index')->with('success', 'data berhasil dihapus');
    }
}
