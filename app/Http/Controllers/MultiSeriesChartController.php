<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Storage;


class MultiSeriesChartController extends Controller
{
	private $filePath = 'SETL_Summary_10Aug2024.xlsx';
    public function getChartData()
    {

    	try {
            $filePath = Storage::disk('local')->path($this->filePath);
            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getActiveSheet();
            $rows = $worksheet->toArray();

            // Remove header row
            array_shift($rows);

            $chartData = [];
            $years = [];
            $datasets = [];
            foreach ($rows as $row) {

                if (!empty($row[2])) { 
                    $years[]=$row[2];
                }
               
            }
        // Get unique years
        $uniqueYears = array_unique($years);
        // If you want to reset the array keys
        $uniqueYears = array_values($uniqueYears);
        //print_r($uniqueYears);
            
        } catch (\Exception $e) {

        }

        $chartData = [
            'labels' => $uniqueYears,
            'datasets' => [
                [
                    'label' => 'Field Survey WIP',
                    'backgroundColor' => '#F7C800',
                    'data' => [50, 100, 120],
                    'yValueFormatString' => "$##,###K",
                ],
                [
                    'label' => 'Submission to SLD',
                    'backgroundColor' => '#FF9933',
                    'data' => [75, 115, 150],
                    'yValueFormatString' => "$##,###K",
                ],
                [
                    'label' => 'Survey Completed',
                    'backgroundColor' => '#DE2910',
                    'data' => [110, 120, 160],
                    'yValueFormatString' => "$##,###K",
                ]
            ]
        ];

        return response()->json($chartData);
    }
}
