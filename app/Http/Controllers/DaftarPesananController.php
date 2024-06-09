<?php

namespace App\Http\Controllers;

use App\Models\PiknikSyahdu;
use Illuminate\Http\Request;

class DaftarPesananController extends Controller
{
    public function index()
    {
        $orders = PiknikSyahdu::all();
        return view('orders.daftarPesanan', compact('orders'));
    }

    public function add()
    {
        return view('orders.add');
    }

    public function addsave(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'start_date' => 'required|date',
        ]);

        PiknikSyahdu::create($request->all());

        return redirect('/daftarPesanan')->with('success', 'Order created successfully.');
    }

    public function edit($id)
    {
        $order = PiknikSyahdu::find($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'start_date' => 'required|date',
        ]);

        $order = PiknikSyahdu::find($id);
        $order->update($request->all());

        return redirect('/daftarPesanan')->with('success', 'Order updated successfully.');
    }

    public function destroy($id)
    {
        $order = PiknikSyahdu::find($id);
        $order->delete();

        return redirect('/daftarPesanan')->with('success', 'Order deleted successfully.');
    }
}
