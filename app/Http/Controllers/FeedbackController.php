<?php

namespace App\Http\Controllers;

use App\Interfaces\ICriacaoParalela;
use Illuminate\Http\Request;


class FeedbackController extends Controller implements ICriacaoParalela
{
    /**
     * Método responsável por mostrar a tela de criação de novos feedbacks.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): \Illuminate\Contracts\View\View
    {
        return view("User.feedback");
    }


    /**
     * Método responsável por persistir os dados do feedback no banco de dados.
     *
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     * @return void
     */
    public function store(Request $request): void
    {
        # code...
        var_dump($request->all());
    }


    /**
     * Método vindo da interface ICriacaoParalela, responsável por criar um novo dado no banco, porém,
     * com alguns detalhes específicos que vão ser passados via array, preenchendo os campos corretos a
     * depender da situação atual (alguns campos serão nulos em certos momentos ou em certos cenários).
     *
     * @param array $data - Dados que virão de outros métodos que vão precisar fazer a criação de uma nova instância
     *                      desse modelo no banco de dados.
     * @return void
     */
    public function parallelStore(array $data): void
    {
        # code...
    }
}
