@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header fw-bold text-primary">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('customer.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama Customer</label>
                    <input type="text" class="form-control" name="customer_name" placeholder="Masukkan Nama Customer">
                </div>
                <div class="mb-3">
                    <label for="">No Telpon</label>
                    <input type="number" class="form-control" name="phone" placeholder="Masukkan No Telpon">
                </div>
                <div class="mb-3">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="address" placeholder="Masukkan Alamat">
                </div>
                <button href="" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
