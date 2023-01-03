<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;
    // ini konenksi antara pesanan_detail ke barang
    public function barang()
    {
        return $this->belongsTo('App/Barang', 'barangs_id', 'id');
    }
    // ini konenksi antara pesanan_detail ke pesanan
    public function pesanan()
    {
        return $this->belongsTo('App/Pesanan', 'Pesanan_id', 'id');
    }
}
