<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function logout() {
        Auth::logout();
        return redirect('/')->with(['success' => 'You are now logged out.']);
    }
    
    public function login(Request $request) {
        $incomingFields = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Check if user exist on database
        if(Auth::attempt(['username' => $incomingFields['username'], 'password' => $incomingFields['password']])) {
            // If exist, generate a cookie
            $request->session()->regenerate();
            return redirect('/homepage')->with(['success' => 'You are now logged in.']);
        } else {
            return redirect('/')->with(['failure' => 'Invalid credentials.']);
        }
    }

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
