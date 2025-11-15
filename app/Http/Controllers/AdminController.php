<?php

namespace App\Http\Controllers;

use App\Models\Szerelo;
use App\Models\Munkalap;
use App\Models\Hely;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $szereloCount = Szerelo::count();
        $munkalapCount = Munkalap::count();
        $helyCount = Hely::count();
        $userCount = User::count();

        return view('admin.index', compact('szereloCount', 'munkalapCount', 'helyCount', 'userCount'));
    }
}
