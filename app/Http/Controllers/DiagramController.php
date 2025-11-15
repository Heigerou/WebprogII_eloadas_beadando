<?php

namespace App\Http\Controllers;

use App\Models\Munkalap;
use App\Models\Hely;

class DiagramController extends Controller
{
    public function index()
    {
        $stats = Hely::withCount('munkalapok')->get();

        $labels = $stats->pluck('telepules')->toArray();
        $values = $stats->pluck('munkalapok_count')->toArray();

        return view('diagram', [
            'labels' => json_encode($labels),
            'values' => json_encode($values),
        ]);
    }
}
