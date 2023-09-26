<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;

class UserApprovalController extends Controller
{
    public function index()
    {
        $users = User::all();
        $pendingUsers = User::where('is_approved', false)
            ->whereHas('roles', function ($query) {
                $query->where('name', '<>', 'admin');
            })
            ->with('roles') // Eager load the roles relationship
            ->get();

        return view('admin.user_approval.index', compact('users', 'pendingUsers'));
    }

public function approve(User $user)
{
    $user->is_approved = true;
    $user->save();

    // Revoke role 'user' using Spatie Permissions
    $user->removeRole('user');

    return redirect()->route('user_approval.index')
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
