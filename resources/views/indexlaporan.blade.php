
@extends('layouts.app', ['page' => __('Laporan'), 'pageSlug' => 'laporan'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Rekapitulasi Laporan Kas Masuk</h4>
      </div>
      <div class="card-tools">
        
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th class="text-center">Tahun</th>
                <th class="text-center">Jan</th>
                <th class="text-center">Feb</th>
                <th class="text-center">Mar</th>
                <th class="text-center">Apr</th>
                <th class="text-center">Mei</th>
                <th class="text-center">Jun</th>
                <th class="text-center">Jul</th>
                <th class="text-center">Ags</th>
                <th class="text-center">Sep</th>
                <th class="text-center">Okt</th>
                <th class="text-center">Nop</th>
                <th class="text-center">Des</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($masuks as $masuk)
            <tr>
                <td class="text-center">{{ $masuk->tahun }}</td>
                <td class="text-right">{{ number_format($masuk->jan,0,',','.') }}</td>
                <td class="text-right">{{ number_format($masuk->feb,0,',','.') }}</td>
                <td class="text-right">{{ number_format($masuk->mar,0,',','.') }}</td>
                <td class="text-right">{{ number_format($masuk->apr,0,',','.') }}</td>
                <td class="text-right">{{ number_format($masuk->mei,0,',','.') }}</td>
                <td class="text-right">{{ number_format($masuk->jun,0,',','.') }}</td>
                <td class="text-right">{{ number_format($masuk->jul,0,',','.') }}</td>
                <td class="text-right">{{ number_format($masuk->ags,0,',','.') }}</td>
                <td class="text-right">{{ number_format($masuk->sep,0,',','.') }}</td>
                <td class="text-right">{{ number_format($masuk->okt,0,',','.') }}</td>
                <td class="text-right">{{ number_format($masuk->nop,0,',','.') }}</td>
                <td class="text-right">{{ number_format($masuk->des,0,',','.') }}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Rekapitulasi Laporan Kas Keluar</h4>
      </div>
      <div class="card-tools">
        
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th class="text-center">Tahun</th>
                <th class="text-center">Jan</th>
                <th class="text-center">Feb</th>
                <th class="text-center">Mar</th>
                <th class="text-center">Apr</th>
                <th class="text-center">Mei</th>
                <th class="text-center">Jun</th>
                <th class="text-center">Jul</th>
                <th class="text-center">Ags</th>
                <th class="text-center">Sep</th>
                <th class="text-center">Okt</th>
                <th class="text-center">Nop</th>
                <th class="text-center">Des</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($keluars as $keluar)
            <tr>
                <td class="text-center">{{ $keluar->tahun }}</td>
                <td class="text-right">{{ number_format($keluar->jan,0,',','.') }}</td>
                <td class="text-right">{{ number_format($keluar->feb,0,',','.') }}</td>
                <td class="text-right">{{ number_format($keluar->mar,0,',','.') }}</td>
                <td class="text-right">{{ number_format($keluar->apr,0,',','.') }}</td>
                <td class="text-right">{{ number_format($keluar->mei,0,',','.') }}</td>
                <td class="text-right">{{ number_format($keluar->jun,0,',','.') }}</td>
                <td class="text-right">{{ number_format($keluar->jul,0,',','.') }}</td>
                <td class="text-right">{{ number_format($keluar->ags,0,',','.') }}</td>
                <td class="text-right">{{ number_format($keluar->sep,0,',','.') }}</td>
                <td class="text-right">{{ number_format($keluar->okt,0,',','.') }}</td>
                <td class="text-right">{{ number_format($keluar->nop,0,',','.') }}</td>
                <td class="text-right">{{ number_format($keluar->des,0,',','.') }}</td>
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
