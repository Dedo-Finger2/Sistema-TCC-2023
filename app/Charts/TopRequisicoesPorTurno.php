<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Http\Controllers\DashboardController;

class TopRequisicoesPorTurno extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $data = DashboardController::getRequisicoesPorTurno();

        $labels = array_map(function($item) {
            return $item['periodo_do_dia'];
        }, $data);

        $total_requisicoes = array_map(function($item) {
            return $item['total_requisicoes'];
        }, $data);

        $this->labels($labels)
            ->dataset('Total de requisições', 'line', $total_requisicoes);

    }
}
