<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PiknikSyahdu;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data pemesanan
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'time' => 'required|string',
        ]);

        // Simpan data pemesanan ke dalam database
        PiknikSyahdu::create([
            'nama_pelanggan' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->phone,
            'start_date' => $request->time,
        ]);

        // Beri respons ke client
        return response()->json(['message' => 'Pemesanan berhasil disimpan.']);
    }
}
