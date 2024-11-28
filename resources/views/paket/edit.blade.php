@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header fw-bold text-primary">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('service.update', $service->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama paket</label>
                    <input type="text" class="form-control" name="service_name" placeholder="Masukkan Nama"
                        value="{{ $service->service_name }}">
                </div>
                <div class="mb-3">
                    <label for="">Harga</label>
                    <input type="number" class="form-control" name="price" placeholder="Masukkan Email"
                        value="{{ $service->price }}">
                </div>
                <div class="mb-3">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="description" placeholder="Masukkan Password"
                        value="{{ $service->description }}">
                </div>
                <button href="" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
