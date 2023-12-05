<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index() {

        $trans= Transaksi::all();
        return view('transaksi.transaksi', compact('trans'));
    }

    public function create()
    {
        $barang = Barang::all();
        return view('transaksi.tambah', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = Barang::findOrFail($request->input('idbarang'));
        $jumlahbeli = $request->input('jumlahbeli');
        $jumlahbayar = $barang->hargabarang * $jumlahbeli;

        Transaksi::create([
            'idbarang' => $request->input('idbarang'),
            'tgltransaksi' => now(),
            'jumlahbeli' => $jumlahbeli,
            'jumlahbayar' => $jumlahbayar,
            'stokbarang' => $request->input('stokbarang'),
            'keterangan' => $request->input('keterangan'),
        ]);

        $barang = Barang::findOrFail($request->idbarang);
        $barang->jumalahbarang -= $request->jumlahbeli;
        $barang->save();
        return redirect('transaksi');
    }
}
