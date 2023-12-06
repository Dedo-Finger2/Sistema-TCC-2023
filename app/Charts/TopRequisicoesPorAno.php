<?php

namespace App\Charts;

use App\Http\Controllers\DashboardController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class TopRequisicoesPorAno extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $data = DashboardController::getRequisicoesPorAno();

        $labels = array_map(function($item) {
            return $item['ano_requisicao'];
        }, $data);

        $total_requisicoes = array_map(function($item) {
            return $item['total_requisicoes'];
        }, $data);

        $this->labels(array_reverse($labels))
            ->dataset('Total de requisições', 'line', array_reverse($total_requisicoes))
            ->backgroundColor('rgba(54, 162, 235, 0.2)') // Cor personalizada para o gráfico de linha
            ->options([
                'borderColor' => 'rgba(54, 162, 235, 1)', // Cor personalizada para a borda da linha
            ]);
    }
}
