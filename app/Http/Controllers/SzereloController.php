<?php

namespace App\Http\Controllers;

use App\Models\Szerelo;
use Illuminate\Http\Request;

class SzereloController extends Controller
{
    public function index()
    {
        $szerelok = Szerelo::all();
        return view('szerelos.index', compact('szerelok'));
    }

    public function create()
    {
        return view('szerelos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nev' => 'required|string|max:255',
            'kezdev' => 'required|integer|min:1950|max:' . date('Y'),
        ]);

        Szerelo::create($data);

        return redirect()->route('szerelos.index')->with('success', 'Szerelő hozzáadva.');
    }

    public function edit(Szerelo $szerelo)
    {
        return view('szerelos.edit', compact('szerelo'));
    }

    public function update(Request $request, Szerelo $szerelo)
    {
        $data = $request->validate([
            'nev' => 'required|string|max:255',
            'kezdev' => 'required|integer|min:1950|max:' . date('Y'),
        ]);

        $szerelo->update($data);

        return redirect()->route('szerelos.index')->with('success', 'Szerelő módosítva.');
    }

    public function destroy(Szerelo $szerelo)
    {
        $szerelo->delete();
        return redirect()->route('szerelos.index')->with('success', 'Szerelő törölve.');
    }
}
