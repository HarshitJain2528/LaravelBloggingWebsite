<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class SettingsController extends Controller
{
    public function update(Request $request)
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Handle dark mode toggle
        $user->dark_mode = $request->has('darkModeToggle');

        // Save changes
        $user->save();

        return redirect()->route('settings')->with('success', 'Settings updated successfully!');
    }
}
