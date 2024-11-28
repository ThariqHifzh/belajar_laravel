@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header fw-bold text-primary">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('order.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="">No Transaksi</label>
                            <input type="text" class="form-control" name="order_code" value="{{ $order_code ?? '' }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Order</label>
                            <input type="date" class="form-control" name="order_date">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="">Nama Pelanggan</label>
                            <select name="id_customer" class="form-control" id="">
                                <option value="">-- Pilih Customer --</option>
                                @foreach ($customers as $cus )
                                <option value="{{ $cus->id }}">{{ $cus->customer_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" name="order_end_date">
                        </div>
                    </div>
                </div>
                <div class="mb-3" align="right">
                    <button class="btn btn-sm btn-warning mt-3 add-row">Tambah Baris</button>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Paket</th>
                                <th>Qty</th>
                                <th>Harga</th>
                                <th>Sub Total</th>
                            </tr>
                        </thead>
                        <tbody class="tbody-parent">
                            <tr>
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td> --}}
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button href="" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </div>
@endsection
