<?php

use Illuminate\Support\Facades\Route;

use App\Models\Tenant\Company;
Route::group(['domain' => '{tenant}.' . config('app.domain'), 'middleware' => 'tenant'], function () {
    Route::get('/', function () {
        $company = Company::firstOrFail();
        return view('tenant.site.index', ['company' => $company]);
    });
});


Route::get('/', function () {

    return view('welcome');
});
