<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YNS CENTER</title>
</head>
<body>
    @if (Auth::check())
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endif
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Posisi</th>
            <th>Nama</th>
            <th>Nominal</th>
            <th>Actions</th>
        </tr>
        @foreach ($keuangans as $keuangan)
        <tr>
            <td>{{ $keuangan->id }}</td>
            <td>{{ $keuangan->tanggal }}</td>
            <td>{{ $keuangan->posisi }}</td>
            <td>{{ $keuangan->keterangan }}</td>
            <td>{{ $keuangan->nominal }}</td>
            <td>
                <form action="{{route('edit', $keuangan)}}" method="get">
                    @csrf
                    <button type="submit">Edit</button>
                </form>
                <!--<form action="{{route('delete', $keuangan)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
</form -->
            </td>
        </tr>
        @endforeach
    </table>

    Current page: {{ $keuangans->currentPage() }} <br>
    Total page: {{ $keuangans->total() }} <br>
    Data per page: {{ $keuangans->perPage() }} <br>

    {{ $keuangans->links('pagination::bootstrap-4') }}
</body>
</html>