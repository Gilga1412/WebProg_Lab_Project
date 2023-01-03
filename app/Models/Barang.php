<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    // ini konenksi antara Barang ke pesanan_detail
    public function pesanan_detail()
    {
        return $this->hasMany('App/PesananDetail', 'barangs_id', 'id');
    }
}
