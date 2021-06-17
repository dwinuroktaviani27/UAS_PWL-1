<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body onload="window.print();">
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }   
    </style>
    <center>
    <h4>Data Laporan Transaksi Penjualan</h4>
    </center>
    <table class='table table-bordered'>
    <tr>
    <thead>
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
    </thead>
    <tbody>
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
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>