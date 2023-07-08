<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YNS CENTER</title>
</head>

<body>
    <form action="{{ route('update', $item) }}" method="post">
    @method('patch')    
    @csrf
        <input type="text" name="nama" value="{{$item->nama}}">
        <input type="text" name="kategori" value="{{$item->kategori}}">
        <button type="submit">Update</button>
    </form>
</body>
</html>