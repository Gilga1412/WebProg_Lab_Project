<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;



class HomeController extends Controller
{

    public function home() {

        //mengatur berapa jumlah page
        $barangs = Barang::paginate(10);
        //
        return view('Home', ['title' => 'Home'],compact('barangs'));
    }
}
