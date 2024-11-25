@extends('kalkulator.index')
{{-- block section --}}
@section('content')
    <form action="{{ route('store-tambah') }}"  class="mt-3" method="post">
        @csrf
        <label for="">Angka 1</label>
        <div class="col-sm-12">
            <input type="text" name="angka1" class="form-control" style="border-radius: 20px;" placeholder="Masukkan Angka 1">
        </div>
        +
        <br>
        <label for="">Angka 2</label>
        <div class="col-sm-12">
        <input type="text" name="angka2" class="form-control" style="border-radius: 20px;"  placeholder="Masukkan Angka 2">
        </div>
        <br>
        <button class="btn btn-sm btn-primary px-4" style="border-radius: 20px;">Proses</button>
    </form>

    <h5>Hasilnya Adalah : {{ $jumlah }}</h5>
@endsection
