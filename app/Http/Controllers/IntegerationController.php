<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Storage;

class IntegerationController extends Controller
{
    private $filePath = 'material_excel_data.xlsx';
    private $regions = [
        '9. Tiruvallur', '10. Coimbatore', '10. Erode', '32. Karur Rural', 
        '34. Karur HDVS', '35. Krish ASF', '46. Vellore', '53. Gingee'
    ];
    public function login()
    {
        return view('signin');
    }

    public function signin()
    {
        return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function verifyPassword()
    {
        return view('verify-password');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function reports()
    {
        return view('reports');
    }
    public function inventory()
    {
        return view('inventory');
    }
    public function deliveryZone()
    {
        return view('delivery-zone');
    }
    public function brands()
    {
        return view('brands');
    }
    public function reservation()
    {
        return view('reservation');
    }
    public function reviews()
    {
        return view('reviews');
    }
    public function teams()
    {
        return view('teams');
    }
    public function transaction()
    {
        return view('transaction');
    }
    public function settlements()
    {
        return view('settlements');
    }
    public function websiteBuilder()
    {
        return view('website-builder');
    }
    public function websiteBuilderList()
    {
        return view('website-builder-list');
    }
    public function createWebsite()
    {
        return view('create-website');
    }
    public function qrCode()
    {
        return view('qrcode');
    }
    public function menuManagement()
    {
        return view('menu-management');
    }
    public function documentStage()
    {
        return view('document_statge');
    }
    public function workflow()
    {
        return view('workflow');
    }
    public function index()
    {
        $fileExists = Storage::exists($this->filePath);
        return view('excel-upload', ['fileExists' => $fileExists]);
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls|max:2048',
        ]);

        if ($request->file('excel_file')->isValid()) {
            Storage::disk('local')->put($this->filePath, file_get_contents($request->file('excel_file')));
            return redirect()->route('excel.chart')->with('success', 'File uploaded successfully.');
        }

        return back()->with('error', 'File upload failed.');
    }
    public function showChart(Request $request)
    {
        $location = $request->location??11;
        if (!Storage::disk('local')->exists($this->filePath)) {
            return redirect()->route('excel.index')->with('error', 'Excel file not found. Please upload a file first.');
        }

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
            return redirect()->route('excel.index')->with('error', 'Error processing Excel file: ' . $e->getMessage());
        }
    }

    public function multiSeriesChart(Request $request)
    {
        return view('working_status');
    }
    
}
