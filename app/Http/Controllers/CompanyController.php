<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Método responsável por retornar uma lista com todas as empresas que
     * estão cadastradas no nosso banco de dados.
     * * Não vamos usar este método no projeto.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        return view("Company.index");
    }


    /**
     * Método responsável por mostrar a tela de cadastro de novas empresas.
     * ! Este método não será usado no sistema !
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(Request $request): \Illuminate\Contracts\View\View
    {
        return view("Company.create");
    }


    /**
     * Método responsável por persistir os dados da requisição no banco de dados.
     * Mais especificamente persistir os dados da criação de novas empresas.
     *
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     * @return void
     */
    public function store(Request $request)
    {
        $company = $request->all();
        $company['password'] = bcrypt($request->password);
        $company = Company::create($company);

        Auth::guard('admin')->login($company);


        return redirect()->route('companies.dashboard');
    }

    /**
     * Método responsável por mostrar a tela de Dashboard das empresas (Painel de controle).
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function dashboard(): \Illuminate\Contracts\View\View
    {
        $companies = Company::all();

        return view('Company.dashboard', compact('companies'));
    }
}
