@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header fw-bold text-primary">Tambah User</h3>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
                <button href="" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
