<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey ='id';

    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'no_hp',
        'harga',
        'jumlah_barang',
        'total_harga',
        'product_id',
    ];
    public function product()
    {
        return $this->belongsTo(Produk::class);
    }
}
