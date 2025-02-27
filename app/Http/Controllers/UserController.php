<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('homepage', compact('movies'));
    }

    public function register(Request $request) {
        $incomingFields = $request->validate([
            'username' => ['required', 'min:5', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);

        Auth::login($user);
        return redirect('/homepage')->with(['success', 'Account successfully created.']);
    }
}
