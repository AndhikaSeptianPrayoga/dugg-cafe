<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor_handphone' => 'required|string|max:20',
            'pesan' => 'required|string|max:2000',
        ], [
            'nama_depan.required' => 'Nama depan wajib diisi',
            'nama_belakang.required' => 'Nama belakang wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'nomor_handphone.required' => 'Nomor handphone wajib diisi',
            'pesan.required' => 'Pesan wajib diisi',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Kirim email ke admin
            Mail::to('andhika.elite007@gmail.com')->send(new ContactFormMail($request->all()));
            
            return back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan merespons dalam waktu 24 jam.');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.');
        }
    }
} 