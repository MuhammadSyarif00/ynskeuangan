<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Keuangan;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Keuangan::paginate(2);
        return view('indexitem', ['items' => $items]);
    }

    public function show($id)
    {
        $item = Keuangan::find($id);
        return view('showitem', ['item' => $item]);
    }

    public function create()
    {
        return view('createitem');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required'
        ]);

        Item::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori
        ]);

        return Redirect::route('indexitem');
    }

    public function edit(Item $item)
    {
        return view('edititem', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $item->update([
            'nama' => $request->nama,
            'kategori' => $request->kategori
        ]);

        return Redirect::route('indexitem');
    }

    public function delete(Item $item)
    {
        $item->delete();

        return Redirect::route('indexitem');
    }
}
