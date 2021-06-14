@extends('layouts.layout_admin')
@section('content')

<div class="container mt-5">

 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">Tambah Transaksi
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
 <form method="post" action="{{ route('transaksi.store') }}" id="myForm" enctype="multipart/form-data">
 @csrf
 <div class="form-group">
 <label for="id">ID</label>
 <input type="text" name="id" class="formcontrol" id="Nim" aria-describedby="Nim" >
 </div>
 <div class="form-group">
 <label for="nama">Nama</label>
 <input type="text" name="nama" class="formcontrol" id="Nim" aria-describedby="Nim" >
 </div>
 <div class="form-group">
 <label for="alamat">Alamat</label>
 <input type="text" name="alamat" class="formcontrol" id="Nama" aria-describedby="Nama" >
 </div>

 <div class="form-group">
 <label for="no_hp">No HP</label>
 <input type="text" name="no_hp" class="formcontrol" id="foto" aria-describedby="Nama" >
 </div>

 <div class="form-group">
 <label for="nama_barang">Nama Barang</label>
 <input type="text" name="nama_barang" class="formcontrol" id="foto" aria-describedby="Nama" >
 </div>

 <div class="form-group">
 <label for="harga">Harga</label>
 <input type="text" name="harga" class="formcontrol" id="foto" aria-describedby="Nama" >
 </div>
 
 <div class="form-group">
 <label for="jumlah_barang">Jumlah Barang</label>
 <input type="jumlah_barang" name="jumlah_barang" class="formcontrol" id="Jurusan" aria-describedby="Jurusan" >
 </div>
 <div class="form-group">
 <label for="total_harga">Total Harga</label>

 <input type="No_Handphone" name="total_harga" class="formcontrol" id="No_Handphone" aria-describedby="No_Handphone" >
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection
