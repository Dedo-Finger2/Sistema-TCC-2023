<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ICriacaoParalela;

class RequestController extends Controller implements ICriacaoParalela
{
    /**
     * Método vindo da interface ICriacaoParalela, responsável por criar um novo dado no banco, porém,
     * com alguns detalhes específicos que vão ser passados via array, preenchendo os campos corretos a
     * depender da situação atual (alguns campos serão nulos em certos momentos ou em certos cenários).
     *
     * @param array $data - Dados que virão de outros métodos que vão precisar fazer a criação de uma nova instância
     *                      desse modelo no banco de dados.
     * @return void
     */
    public function parallelStore(array $data)
    {
        # code...
    }
}
