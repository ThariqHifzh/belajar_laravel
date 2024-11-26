@extends('kalkulator.index')
@section('content')
<div class="text-center">
    <h5 class="fw-bold">Data Pengguna</h5>
    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary mb-3">Tambah User</a>
</div>
<table class="table table-bordered me-3 ms-3" border="1" width="50%">
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
            <td class="d-flex"><a class="btn btn-sm btn-warning me-2" href="{{ route('user.edit', $user->id) }}">Edit</a>
            {{-- Get, Delete --}}
            {{-- <a class="btn btn-sm btn-danger" href="{{ route('delete', $user->id) }}" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Delete</a> --}}
            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
