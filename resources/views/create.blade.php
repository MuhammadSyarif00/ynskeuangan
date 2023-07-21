@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tambah Catatan Keuangan
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach    
                        @endif

                        <form action="{{ route('store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" placeholder="keterangan">
                            </div>
                            <div class="form-group">
                                <label>Nominal</label>
                                <input type="number" name="nominal" class="form-control" placeholder="nominal">
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" placeholder="tanggal">
                            </div>
                            <div class="form-group">
                                <label>Item</label>
                                <input type="number" name="id_item" class="form-control" placeholder="id_item">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection