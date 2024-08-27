<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultiSeriesChartController;
    

Route::get('/multi-series-chart-data', [MultiSeriesChartController::class, 'getChartData']);

