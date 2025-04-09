<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|min:4',
                'email' => 'required|email',
                'phone' => 'nullable|string',
                'subject' => 'required|min:4',
                'message' => 'required',
            ]);

            $message = ContactMessage::create($validated);

            // Enviar correo
            //Mail::to('majesticcustomjewelers@gmail.com')->send(new ContactFormMail($message));

            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error: '.$e->getMessage()
            ], 500);
        }
    }
}
