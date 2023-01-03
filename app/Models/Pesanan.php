<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    // ini konenksi antara pesanan ke user
    public function user()
    {
        return $this->belongsTo('App/User', 'User_id', 'id');
    }
    // ini konenksi antara pesanan ke pesanan_detail
    public function pesanan_detail()
    {
        return $this->hasMany('App/PesananDetail', 'Pesanan_id', 'id');
    }
}
