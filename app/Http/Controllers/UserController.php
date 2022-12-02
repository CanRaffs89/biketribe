<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() {
        return view('users.login');
    }

    public function loginUser(Request $request) {
        $formFields = $request->validate([
            'login-username' => 'required',
            'login-password' => 'required'
        ]);

        if(auth()->attempt(['username' => $formFields['login-username'], 'password' => $formFields['login-password']])) {
            $request->session()->regenerate();
            $user = auth()->user();
            return redirect('profile/' . $user->username);
        }
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register() {
        return view('users.register');
    }

    public function registerNewUser(Request $request) {
        $formFields = $request->validate([
            'username' => ['required', 'min:2'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        return $user;
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
        
        return view('users.profile', ['username' => $user->username, 'greeting' => $greeting]);
    }
}
