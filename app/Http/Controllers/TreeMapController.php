<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataImport;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Storage;

class TreeMapController extends Controller
{
    private $filePath = 'SETL_Summary_10Aug2024.xlsx';
    public function index()
    {
        // Load the Excel file
        $filePath = Storage::disk('local')->path($this->filePath);
        $spreadsheet = IOFactory::load($filePath);
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray();
        $treeData = $this->prepareTreeData($rows);
        
        return view('treemap', compact('treeData'));
    }

    private function prepareTreeData($data)
    {
        $tree = [];

        foreach ($data as $row) {
            $this->addToTree($tree, $row);
        }

        return $tree;
    }

    private function addToTree(&$tree, $row)
    {
        // Create hierarchical structure
        $levels = [
            'Scheduled Time Line' => $row[1],
            'Region' => $row[2],
            'Circle' => $row[3],
            'District Name' => $row[4],
            'Division' => $row[5],
            'Section' => $row[6],
            'Name of the work' => $row[7]
        ];

        $current = &$tree;

        foreach ($levels as $key => $value) {
            if (!isset($current[$value])) {
                $current[$value] = [];
            }
            $current = &$current[$value];
        }
    }
}
