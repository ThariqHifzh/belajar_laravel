@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header fw-bold text-primary">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <div class="mb-3" align="right">
                <a href="{{ route('service.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Paket</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $key => $val)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->service_name }}</td>
                            <td>{{ 'Rp ' . number_format($val->price, 0, '.', ',') }}</td>
                            <td>{{ $val->description }}</td>
                            <td>
                                <a href="{{ route('service.edit', $val->id) }}" class="btn btn-icon btn-warning"><i
                                        class="tf-icons bx bx-show bx-22px"></i></a>
                                <form method="post" action="{{ route('service.destroy', $val->id) }}" class="d-inline">
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
