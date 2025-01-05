<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Logika untuk mengirim email atau menyimpan pesan
        Mail::raw($validated['message'], function ($message) use ($validated) {
            $message->to('admin@banksampah.com')
                ->subject('Pesan dari ' . $validated['name'])
                ->replyTo($validated['email']);
        });

        return redirect()->back()->with('success', 'Pesan Anda telah dikirim.');
    }
}