<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YNS CENTER</title>
</head>

<body>
    <form action="{{ route('update', $keuangan) }}" method="post">
    @method('patch')    
    @csrf
        <input type="text" name="keterangan" value="{{$keuangan->keterangan}}">
        <input type="number" name="nominal" value="{{$keuangan->nominal}}">
        <input type="date" name="tanggal" value="{{$keuangan->tanggal}}">
        <input type="text" name="posisi" value="{{$keuangan->posisi}}">
        <input type="number" name="id_item" value="{{$keuangan->id_item}}">
        <button type="submit">Update</button>
    </form>
</body>
</html>