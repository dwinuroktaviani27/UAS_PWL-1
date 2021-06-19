
            <h2>Daftar Transaksi Penjualan</h2>

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
    </tr>
    <?php $no++; ?>
    @endforeach
</table>
