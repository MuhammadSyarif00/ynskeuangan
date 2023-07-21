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

        <form action="{{ route('item.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Nama Item</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Item">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                    <option value="Kas Masuk">Kas Masuk</option>
                    <option value="Kas Keluar">Kas Keluar</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>

        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection