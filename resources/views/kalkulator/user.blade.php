@extends('kalkulator.index')
@section('content')
<div class="text-center">
    <h5 class="fw-bold">Data Pengguna</h5>
    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary mb-3">Tambah User</a>
</div>
<table class="table table-bordered me-3 ms-3" border="1" width="100%">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a class="btn btn-sm btn-warning" href="{{ route('user.edit', $user->id) }}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
