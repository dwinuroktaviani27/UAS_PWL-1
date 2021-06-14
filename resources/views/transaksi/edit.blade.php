@extends('layouts.layout_admin')
@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Edit Penjualan
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('transaksi.update', $Transaksi->id) }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" class="formcontrol" id="id" value="{{ $Transaksi->id }}" ariadescribedby="id">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="formcontrol" id="nama" value="{{ $Transaksi->nama }}" ariadescribedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="formcontrol" id="alamat" value="{{ $Transaksi->alamat }}" ariadescribedby="alamat">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" name="no_hp" class="formcontrol" id="no_hp" value="{{ $Transaksi->no_hp }}" ariadescribedby="no_hp">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="formcontrol" id="nama_barang" value="{{ $Transaksi->nama_barang }}" ariadescribedby="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="harga">No HP</label>
                        <input type="text" name="harga" class="formcontrol" id="harga" value="{{ $Transaksi->harga }}" ariadescribedby="harga">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="text" name="jumlah_barang" class="formcontrol" id="jumlah_barang" value="{{ $Transaksi->jumlah_barang }}" ariadescribedby="jumlah_barang">
                    </div>
                    <div class="form-group">
                        <label for="total_harga">Total harga</label>

                        <input type="text" name="total_harga" class="formcontrol" id="total_harga" value="{{ $Transaksi->total_harga }}" ariadescribedby="total_harga">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection