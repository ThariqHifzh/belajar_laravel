@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header fw-bold text-primary">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <div class="mb-3" align="right">
                <a href="{{ route('order.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Kode Transaksi</th>
                        <th>Tanggal Order</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $val)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->customer->customer_name }}</td>
                            <td>{{ $val->order_code }}</td>
                            <td>{{ $val->order_date }}</td>
                            <td>{{ $val->order_end_date }}</td>
                            <td>{{ $val->order_status }}</td>
                            <td>
                                <a href="{{ route('order.edit', $val->id) }}" class="btn btn-icon btn-warning"><i
                                        class="tf-icons bx bx-pencil bx-22px"></i></a>
                                <form method="post" action="{{ route('order.destroy', $val->id) }}" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-icon btn-danger"><i
                                            class="tf-icons bx bx-trash bx-22px"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
