<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('kapcsolat');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'content' => 'required|string|min:10',
        ]);

        Message::create($validated);

        return redirect()->route('kapcsolat')->with('success', 'Üzenetedet sikeresen elküldtük!');
    }
}
