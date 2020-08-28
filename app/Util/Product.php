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

	public function endpointRequest($url)
	{
		try {
			$response = $this->client->request('GET', $url);
		} catch (\Exception $e) {
			echo $e;
            return [];
		}

		return $this->response_handler($response->getBody()->getContents());
	}

	public function response_handler($response)
	{
		if ($response) {
			return json_decode($response);
		}
		
		return [];
	}
}