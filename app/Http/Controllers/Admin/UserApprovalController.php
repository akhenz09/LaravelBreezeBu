<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserApprovalController extends Controller
{
    public function index()
{
    $pendingUsers = User::where('is_approved', false)
        ->whereHas('roles', function ($query) {
            $query->where('name', '<>', 'admin'); // Exclude users with the admin role
        })
        ->get();

    return view('admin.user_approval.index', compact('pendingUsers'));
}

public function approve(User $user)
{
    $user->is_approved = true;
    $user->save();

    // Assign role 'user' using Spatie Permissions
    $user->assignRole('user');

    return redirect()->route('admin.user_approval.index')
        ->with('success', 'User approved successfully.');
}

public function reject(User $user)
{
    // Optionally: Delete the user if needed
    $user->delete();

    return redirect()->route('admin.user_approval.index')
        ->with('success', 'User rejected and removed.');
}
}
