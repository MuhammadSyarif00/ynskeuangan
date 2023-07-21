@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-8">
                            Daftar Catatan Keuangan
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Posisi</th>
                                <th>Nama</th>
                                <th>Nominal</th>
                                <th width="20%">Actions</th>
                            </tr>
                            @foreach ($keuangans as $keuangan)
                            <tr>
                                <td>{{ $keuangan->id }}</td>
                                <td>{{ date('d-m-Y', strtotime($keuangan->tanggal)) }}</td>
                                <td>{{ $keuangan->posisi }}</td>
                                <td>{{ $keuangan->keterangan }}</td>
                                <td>{{ $keuangan->nominal }}</td>
                                <td>
                                    <form action="{{ route('edit', $keuangan) }}" method="get">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-warning">Edit</button>
                                    </form>
                                    <form action="{{ route('keuangan.delete', $keuangan) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    Current page: {{ $keuangans->currentPage() }} <br>
    Total page: {{ $keuangans->total() }} <br>
    Data per page: {{ $keuangans->perPage() }} <br>

    {{ $keuangans->links('pagination::bootstrap-4') }}

@endsection