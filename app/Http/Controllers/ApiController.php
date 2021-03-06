<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Product;

class ApiController extends Controller
{
    protected $product;
	
	public function __construct(Product $product)
	{
		$this->product = $product;
	}
	
	public function index()
	{
		//Get all the products
		$products = $this->product->all();
		
		return $products;
	}
	
	public function getSKU($sku)
	{
		//Get SKU product
		$skuProduct = $this->product->findBySku($sku);
		return $skuProduct;
	}
	
	public function querySearch(Request $request)
	{
		// returns only query parameters
		// /catalog/products?gender=female&page=1&page_size=10&sort=popularity
		//$page = request('page'); // or
		//$page = $request->page; // or
		//$page = $request->input('page'); // or
		//$page = $request->query('page');
		
		$page = request('page');
		$gender = request('gender');
		$page_size = request('page_size');
		$sort = request('sort');

		//dd($request); // latest
		return $this->product->searchProductWithQueries($gender, $page, $page_size, $sort);
	}
}

