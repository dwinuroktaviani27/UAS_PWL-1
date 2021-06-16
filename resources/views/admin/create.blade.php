@extends('layouts.layout_admin')
@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Produk
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
                <form method="post" action="{{ route('produk.store') }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="formcontrol" id="nama" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="formcontrol" id="harga" aria-describedby="harga">
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="formcontrol" id="keterangan" aria-describedby="keterangan">
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="formcontrol" id="foto" aria-describedby="foto">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection