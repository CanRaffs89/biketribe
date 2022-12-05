<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin() {
        return view('users.login');
    }

    public function login(Request $request) {
        $formFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt(['username' => $formFields['username'], 'password' => $formFields['password']])) {
            $request->session()->regenerate();
            $user = auth()->user();
            return redirect('profile/' . $user->username);
        } else {
            return redirect('/login')->with('failure', 'Login unsuccessful');
        }
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showRegister() {
        return view('users.register');
    }

    public function register(Request $request) {
        $formFields = $request->validate([
            'username' => ['required', 'min:2'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('success', 'Registration successful - welcome to BikeTribe!');
    }

    public function profile(User $user) {
        $time = date('G');
        $greeting = '';

        if($time <= 11) {
            $greeting = 'Good morning';
        } else if ($time >= 12 && $time <= 16) {
            $greeting = 'Good afternoon';
        } else {
            $greeting = 'Good evening';
        }
        
        return view('users.profile', ['username' => $user->username, 'greeting' => $greeting, 'meetups' => $user->meetups()->latest()->get()]);
    }
}
