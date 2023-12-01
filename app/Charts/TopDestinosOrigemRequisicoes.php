<?php

namespace App\Charts;

use App\Http\Controllers\GraphHandlerController;
use ConsoleTVs\Charts\Classes\ChartJs\Chart;

class TopDestinosOrigemRequisicoes extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $data = GraphHandlerController::getDestinoPorOrigem();

        $labels = array_map(function($item) {
            return $item['nome_origem'] . ' > ' . $item['nome_destino'];
        }, $data);

        $total_requisicoes = array_map(function($item) {
            return $item['total_requisicoes'];
        }, $data);

        $this->labels($labels)
            ->dataset('Total de requisições', 'bar', $total_requisicoes)
            ->backgroundColor('rgba(75, 192, 192, 0.2)')
            ->color('rgba(75, 192, 192, 1)');
    }
}
