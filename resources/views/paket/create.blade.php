@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header fw-bold text-primary">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('service.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama Paket</label>
                    <input type="text" class="form-control" name="service_name" placeholder="Masukkan Nama Paket">
                </div>
                <div class="mb-3">
                    <label for="">Harga</label>
                    <input type="number" class="form-control" name="price" placeholder="Masukkan Harga">
                </div>
                <div class="mb-3">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="description" placeholder="Masukkan Deskripsi">
                </div>
                <button href="" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
