@extends('layouts.app', ['page' => __('Pencatatan'), 'pageSlug' => 'keuangan'])

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Form Ubah Pencatatan</h4>
      </div>
      <div class="card-tools">
        
      </div>
      <div class="card-body">
        <div class="table-responsive">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach    
        @endif

        <form action="{{ route('keuangan.update', $keuangan) }}" method="post">
            @method('patch')
            @csrf
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" value="{{ $keuangan->tanggal }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Item</label>
                <select class="form-control" name="id_item">
                  @foreach ($items as $item)
                    <option value="{{ $item->id }}" 
                    @if($keuangan->id_item == $item->id)
                      {{ " selected" }}
                    @endif
                    >{{ $item->nama }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Nominal</label>
                <input type="number" name="nominal" value="{{ $keuangan->nominal }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" value="{{ $keuangan->keterangan }}" class="form-control">
            </div>
            <div class="form-group">
                <a href="{{ route('keuangan.index') }}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>

        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection