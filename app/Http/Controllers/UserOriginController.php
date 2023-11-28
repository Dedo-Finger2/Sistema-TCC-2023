<?php

namespace App\Http\Controllers;

use App\Models\UserOrigin;
use Exception;
use Illuminate\Http\Request;
use App\Interfaces\ICriacaoParalela;

class UserOriginController extends Controller implements ICriacaoParalela
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
        $requestedLocationId = $data ['requested_location_id' ] ?? null;
        $requestId           = $data ['request_id'            ] ?? null;
        $userId              = $data ['user_id'               ] ?? null;
        $addressId           = $data ['address_id'            ] ?? null;
        $nome                = $data ['nome'                  ] ?? null;

        $userOrigin = new UserOrigin;

        $userOrigin->requested_location_id = $requestedLocationId ;
        $userOrigin->address_id            = $addressId           ;
        $userOrigin->user_id               = $userId              ;
        $userOrigin->request_id            = $requestId           ;
        $userOrigin->nome                  = $nome                ;

        try {
            $userOrigin->save();
            return $userOrigin;
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }
}
