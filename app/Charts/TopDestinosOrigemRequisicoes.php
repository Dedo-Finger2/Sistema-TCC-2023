<?php

namespace App\Charts;

use App\Http\Controllers\DashboardController;
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

        $data = DashboardController::getDestinoPorOrigem();

        $labels = array_map(function ($item) {
            return $item['nome_origem'] . ' > ' . $item['nome_destino'];
        }, $data);

        $total_requisicoes = array_map(function ($item) {
            return $item['total_requisicoes'];
        }, $data);

        $this->labels($labels)
            ->dataset('Total de requisições', 'bar', $total_requisicoes)
            ->backgroundColor([
                '#3ae374', // Cor personalizada para a primeira barra
                '#39d98e', // Cor personalizada para a segunda barra
                '#27ae60', // Cor personalizada para a terceira barra
                '#1e8449', // Cor personalizada para a quarta barra
                '#0e4429', // Cor personalizada para a quinta barra
            ]);
    }
}
