<?php

namespace App\Http\Controllers;

use App\Models\Szerelo;
use App\Models\Hely;
use App\Models\Munkalap;

class DatabaseController extends Controller
{
    public function index()
    {
        $szerelok = Szerelo::withCount('munkalapok')->get();
        $munkalapok = Munkalap::with(['szerelo', 'hely'])->orderBy('bedatum', 'desc')->limit(20)->get();
        $helyek = $helyek = $helyek = Hely::orderBy('az')->paginate(25);

        return view('adatbazis.index', compact('szerelok', 'munkalapok', 'helyek'));
    }
}
