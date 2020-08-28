<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('products', 'ApiController@index');
Route::get('/json-api', function() {
	$client = new Client();
	try{
	$response = $client->request('GET', 'https://eve.theiconic.com.au/catalog/products');
	$statusCode = $response->getStatusCode();echo $statusCode;
	$body = $response->getBody()->getContents();
	}catch(\Exception $e){
		echo $e->getMessage();
	}

	//return $body;
	return '[{"id":32345}]';
});
