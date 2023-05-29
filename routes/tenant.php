<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tenant\Company;

Route::group(['domain' => '{tenant}.' . config('app.domain'), 'middleware' => 'tenant'], function () {


    Auth::routes();

    Route::get('/', function () {
        $company = Company::firstOrFail();
        return view('tenant.site.index', ['company' => $company]);
    });





});
