<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
     
    //recebe as informações de login e valida
    //se estiver tudo correto, redireciona para página home
    //se não, retorna uma mensagem de erro
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
          $user =  Auth::user();
          $token = $user->createToken('auth-token')->plainTextToken;


            return response()->json([
                'success' => true,
                'token' => $token,
                'user' => $user
            ]);


        }

        return response()->json([
            'success' => false,
            'message' => 'Credenciais inválidas'
            
        ],401);
    }
    
    //Aqui quando o usuário deixa a sessão de login 
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

}