
@extends('layouts.app', ['page' => __('Pencatatan'), 'pageSlug' => 'keuangan'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Pencatatan Keuangan</h4>
      </div>
      <div class="card-tools">
        <form action="{{ route('keuangan.create') }}" method="get">
            @csrf
            <button type="submit" class="btn btn-info">{{ __('Tambah') }}</button>
        </form>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>Tanggal</th>
                <th>Nominal</th>
                <th>Keterangan</th>
                <th>Item</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($keuangans as $keuangan)
            <tr>
                <td>{{ date('d-m-Y', strtotime($keuangan->tanggal)) }}</td>
                <td class="text-right">{{ number_format($keuangan->nominal,0,',','.') }}</td>
                <td>{{ $keuangan->keterangan }}</td>
                <td>{{ $keuangan->item->nama }}</td>
                <td class="text-center">
                    <div class="row">
                        <form action="{{ route('keuangan.edit', $keuangan) }}" method="get">
                            @csrf
                            <button type="submit" rel="tooltip" title="" class="btn btn-warning" data-original-title="Ubah Item">
                                <i class="tim-icons icon-pencil"></i> Ubah
                            </button>
                        </form>
                        <form action="{{ route('keuangan.delete', $keuangan) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" rel="tooltip" title="" class="btn btn-danger" data-original-title="Hapus Item">
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
