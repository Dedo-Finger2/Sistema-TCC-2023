<?php

namespace App\Charts;


use App\Http\Controllers\DashboardController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class TopDestinosChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $data =  DashboardController::getTop5Destinos();

        $labels = array_map(function($item) {
            return $item['nome_destino'];
        }, $data);

        $total_requisicoes = array_map(function($item) {
            return $item['total_requisicoes'];
        }, $data);

        // Cores do Chart.js
    $chartColors = [
        '#FF6384',
        '#FF9F40',
        '#FFCD56',
        '#4BC0C0',
        '#36A2EB'
    ];

        // Gráfico 1
    $this->labels($labels)
    ->dataset('Total de requisições', 'pie', $total_requisicoes)
    ->options([
        'backgroundColor' => $chartColors,
    ]);

    }
}
