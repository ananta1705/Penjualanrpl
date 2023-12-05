<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    protected $primaryKey = 'idbarang';
    protected $guarded= [];
 
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'idbarang');
    }
}
