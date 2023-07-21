
@extends('layouts.app', ['page' => __('Item'), 'pageSlug' => 'item'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Daftar Item</h4>
      </div>
      <div class="card-tools">
        <form action="{{ route('item.create') }}" method="get">
            @csrf
            <button type="submit" class="btn btn-fill btn-primary">{{ __('Tambah') }}</button>
        </form>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kategori }}</td>
                <td class="text-center">
                    <div class="row">
                        <form action="{{ route('item.edit', $item) }}" method="get">
                            @csrf
                            <button type="submit" rel="tooltip" title="" class="btn" data-original-title="Ubah Item">
                                <i class="tim-icons icon-pencil"></i> Ubah
                            </button>
                        </form>
                        <form action="{{ route('item.delete', $item) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" rel="tooltip" title="" class="btn" data-original-title="Hapus Item">
                                <i class="tim-icons icon-trash-simple"></i> Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
