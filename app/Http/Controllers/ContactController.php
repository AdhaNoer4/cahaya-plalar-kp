<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'nullable|email|max:100',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to(env('MAIL_TO_ADDRESS', config('mail.from.address')))
            ->send(new ContactMail($data));

        return back()->with('success', 'Pesan berhasil dikirim! Kami akan menghubungi Anda segera.');
    }
}
