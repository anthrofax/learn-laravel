<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255'
        ]);

        // Enkripsi password, Sekarang tidak perlu melakukan ini, karena laravel sudah otomatis melakukan enkripsi pada data yang berupa password

        // 1. Bcrypt
        // $validatedData['password'] = bcrypt($validatedData['password']);
        
        // 2. Hash
        // $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! please login.');

        return redirect('/login')->with('success', 'Registration successfull! please login.');
    }
}
