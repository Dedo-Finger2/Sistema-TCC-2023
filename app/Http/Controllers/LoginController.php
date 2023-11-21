<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Método reponsável por mostrar a tela de login geral.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function login(): \Illuminate\Contracts\View\View
    {
        return view("login");
    }


    /**
     * Método responsável por validar os dados do usuário vindos da tela de login,
     * autenticando o mesmo ou retornando com uma mensagem de aviso.
     *
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            "email" => ["required", "email",],
            "password" => ["required"],
        ]);

        if (Auth::guard('web')->attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended(route("routes.searchRoutes"));
        } elseif (Auth::guard('admin')->attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended(route("companies.dashboard"));
        } else {
            return redirect()->back()->with("error", "Email ou senha incorretos!");
        }
    }


    /**
     * Método responsável por encerar a sessão do usúario, remover a autenticação
     * dele.
     *
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
