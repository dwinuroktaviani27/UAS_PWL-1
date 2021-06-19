@extends('layouts.layout_admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Daftar Transaksi Penjualan</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-primary" href="/cetak-pdf"> Cetak PDF</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah Barang</th>
        <th>Total Harga</th>
        <th width="280px">Action</th>
    </tr>
    <?php $no = 1; ?>
    @foreach ($transaksi as $Transaksi)
    <tr>
        <td scope="row">{{ $no }}</td>
        <td>{{$Transaksi->id}}</td>
        <td>{{ $Transaksi->nama }}</td>
        <td>{{ $Transaksi->alamat }}</td>
        <td>{{ $Transaksi->no_hp }}</td>
        <td>{{ $Transaksi->nama_barang }}</td>
        <td>{{ $Transaksi->harga }}</td>
        <td>{{ $Transaksi->jumlah_barang }}</td>
        <td>{{ $Transaksi->total_harga }}</td>
        <td>
            <form action="{{ route('transaksi.destroy',$Transaksi->id) }}" method="POST">

                <a class="btn btninfo" href="{{ route('transaksi.show',$Transaksi->id) }}">Show</a>
                <a class="btn btnprimary" href="{{ route('transaksi.edit',$Transaksi->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    <?php $no++; ?>
    @endforeach
</table>
@endsection