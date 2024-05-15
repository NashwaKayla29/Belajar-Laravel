<?php

namespace App\Http\Controllers;
use App\Models\Merk;
class MerkController extends Controller
{
    public function menampilkan()
    {
        $merk = Merk::all();
        return view('merks\index', compact('merk'));
    }
    public function show($id)
    {
        $merk = Merk::findOrFail($id);
        return view('merks.show', compact('merk'));
    }
}
