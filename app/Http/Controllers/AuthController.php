<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        $user = User::where('name', $request->username)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            // Auth là hàm xác thực của laravel
            Auth::login($user);

            // Redirect to the index page
            return redirect()->route('index');
        } else {
            // Authentication failed
            return redirect()->route('login')->withErrors(['Username hoặc password không hợp lệ']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index'); // Chuyển hướng về trang chính hoặc trang bạn muốn
    }
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|int',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return redirect()->route('login');
    }
}
