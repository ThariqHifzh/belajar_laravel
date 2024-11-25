@extends('kalkulator.index')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-header">
                        <h5>{{ $title ?? '' }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12" >
                            <label for="" align="left">Nama</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name ?? '' }}">
                        </div>
                        <div class="col-sm-12">
                            <label for="" align="left">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email ?? '' }}">
                        </div>
                        <div class="col-sm-12">
                            <label for="" align="left">Password</label>
                            <input type="password" name="password" class="form-control" >
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
