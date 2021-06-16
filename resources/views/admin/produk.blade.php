@extends('layouts.layout_admin')
@section('content')
<!--Main content-->
<section class="container margin-bottom-50">
  <div class="row">
    <h2 class="col-lg-12 text-center text-uppercase margin-bottom-30">Donec pede justo fringilla ulputate eget</h2>
    <p class="col-lg-12 text-center margin-bottom-30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
    

    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Daftar Transaksi Penjualan</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-primary" href="{{ route('produk.create') }}"> Tambah Data</a>
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
        <th>Foto</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Keterangan</th>
        <th width="280px">Action</th>
    </tr>
    <?php $no = 1; ?>
    @foreach ($produk as $Produk)
    <tr>
        <td scope="row">{{ $no }}</td>
        <td><img src="{{asset('storage/'.$Produk->foto)}}" width="200" height="150"></td>
        <td>{{ $Produk->nama }}</td>
        <td>{{ $Produk->harga }}</td>
        <td>{{ $Produk->keterangan }}</td>
        <td>
            <form action="{{ route('produk.destroy',$Produk->id) }}" method="POST">

                <a class="btn btnprimary" href="{{ route('produk.edit',$Produk->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    <?php $no++; ?>
    @endforeach
    </table>


  </div>
</section>

@endsection