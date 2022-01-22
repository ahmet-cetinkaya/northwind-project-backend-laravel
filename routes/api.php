<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeTerritoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TerritoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("/categories")->group(function () {
    $controller = CategoryController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::post("", [$controller, "Add"]);
    Route::put("/{id}", [$controller, "Update"]);
    Route::delete("/{id}", [$controller, "Delete"]);
});

Route::prefix("/customers")->group(function () {
    $controller = CustomerController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::post("", [$controller, "Add"]);
    Route::put("/{id}", [$controller, "Update"]);
    Route::delete("/{id}", [$controller, "Delete"]);
});

Route::prefix("/employees")->group(function () {
    $controller = EmployeeController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::post("", [$controller, "Add"]);
    Route::put("/{id}", [$controller, "Update"]);
    Route::delete("/{id}", [$controller, "Delete"]);
});

Route::prefix("/employeesterritories")->group(function () {
    $controller = EmployeeTerritoryController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::post("", [$controller, "Add"]);
    Route::put("/{id}", [$controller, "Update"]);
    Route::delete("/{id}", [$controller, "Delete"]);
});

Route::prefix("/orders")->group(function () {
    $controller = OrderController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::post("", [$controller, "Add"]);
    Route::put("/{id}", [$controller, "Update"]);
    Route::delete("/{id}", [$controller, "Delete"]);
});

Route::prefix("/orderdetails")->group(function () {
    $controller = OrderDetailController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::post("", [$controller, "Add"]);
    Route::put("/{id}", [$controller, "Update"]);
    Route::delete("/{id}", [$controller, "Delete"]);
});

Route::prefix("/products")->group(function () {
    $controller = ProductController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::post("", [$controller, "Add"]);
    Route::put("/{id}", [$controller, "Update"]);
    Route::delete("/{id}", [$controller, "Delete"]);
});

Route::prefix("/regions")->group(function () {
    $controller = RegionController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::post("", [$controller, "Add"]);
    Route::put("/{id}", [$controller, "Update"]);
    Route::delete("/{id}", [$controller, "Delete"]);
});

Route::prefix("/shippers")->group(function () {
    $controller = ShipperController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::post("", [$controller, "Add"]);
    Route::put("/{id}", [$controller, "Update"]);
    Route::delete("/{id}", [$controller, "Delete"]);
});

Route::prefix("/suppliers")->group(function () {
    $controller = SupplierController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::post("", [$controller, "Add"]);
    Route::put("/{id}", [$controller, "Update"]);
    Route::delete("/{id}", [$controller, "Delete"]);
});

Route::prefix("/territories")->group(function () {
    $controller = TerritoryController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::post("", [$controller, "Add"]);
    Route::put("/{id}", [$controller, "Update"]);
    Route::delete("/{id}", [$controller, "Delete"]);
});
