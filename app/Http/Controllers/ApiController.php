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
	
	public function getSKU($id)
	{
		//Get SKU product
		$skuProduct = $this->product->findBySku($id);
		return $skuProduct;
	}
}

