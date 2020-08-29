<?php
namespace App\Util;

use GuzzleHttp\Client;

class Product
{
	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function all()
	{
		return $this->endpointRequest('/catalog/products');
	}

	public function findBySku($sku)
	{
		return $this->endpointRequest('/catalog/products/'.$sku);
	}
	
	public function searchProductWithQueries($gender, $page, $page_size, $sort)
	{
		$response = $this->endpointRequest("/catalog/products?gender=$gender&page=$page&page_size=$page_size&sort=$sort");
		
		if($response)
		{
			return addVideoLink($response["_embedded"]["product"]);
		}
		return $response;
	}

	public function endpointRequest($url)
	{
		
		try 
		{
			$response = $this->client->request('GET', $url);
		} catch (\Exception $e) {
			echo $e->getMessage();
            return [];
		}

		return $this->response_handler($response->getBody()->getContents());
	}

	public function response_handler($response)
	{
		if ($response) 
		{
			return response()->json(json_decode($response));
		}
		
		return [];
	}
	
	function addVideoLink($res)
	{
		foreach($res as $key => $value)
		{
			if($key == '_embedded')
			{
				foreach($value["product"] as $k => $val)
				{
					$sku = $val["sku"];
					$video_link = ([
						"url" => "https://eve.theiconic.com.au/products/".$sku."/videos"
					]);

					$res["_embedded"]["product"][$k]["video"] = $video_link;
				}
			}
		}
		return $res;
	}
}