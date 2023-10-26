<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan formulir kontak
    public function showContactForm()
    {
        return view('contact.form');
    }

    // Mengelola pengiriman formulir kontak
    public function submitContactForm(Request $request)
    {
        // Proses validasi dan pengiriman pesan di sini
        // Misalnya, Anda dapat menggunakan Mailgun atau pengiriman email lainnya.

        // Setelah pesan dikirim, Anda dapat mengarahkan pengguna ke halaman "Terima kasih"
        return redirect()->route('contact.thankyou');
    }
}
