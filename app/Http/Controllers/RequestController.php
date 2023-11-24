<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Request as RequestModel;
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
     */
    public static function parallelStore(array $data)
    {
        $userId     = $data['user_id'    ] ?? null;
        $feedbackId = $data['feedback_id'] ?? null;
        $dataHora   = $data['data_hora'  ] ?? null;
        $retorno    = $data['retorno'    ] ?? null;

        $request = new RequestModel;

        $request->user_id            = $userId    ;
        $request->feedback_id        = $feedbackId;
        $request->data_hora          = $dataHora  ;
        $request->retorno_requisicao = $retorno   ;

        try {
            $request->save();

            return $request;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
