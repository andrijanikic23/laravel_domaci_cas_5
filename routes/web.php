<?php

use Illuminate\Support\Facades\Route;

Route::get("/", [\App\Http\Controllers\HomepageController::class, 'index']);

Route::view("/about", "about");




Route::get("/admin/all-contacts", [\App\Http\Controllers\ContactController::class, 'get_all_contacts']);

Route::get("/admin/all-products", [\App\Http\Controllers\ShopController::class, 'get_all_products']);

Route::post("/send-contact", [\App\Http\Controllers\ContactController::class, "sendContact"]);


//Homework
Route::view("/admin/add-product", "add_product");
Route::post("/add-new-product", [\App\Http\Controllers\ShopController::class, 'send_product']);
Route::get("/admin/products", [\App\Http\Controllers\ShopController::class, 'get_all_products']);
