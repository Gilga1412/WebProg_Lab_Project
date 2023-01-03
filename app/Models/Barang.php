<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    // ini konenksi antara Barang ke pesanan_detail
    public function pesanan_detail()
    {
        return $this->hasMany('App/PesananDetail', 'Barang_id', 'id');
    }
}
