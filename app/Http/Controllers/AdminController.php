<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function manageUsers()
    {
        $users = User::all(); // Retrieve all users from the database
        return view('admin.manage_users', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.manage.users')->with('success', 'User deleted successfully');
    }

    public function promoteUser($id)
    {
        $user = User::findOrFail($id);
        $user->role = 'admin'; // Assuming 'admin' is the role for administrators
        $user->save();
        return redirect()->route('admin.manage.users')->with('success', 'User promoted to admin');
    }

    public function demoteUser($id)
    {
        $user = User::findOrFail($id);
        $user->role = 'user'; // Assuming 'user' is the default role
        $user->save();
        return redirect()->route('admin.manage.users')->with('success', 'Admin demoted to user');
    }
}
