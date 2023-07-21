@extends('layouts.app', ['page' => __('Item'), 'pageSlug' => 'item'])

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Daftar Item</h4>
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

        <form action="{{ route('item.update', $item) }}" method="post">
            @method('patch')
            @csrf
            <div class="form-group">
                <label>Nama Item</label>
                <input type="text" name="nama" class="form-control" value="{{$item->nama}}">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                    <option value="Kas Masuk" 
                    @if ($item->kategori == 'Kas Masuk')
                      {{ " selected" }}
                    @endif
                      >Kas Masuk</option>
                    <option value="Kas Keluar" 
                    @if ($item->kategori == 'Kas Keluar')
                      {{ " selected" }}
                    @endif
                    >Kas Keluar</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>

        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection