<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YNS CENTER</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach    
    @endif

    <form action="{{ route('store') }}" method="post">
        @csrf
        <input type="text" name="keterangan" placeholder="keterangan">
        <input type="number" name="nominal" placeholder="nominal">
        <input type="date" name="tanggal" placeholder="tanggal">
        <input type="text" name="posisi" placeholder="posisi">
        <input type="number" name="id_item" placeholder="id_item">
        <button type="submit">Add</button>
    </form>
</body>
</html>