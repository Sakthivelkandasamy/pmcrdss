<?php


use App\Http\Controllers\UiIntegerationController;


    Route::group(['prefix' => 'ltr'], function () {
        Route::any('login', [UiIntegerationController::class, 'signin'])->name('ui.bms.ltr.login');
        Route::any('signin', [UiIntegerationController::class, 'signin'])->name('ui.bms.ltr.signin');
        Route::any('signup', [UiIntegerationController::class, 'signup'])->name('ui.bms.ltr.signup');
        Route::any('forgot-password', [UiIntegerationController::class, 'forgotPassword'])->name('ui.bms.ltr.forgot-password');
        Route::any('verify-password', [UiIntegerationController::class, 'verifyPassword'])->name('ui.bms.ltr.verify-password');
        Route::any('dashboard', [UiIntegerationController::class, 'dashboard'])->name('ui.bms.ltr.dashboard');
        Route::any('reports', [UiIntegerationController::class, 'reports'])->name('ui.bms.ltr.reports');
        Route::any('inventory', [UiIntegerationController::class, 'inventory'])->name('ui.bms.ltr.inventory');
        Route::any('delivery-zone', [UiIntegerationController::class, 'deliveryZone'])->name('ui.bms.ltr.delivery-zone');
        Route::any('my-brands', [UiIntegerationController::class, 'brands'])->name('ui.bms.ltr.brands');
        Route::any('reservation', [UiIntegerationController::class, 'reservation'])->name('ui.bms.ltr.reservation');
        Route::any('reviews', [UiIntegerationController::class, 'reviews'])->name('ui.bms.ltr.reviews');
        Route::any('teams', [UiIntegerationController::class, 'teams'])->name('ui.bms.ltr.teams');
        Route::any('transaction', [UiIntegerationController::class, 'transaction'])->name('ui.bms.ltr.transaction');
        Route::any('settlements', [UiIntegerationController::class, 'settlements'])->name('ui.bms.ltr.settlements');
        Route::get('website-builder', [UiIntegerationController::class, 'websiteBuilder'])->name('ui.bms.ltr.website-builder-cover');
        Route::get('website-builder-list', [UiIntegerationController::class, 'websiteBuilderList'])->name('ui.bms.ltr.website-builder-list');
        Route::get('create-website', [UiIntegerationController::class, 'createWebsite'])->name('ui.bms.ltr.create-website');
        Route::get('qrcode', [UiIntegerationController::class, 'qrCode'])->name('ui.bms.ltr.qrcode');
        Route::any('menu-management', [UiIntegerationController::class, 'menuManagement'])->name('ui.bms.ltr.menu-management');
    });

