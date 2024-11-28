<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\ServerBag;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('customer')->get();
        $title = "Data Order";

        return view('order.index', compact('orders', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Transaksi';
        $order = Order::get()->last();
        $id_order = $order->id ?? '';
        $id_order++;
        $order_code = "ATH". "/".date('dmY'). "/".sprintf("%03s", $id_order);
        $customers = Customer::get();
        $services = Service::get();

        return view('order.create', compact('title', 'order_code', 'customers', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create($request->all());
        Alert::success('Success', 'Berhasil Ditambah');
        return redirect()->to('order');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Order";
        $order = Order::find($id);
        return view('order.edit', compact('title', 'order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::find($id);

        // $order->id_customer = $request->id_customer;
        $order->order_code = $request->order_code;
        $order->order_date = $request->order_date;
        $order->order_end_date = $request->order_end_date;
        $order->order_status = $request->order_status;
        $order->save();

        Alert::success('Success', 'Data Berhasil Diubah');
        return redirect()->to('order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->to('order');
    }

    public function delete($id)
    {
        $order = Order::find($id)->delete();
        return redirect()->to('order');
    }
}