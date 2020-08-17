<?php

// Checkouts
$route = env('PACKAGE_ROUTE', '').'/checkouts/';
$controller = 'Increment\Imarket\Cart\Http\CheckoutController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'retrieve_orders', $controller."retrieveOrders");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");
Route::post($route.'update_status', $controller."updateStatus");

// Checkout Items
$route = env('PACKAGE_ROUTE', '').'/checkout_items/';
$controller = 'Increment\Imarket\Cart\Http\CheckoutItemController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'retrieve_on_orders', $controller."retrieveOnOrder");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");


// Carts Items
$route = env('PACKAGE_ROUTE', '').'/carts/';
$controller = 'Increment\Imarket\Cart\Http\CartController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'requestArray', $controller."requestArray");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");