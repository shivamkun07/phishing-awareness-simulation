<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin', compact('users'));
    }

    public function toggleAdmin($id)
    {
        $user = User::findOrFail($id);

        // Prevent self-demotion
        if ($user->id === auth()->id()) {
            return back()->with('error', 'You cannot change your own role');
        }

        $user->is_admin = !$user->is_admin;
        $user->save();

        return back()->with('success', 'User role updated successfully');
    }
}
