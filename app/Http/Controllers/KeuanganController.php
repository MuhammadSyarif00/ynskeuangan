<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Keuangan;
use App\Models\Item;

class KeuanganController extends Controller
{
    public function index()
    {
        $keuangans = Keuangan::all()->sortByDesc("tanggal");
        return view('index',['keuangans' => $keuangans]);
    }

    public function create()
    {
        $items = Item::all();
        return view('create', ['items' => $items]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
            'nominal' => 'required',
            'tanggal' => 'required',
            'id_item' => 'required'
        ]);

        Keuangan::create([
            'keterangan' => $request->keterangan,
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
            'id_item' => $request->id_item
        ]);

        return Redirect::route('keuangan.index');
    }

    public function edit(Keuangan $keuangan)
    {
        $items = Item::all();
        return view('edit', ['keuangan' => $keuangan, 'items' => $items]);
    }

    public function update(Request $request, Keuangan $keuangan)
    {
        $keuangan->update([
            'keterangan' => $request->keterangan,
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
            'id_item' => $request->id_item
        ]);

        return Redirect::route('keuangan.index');
    }

    public function delete(Keuangan $keuangan)
    {
        $keuangan->delete();

        return Redirect::route('keuangan.index');
    }
}
