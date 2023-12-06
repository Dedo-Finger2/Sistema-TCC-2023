<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Http\Controllers\DashboardController;

class TopOrigensChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $data =  DashboardController::getTop5Origens();

        $labels = array_map(function($item) {
            return $item['nome_origem'];
        }, $data);

        $total_requisicoes = array_map(function($item) {
            return $item['total_requisicoes'];
        }, $data);

        $chartColors = [
            '#FF6384',
            '#FF9F40',
            '#FFCD56',
            '#4BC0C0',
            '#36A2EB'
        ];

        // Gráfico 1
        $this->labels($labels)
        ->dataset('Total de requisições ', 'pie', $total_requisicoes)
        ->options([
            'backgroundColor' => $chartColors,
        ]);
    }
}
