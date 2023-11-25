<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\RequestedLocation;
use App\Interfaces\ICriacaoParalela;

class RequestedLocationController extends Controller implements ICriacaoParalela
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
        $nome      = $data['nome'       ] ?? null;
        $addressId = $data['address_id' ] ?? null;

        $requestedLocation = new RequestedLocation;

        $requestedLocation->nome       = $nome      ;
        $requestedLocation->address_id = $addressId ;

        try {
            $requestedLocation->save();

            return $requestedLocation;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
