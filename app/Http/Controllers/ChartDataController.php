<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ChartDataController extends Controller
{
    private $filePath = 'SETL_Summary_10Aug2024.xlsx';
    public function getChartData()
    {
        
        $barChartData = $this->processBarChartData();
        $stackedBarChartData = $this->processStackedBarChartData();
        $heatmapData = $this->processHeatmapData();
        $pieChartData = $this->processPieChartData();

        return response()->json([
            'barChartData' => $barChartData,
            'stackedBarChartData' => $stackedBarChartData,
            'heatmapData' => $heatmapData,
            'pieChartData' => $pieChartData,
        ]);
    }

    private function processBarChartData()
    {
        /*if (!Storage::disk('local')->exists($this->filePath)) {
            return [] ;
        }
        $labels = [];
        $values = [];
        try {
            $filePath = Storage::disk('local')->path($this->filePath);
            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getActiveSheet();
            $rows = $worksheet->toArray();

            // Remove header row
            array_shift($rows);

            $chartData = [];
            foreach ($rows as $row) {
                $chartData[] = [
                    'name' => $row[1] ?? 'Unknown', // Material Name
                    'total' => floatval($row[ $location ] ?? 0) // Total column
                ];
            }

            return view('excel-chart', compact('chartData','location'));
        } catch (\Exception $e) {
            return $e;
        }*/
        // Implement logic to process and format data for the Bar Chart
        return [
            'labels' => ['Label 1', 'Label 2'], // Replace with actual labels
            'datasets' => [
                [
                    'label' => 'Dataset 1',
                    'backgroundColor' => '#f87979',
                    'data' => [40, 20] // Replace with actual data
                ]
            ]
        ];
    }

    private function processStackedBarChartData($data)
    {
        // Implement logic to process and format data for the Stacked Bar Chart
        return [
            'labels' => ['Label 1', 'Label 2'], // Replace with actual labels
            'datasets' => [
                [
                    'label' => 'Dataset 1',
                    'backgroundColor' => '#f87979',
                    'data' => [40, 20] // Replace with actual data
                ],
                [
                    'label' => 'Dataset 2',
                    'backgroundColor' => '#7ed6df',
                    'data' => [30, 50] // Replace with actual data
                ]
            ]
        ];
    }

    private function processHeatmapData($data)
    {
        // Implement logic to process and format data for the Heatmap
        return [
            // Replace with heatmap data
        ];
    }

    private function processPieChartData($data)
    {
        // Implement logic to process and format data for the Pie/Donut Chart
        return [
            'labels' => ['Label 1', 'Label 2'], // Replace with actual labels
            'datasets' => [
                [
                    'label' => 'Dataset 1',
                    'backgroundColor' => ['#f87979', '#7ed6df'],
                    'data' => [60, 40] // Replace with actual data
                ]
            ]
        ];
    }
}
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\YourDataImport; // Import the class you created

class ChartDataController extends Controller
{
    public function getChartData()
    {
        $data = Excel::toArray(new YourDataImport, storage_path('app/public/SETL Summary 10Aug2024.xlsx'));

        // Process data for each chart type
        $barChartData = $this->processBarChartData($data);
        $stackedBarChartData = $this->processStackedBarChartData($data);
        $heatmapData = $this->processHeatmapData($data);
        $pieChartData = $this->processPieChartData($data);

        return response()->json([
            'barChartData' => $barChartData,
            'stackedBarChartData' => $stackedBarChartData,
            'heatmapData' => $heatmapData,
            'pieChartData' => $pieChartData,
        ]);
    }

    private function processBarChartData($data)
    {
        // Implement logic to process and format data for the Bar Chart
        return [
            'labels' => ['Label 1', 'Label 2'], // Replace with actual labels
            'datasets' => [
                [
                    'label' => 'Dataset 1',
                    'backgroundColor' => '#f87979',
                    'data' => [40, 20] // Replace with actual data
                ]
            ]
        ];
    }

    private function processStackedBarChartData($data)
    {
        // Implement logic to process and format data for the Stacked Bar Chart
        return [
            'labels' => ['Label 1', 'Label 2'], // Replace with actual labels
            'datasets' => [
                [
                    'label' => 'Dataset 1',
                    'backgroundColor' => '#f87979',
                    'data' => [40, 20] // Replace with actual data
                ],
                [
                    'label' => 'Dataset 2',
                    'backgroundColor' => '#7ed6df',
                    'data' => [30, 50] // Replace with actual data
                ]
            ]
        ];
    }

    private function processHeatmapData($data)
    {
        // Implement logic to process and format data for the Heatmap
        return [
            // Replace with heatmap data
        ];
    }

    private function processPieChartData($data)
    {
        // Implement logic to process and format data for the Pie/Donut Chart
        return [
            'labels' => ['Label 1', 'Label 2'], // Replace with actual labels
            'datasets' => [
                [
                    'label' => 'Dataset 1',
                    'backgroundColor' => ['#f87979', '#7ed6df'],
                    'data' => [60, 40] // Replace with actual data
                ]
            ]
        ];
    }
}
