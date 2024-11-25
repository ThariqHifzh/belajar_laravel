@extends('kalkulator.index')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header"><h5>{{ $title ?? '' }}</h5></div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="" align="left">Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukan nama Anda">
                        </div>
                        <div class="row mb-3">
                            <label for="" align="left">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukan Email Anda">
                        </div>
                        <div class="row mb-3">
                            <label for="" align="left">Password</label>
                            <input type="text" name="password" class="form-control" placeholder="Masukan Password">
                        </div>
                        <button class="btn btn-sm btn-primary mt-3">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
