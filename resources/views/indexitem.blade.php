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
            <th>Nama</th>
            <th>Kategori</th>
            <th>Actions</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kategori }}</td>
            <td>
                <form action="{{route('edititem', $item)}}" method="get">
                    @csrf
                    <button type="submit">Edit</button>
                </form>
                <form action="{{route('deleteitem', $item)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    Current page: {{ $items->currentPage() }} <br>
    Total page: {{ $items->total() }} <br>
    Data per page: {{ $items->perPage() }} <br>

    {{ $items->links('pagination::bootstrap-4') }}
</body>
</html>