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
Route::get('products', 'ApiController@index');
Route::get('product/{sku}', 'ApiController@getSKU');
Route::get('catalog/products', 'ApiController@querySearch');

/*
Route::get('/pr', function() {
	$client = new Client();

	$response = $client->request('GET', 'https://eve.theiconic.com.au/catalog/products?gender=female&page=1&page_size=10&sort=popularity');
	$statusCode = $response->getStatusCode();
	$body = $response->getBody()->getContents();

	return response()->json(json_decode($body));
});
*/
//Added due to the Search Results route CORS issue.
Route::get('/cors', function(){
	
	$obj = '{"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products?gender=female&page=1&page_size=10&sort=popularity"},"first":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products?gender=female&page_size=10&sort=popularity"},"last":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products?gender=female&page=10000000&page_size=10&sort=popularity"},"next":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products?gender=female&page=2&page_size=10&sort=popularity"}},"_embedded":{"product":[{"video_count":0,"price":120,"markdown_price":120,"special_price":0,"returnable":true,"final_sale":false,"stock_update":null,"final_price":120,"sku":"NI126SF64LVB","name":"Flex 2020 Run - Women\'s","ribbon":"new","messaging":{"marketing":[{"type":"new","short":"New","medium":"New arrival","long":"New arrival","color":"#42ABC8","url":null}],"operational":[]},"color_name_brand":"Stone Mauve, Metallic Red Bronze & Smoky Mauve","short_description":"- Dual-density foam cushioning <br>\n- Flywire cables for security<br>\n- Supportive, deconstructed heel moulds to foot<br>\n- Flex grooves to outsole","shipment_type":"WH","color_name":"Stone Mauve, Metallic Red Bronze & Smoky Mauve","color_hex":"#ebcae0","cart_price_rules":null,"attributes":null,"simples":null,"sustainability":null,"link":"flex-2020-run-women-s-969233.html","activated_at":"2020-08-27 16:51:19","return_policy_message":{"message":"This product qualifies for 30 day free returns","bold_substring":"free returns"},"categories_translated":"Shoes|Running|Performance Shoes","category_path":null,"category_ids":null,"related_products":null,"image_products":null,"attribute_set_identifier":"SF","supplier":"NIKE AUSTRALIA PTY LTD","wannaby_id":null,"citrus_ad_id":null,"associated_skus":"","size_guide_url":"https:\/\/www.theiconic.com.au\/index\/sizeguidemain?for=SF&brand=Nike&gender=female","related":{"count":0,"label":"Colour","visible":true,"message":null},"variants":{"count":0,"label":"Colour","visible":true,"message":null},"_embedded":{"brand":{"id":126,"name":"Nike","url_key":"nike","image_url":"http:\/\/static.theiconic.com.au\/b\/nike.jpg","banner_url":null,"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/brands\/nike"}}},"gender":{"id":2,"name":"female","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/genders\/female"}}},"shops":[{"is_default":false,"name":"sports","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/sports"}}},{"is_default":true,"name":"shop","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/shop"}}}],"images":[{"url":"http:\/\/static.theiconic.com.au\/p\/nike-7607-332969-1.jpg","thumbnail":"\/\/static.theiconic.com.au\/p\/nike-7607-332969-1.jpg"}]},"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products\/NI126SF64LVB"}}},{"video_count":0,"price":220,"markdown_price":220,"special_price":0,"returnable":true,"final_sale":false,"stock_update":null,"final_price":220,"sku":"NI126SF99ELC","name":"Air Zoom Vomero 14 - Women\'s","ribbon":"new","messaging":{"marketing":[{"type":"new","short":"New","medium":"New arrival","long":"New arrival","color":"#42ABC8","url":null}],"operational":[]},"color_name_brand":"White, Glacier Ice, Black, Pure Platinum & Barely Volt","short_description":"American sportswear giant <b>Nike<\/b> has established an inimitable reputation for performance and innovation. Combining a technical understanding of an athlete\u2019s needs with a strong eye for style, Nike has become the go-to for professional and amateur athletes alike.<br><br>- Sleek breathable mesh upper\n<br>- Rounded toe with rubber bumper\n<br>- Flywire cables for the ultimate support\n<br>- Swoosh logo to sides\n<br>- Padded collar cradles the ankle\n<br>- Full-length Zoom Air unit and Nike React technology delivers an extremely smooth feel","shipment_type":"WH","color_name":"White, Glacier Ice, Black, Pure Platinum & Barely Volt","color_hex":"#ffffff","cart_price_rules":null,"attributes":null,"simples":null,"sustainability":null,"link":"air-zoom-vomero-14-women-s-1032791.html","activated_at":"2020-08-28 14:01:06","return_policy_message":{"message":"This product qualifies for 30 day free returns","bold_substring":"free returns"},"categories_translated":"Shoes|Running|Performance Shoes","category_path":null,"category_ids":null,"related_products":null,"image_products":null,"attribute_set_identifier":"SF","supplier":"NIKE AUSTRALIA PTY LTD","wannaby_id":null,"citrus_ad_id":null,"associated_skus":"","size_guide_url":"https:\/\/www.theiconic.com.au\/index\/sizeguidemain?for=SF&brand=Nike&gender=female","related":{"count":0,"label":"Colour","visible":true,"message":null},"variants":{"count":0,"label":"Colour","visible":true,"message":null},"_embedded":{"brand":{"id":126,"name":"Nike","url_key":"nike","image_url":"http:\/\/static.theiconic.com.au\/b\/nike.jpg","banner_url":null,"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/brands\/nike"}}},"gender":{"id":2,"name":"female","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/genders\/female"}}},"shops":[{"is_default":false,"name":"sports","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/sports"}}},{"is_default":true,"name":"shop","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/shop"}}}],"images":[{"url":"http:\/\/static.theiconic.com.au\/p\/nike-8859-1972301-1.jpg","thumbnail":"\/\/static.theiconic.com.au\/p\/nike-8859-1972301-1.jpg"}]},"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products\/NI126SF99ELC"}}},{"video_count":0,"price":170,"markdown_price":170,"special_price":0,"returnable":true,"final_sale":false,"stock_update":null,"final_price":170,"sku":"NI126SF86VUV","name":"Free Metcon 3 - Women\'s","ribbon":"new","messaging":{"marketing":[{"type":"new","short":"New","medium":"New arrival","long":"New arrival","color":"#42ABC8","url":null}],"operational":[]},"color_name_brand":"Black, Barely Volt, Glacier Ice, Flash Crimson & White","short_description":"American sportswear giant <b>Nike<\/b> has established an inimitable reputation for performance and innovation. Combining a technical understanding of an athlete\u2019s needs with a strong eye for style, Nike has become the go-to for professional and amateur athletes alike.<br><br>- Breathable mesh design<br>- Foam cushioning<br>- Flexible Nike Free sole<br>- Rubber tread\n","shipment_type":"WH","color_name":"Black, Barely Volt, Glacier Ice, Flash Crimson & White","color_hex":"#000000","cart_price_rules":null,"attributes":null,"simples":null,"sustainability":null,"link":"free-metcon-3-women-s-1032790.html","activated_at":"2020-08-27 21:30:55","return_policy_message":{"message":"This product qualifies for 30 day free returns","bold_substring":"free returns"},"categories_translated":"Shoes|Training|Performance Shoes","category_path":null,"category_ids":null,"related_products":null,"image_products":null,"attribute_set_identifier":"SF","supplier":"NIKE AUSTRALIA PTY LTD","wannaby_id":null,"citrus_ad_id":null,"associated_skus":"","size_guide_url":"https:\/\/www.theiconic.com.au\/index\/sizeguidemain?for=SF&brand=Nike&gender=female","related":{"count":2,"label":"Colour","visible":true,"message":"More colours available"},"variants":{"count":2,"label":"Colour","visible":true,"message":"More colours available"},"_embedded":{"brand":{"id":126,"name":"Nike","url_key":"nike","image_url":"http:\/\/static.theiconic.com.au\/b\/nike.jpg","banner_url":null,"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/brands\/nike"}}},"gender":{"id":2,"name":"female","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/genders\/female"}}},"shops":[{"is_default":false,"name":"sports","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/sports"}}},{"is_default":true,"name":"shop","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/shop"}}}],"images":[{"url":"http:\/\/static.theiconic.com.au\/p\/nike-8800-0972301-1.jpg","thumbnail":"\/\/static.theiconic.com.au\/p\/nike-8800-0972301-1.jpg"}]},"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products\/NI126SF86VUV"}}},{"video_count":0,"price":170,"markdown_price":170,"special_price":0,"returnable":true,"final_sale":false,"stock_update":null,"final_price":170,"sku":"NI126SF22XWB","name":"Free Metcon 3 - Women\'s","ribbon":"new","messaging":{"marketing":[{"type":"new","short":"New","medium":"New arrival","long":"New arrival","color":"#42ABC8","url":null}],"operational":[]},"color_name_brand":"Pale Ivory, Team Orange & Vast Grey","short_description":"American sportswear giant <b>Nike<\/b> has established an inimitable reputation for performance and innovation. Combining a technical understanding of an athlete\u2019s needs with a strong eye for style, <b>Nike<\/b> has become the go-to for professional and amateur athletes alike. With a roster that spans apparel, shoes and accessories suitable for any and every athletic pursuit, <b>Nike<\/b> has positioned themselves as a leader in their field with an extensive range that encompasses every aspect of a healthy lifestyle. From performance footwear to printed tights to moisture wicking running shorts, their extensive range of athletic products is designed to help keep you at the top of your game.<br><br>\n- Breathable mesh design<br>- Foam cushioning<br>- Flexible Nike Free sole<br>- Rubber tread","shipment_type":"WH","color_name":"Pale Ivory, Team Orange & Vast Grey","color_hex":"#fffbf0","cart_price_rules":null,"attributes":null,"simples":null,"sustainability":null,"link":"free-metcon-3-women-s-969244.html","activated_at":"2020-08-26 13:51:15","return_policy_message":{"message":"This product qualifies for 30 day free returns","bold_substring":"free returns"},"categories_translated":"Shoes|Training|Performance Shoes","category_path":null,"category_ids":null,"related_products":null,"image_products":null,"attribute_set_identifier":"SF","supplier":"NIKE AUSTRALIA PTY LTD","wannaby_id":null,"citrus_ad_id":null,"associated_skus":"","size_guide_url":"https:\/\/www.theiconic.com.au\/index\/sizeguidemain?for=SF&brand=Nike&gender=female","related":{"count":2,"label":"Colour","visible":true,"message":"More colours available"},"variants":{"count":2,"label":"Colour","visible":true,"message":"More colours available"},"_embedded":{"brand":{"id":126,"name":"Nike","url_key":"nike","image_url":"http:\/\/static.theiconic.com.au\/b\/nike.jpg","banner_url":null,"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/brands\/nike"}}},"gender":{"id":2,"name":"female","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/genders\/female"}}},"shops":[{"is_default":false,"name":"sports","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/sports"}}},{"is_default":true,"name":"shop","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/shop"}}}],"images":[{"url":"http:\/\/static.theiconic.com.au\/p\/nike-7607-442969-1.jpg","thumbnail":"\/\/static.theiconic.com.au\/p\/nike-7607-442969-1.jpg"}]},"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products\/NI126SF22XWB"}}},{"video_count":0,"price":140,"markdown_price":140,"special_price":0,"returnable":true,"final_sale":false,"stock_update":null,"final_price":140,"sku":"NI126SF79ORC","name":"Zoom Winflo 7 - Women\'s","ribbon":"new","messaging":{"marketing":[{"type":"new","short":"New","medium":"New arrival","long":"New arrival","color":"#42ABC8","url":null}],"operational":[]},"color_name_brand":"Black, White & Anthracite","short_description":"- Breathable mesh with perforations<br>\n- Zoom Air units in forefoot for targeted responsiveness underfoot<br>\n- Contoured counter for sculpted fit<br>\n- Forefoot pistons for a greater underfoot response<br>","shipment_type":"WH","color_name":"Black, White & Anthracite","color_hex":"#000000","cart_price_rules":null,"attributes":null,"simples":null,"sustainability":null,"link":"zoom-winflo-7-women-s-1032798.html","activated_at":"2020-08-28 10:11:17","return_policy_message":{"message":"This product qualifies for 30 day free returns","bold_substring":"free returns"},"categories_translated":"Shoes|Running|Performance Shoes","category_path":null,"category_ids":null,"related_products":null,"image_products":null,"attribute_set_identifier":"SF","supplier":"NIKE AUSTRALIA PTY LTD","wannaby_id":null,"citrus_ad_id":null,"associated_skus":"","size_guide_url":"https:\/\/www.theiconic.com.au\/index\/sizeguidemain?for=SF&brand=Nike&gender=female","related":{"count":1,"label":"Colour","visible":true,"message":null},"variants":{"count":1,"label":"Colour","visible":true,"message":null},"_embedded":{"brand":{"id":126,"name":"Nike","url_key":"nike","image_url":"http:\/\/static.theiconic.com.au\/b\/nike.jpg","banner_url":null,"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/brands\/nike"}}},"gender":{"id":2,"name":"female","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/genders\/female"}}},"shops":[{"is_default":false,"name":"sports","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/sports"}}},{"is_default":true,"name":"shop","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/shop"}}}],"images":[{"url":"http:\/\/static.theiconic.com.au\/p\/nike-3083-8972301-1.jpg","thumbnail":"\/\/static.theiconic.com.au\/p\/nike-3083-8972301-1.jpg"}]},"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products\/NI126SF79ORC"}}},{"video_count":0,"price":150,"markdown_price":150,"special_price":0,"returnable":true,"final_sale":false,"stock_update":null,"final_price":150,"sku":"NI126SF75HJG","name":"Legend React 3 - Women\'s","ribbon":"new","messaging":{"marketing":[{"type":"new","short":"New","medium":"New arrival","long":"New arrival","color":"#42ABC8","url":null}],"operational":[]},"color_name_brand":"White, Glacier Ice, Black, Barely Volt & Burnt Crimson","short_description":"- Ventilated mesh upper <br>\n- React heel cup; TPU heel strap <br>\n- Full-length react foam mid-sole <br>\n- Rubber traction outsole ","shipment_type":"WH","color_name":"White, Glacier Ice, Black, Barely Volt & Burnt Crimson","color_hex":"#ffffff","cart_price_rules":null,"attributes":null,"simples":null,"sustainability":null,"link":"legend-react-3-women-s-1032795.html","activated_at":"2020-08-28 08:20:37","return_policy_message":{"message":"This product qualifies for 30 day free returns","bold_substring":"free returns"},"categories_translated":"Shoes|Training|Performance Shoes","category_path":null,"category_ids":null,"related_products":null,"image_products":null,"attribute_set_identifier":"SF","supplier":"NIKE AUSTRALIA PTY LTD","wannaby_id":null,"citrus_ad_id":null,"associated_skus":"","size_guide_url":"https:\/\/www.theiconic.com.au\/index\/sizeguidemain?for=SF&brand=Nike&gender=female","related":{"count":0,"label":"Colour","visible":true,"message":null},"variants":{"count":0,"label":"Colour","visible":true,"message":null},"_embedded":{"brand":{"id":126,"name":"Nike","url_key":"nike","image_url":"http:\/\/static.theiconic.com.au\/b\/nike.jpg","banner_url":null,"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/brands\/nike"}}},"gender":{"id":2,"name":"female","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/genders\/female"}}},"shops":[{"is_default":false,"name":"sports","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/sports"}}},{"is_default":true,"name":"shop","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/shop"}}}],"images":[{"url":"http:\/\/static.theiconic.com.au\/p\/nike-2005-5972301-1.jpg","thumbnail":"\/\/static.theiconic.com.au\/p\/nike-2005-5972301-1.jpg"}]},"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products\/NI126SF75HJG"}}},{"video_count":0,"price":170,"markdown_price":170,"special_price":0,"returnable":true,"final_sale":false,"stock_update":null,"final_price":170,"sku":"NI126SH28SPB","name":"Air Max 90 365 - Women\'s","ribbon":"new","messaging":{"marketing":[{"type":"new","short":"New","medium":"New arrival","long":"New arrival","color":"#42ABC8","url":null}],"operational":[]},"color_name_brand":"White & Black","short_description":"- Microsuede, mesh and smooth leather upper<br>- Brand logo to tongue and heel counter<br>- Rubber outsole<br>- Foam sole with visible Max Air cushioning<br><br>","shipment_type":"WH","color_name":"White & Black","color_hex":"#ffffff","cart_price_rules":null,"attributes":null,"simples":null,"sustainability":null,"link":"air-max-90-365-women-s-1031949.html","activated_at":"2020-08-27 18:51:26","return_policy_message":{"message":"This product qualifies for 30 day free returns","bold_substring":"free returns"},"categories_translated":"Shoes|Sneakers|Low-Tops|Lifestyle Shoes|Low Top Sneakers|Lifestyle Sneakers","category_path":null,"category_ids":null,"related_products":null,"image_products":null,"attribute_set_identifier":"SH","supplier":"NIKE AUSTRALIA PTY LTD","wannaby_id":null,"citrus_ad_id":null,"associated_skus":"","size_guide_url":"https:\/\/www.theiconic.com.au\/index\/sizeguidemain?for=SH&brand=Nike&gender=female","related":{"count":0,"label":"Colour","visible":true,"message":null},"variants":{"count":0,"label":"Colour","visible":true,"message":null},"_embedded":{"brand":{"id":126,"name":"Nike","url_key":"nike","image_url":"http:\/\/static.theiconic.com.au\/b\/nike.jpg","banner_url":null,"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/brands\/nike"}}},"gender":{"id":2,"name":"female","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/genders\/female"}}},"shops":[{"is_default":false,"name":"sports","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/sports"}}},{"is_default":true,"name":"shop","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/shop"}}}],"images":[{"url":"http:\/\/static.theiconic.com.au\/p\/nike-9683-9491301-1.jpg","thumbnail":"\/\/static.theiconic.com.au\/p\/nike-9683-9491301-1.jpg"}]},"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products\/NI126SH28SPB"}}},{"video_count":0,"price":109,"markdown_price":109,"special_price":0,"returnable":true,"final_sale":false,"stock_update":null,"final_price":109,"sku":"PE745AA98NYB","name":"Strike Run Leggings","ribbon":"new","messaging":{"marketing":[{"type":"new","short":"New","medium":"New arrival","long":"New arrival","color":"#42ABC8","url":null}],"operational":[]},"color_name_brand":"Black","short_description":"With sportive panelled sides and flatlocked seams, the <b>Strike Run Leggings\n<\/b> are a studio-to-street favourite from active-lifestyle label <b>P.E Nation<\/b>.<br><br>Length: Inside Leg: 62cm. Rise: 25cm. Leg Opening: 19cm (size small). Our model is 175.3cm (5\u20199\u201d) tall with a 78.7cm (31\u201d) bust, a 61.0cm (24\u201d) waist and 88.9cm (35\u201d) hips.","shipment_type":"WH","color_name":"Black","color_hex":"#000000","cart_price_rules":null,"attributes":null,"simples":null,"sustainability":null,"link":"strike-run-leggings-1118019.html","activated_at":"2020-08-26 08:53:48","return_policy_message":{"message":"This product qualifies for 30 day free returns","bold_substring":"free returns"},"categories_translated":"Clothing|Tights|Sports Tights|78 Tights","category_path":null,"category_ids":null,"related_products":null,"image_products":null,"attribute_set_identifier":"AA","supplier":"PE Nation Pty Ltd","wannaby_id":null,"citrus_ad_id":null,"associated_skus":"","size_guide_url":"https:\/\/www.theiconic.com.au\/index\/sizeguidemain?for=AA&brand=P.E+Nation&gender=female","related":{"count":0,"label":"Colour","visible":true,"message":null},"variants":{"count":0,"label":"Colour","visible":true,"message":null},"_embedded":{"brand":{"id":3745,"name":"P.E Nation","url_key":"pe-nation","image_url":"http:\/\/static.theiconic.com.au\/b\/pe-nation.jpg","banner_url":null,"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/brands\/pe-nation"}}},"gender":{"id":2,"name":"female","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/genders\/female"}}},"shops":[{"is_default":false,"name":"sports","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/sports"}}},{"is_default":true,"name":"shop","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/shop"}}}],"images":[{"url":"http:\/\/static.theiconic.com.au\/p\/pe-nation-3301-9108111-1.jpg","thumbnail":"\/\/static.theiconic.com.au\/p\/pe-nation-3301-9108111-1.jpg"}]},"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products\/PE745AA98NYB"}}},{"video_count":0,"price":859,"markdown_price":859,"special_price":429.5,"returnable":true,"final_sale":false,"stock_update":null,"final_price":429.5,"sku":"SA696AC03KPO","name":"Cosmolite 3.0 Spinner 69\/25","ribbon":"campaign","messaging":{"marketing":[{"type":"campaign","short":"25% OFF AT CHECKOUT","medium":"25% OFF AT CHECKOUT","long":"25% OFF AT CHECKOUT","color":"#349C5F","url":"\/all\/?campaign=lp-25-off-selected-styles-a20"}],"operational":[]},"color_name_brand":"Silver","short_description":"<p><strong>PLEASE NOTE - THE ICONIC IS UNABLE TO SHIP THIS PRODUCT TO NEW ZEALAND<\/strong><\/p><br \/><br \/><p>Master your next vacation prep&nbsp;with <strong>Samsonite<\/strong>\'s practical, unique and high-tech <strong>Cosmolite 3.0 Spinner 29\/25<\/strong> suitcase.<\/p><br \/><br \/><p>- Dimensions: H69cm x W46cm x D29cm&nbsp;<br \/><br \/>- Rectangular silhouette; three-dimensional shell-like texture<br \/><br \/>- Curv material by Propex in Germany<br \/><br \/>- Silver shade; woven finish<br \/><br \/>- Adjustable T-shaped handle<br \/><br \/>- Integrated three-digit TSA combination lock<br \/><br \/>- 360-degree multi-directional spinner wheels<br \/><br \/>- Zipper protection<br \/><br \/>- Elastic cross ribbons; fasten internal items<br \/><br \/>- Gripped bottom helps when lifting<br \/><br \/>- Internal divider pad for organisation&nbsp;<\/p><br \/><br \/><p>Material: 100% Curv<\/p>","shipment_type":"DS","color_name":"Silver","color_hex":"#E3E6E8","cart_price_rules":[{"url_key":"","discount":0,"display_name":"25% OFF AT CHECKOUT","start_date":"2020-08-24 06:45:00","end_date":"2020-08-29 06:45:00","_locale":"en"}],"attributes":null,"simples":null,"sustainability":null,"link":"cosmolite-3-0-spinner-69-25-793981.html","activated_at":"2019-03-28 16:09:01","return_policy_message":{"message":"This product qualifies for 30 day free returns","bold_substring":"free returns"},"categories_translated":"Accessories|Travel and Luggage|Hard-Case Luggage","category_path":null,"category_ids":null,"related_products":null,"image_products":null,"attribute_set_identifier":"AC","supplier":"Samsonite","wannaby_id":null,"citrus_ad_id":null,"associated_skus":"","size_guide_url":"https:\/\/www.theiconic.com.au\/index\/sizeguidemain?for=AC&brand=Samsonite&gender=unisex","related":{"count":1,"label":"Colour","visible":true,"message":null},"variants":{"count":1,"label":"Colour","visible":true,"message":null},"_embedded":{"brand":{"id":4696,"name":"Samsonite","url_key":"samsonite","image_url":null,"banner_url":null,"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/brands\/samsonite"}}},"gender":{"id":3,"name":"unisex","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/genders\/unisex"}}},"shops":[{"is_default":true,"name":"shop","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/shop"}}}],"images":[{"url":"http:\/\/static.theiconic.com.au\/p\/samsonite-8174-189397-1.jpg","thumbnail":"\/\/static.theiconic.com.au\/p\/samsonite-8174-189397-1.jpg"}]},"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products\/SA696AC03KPO"}}},{"video_count":0,"price":170,"markdown_price":170,"special_price":0,"returnable":true,"final_sale":false,"stock_update":null,"final_price":170,"sku":"NI126SF74CPD","name":"Free Run 5.0 2020 - Women\'s","ribbon":"new","messaging":{"marketing":[{"type":"new","short":"New","medium":"New arrival","long":"New arrival","color":"#42ABC8","url":null}],"operational":[]},"color_name_brand":"Pale Ivory, Shimmer & Sail","short_description":"- Seamless, secure lacing design<br>- Three foam pods in the heel<br>- Heel pull tab&nbsp;<br>- Firm midsole foam","shipment_type":"WH","color_name":"Pale Ivory, Shimmer & Sail","color_hex":"#ffffff","cart_price_rules":null,"attributes":null,"simples":null,"sustainability":null,"link":"free-run-5-0-2020-women-s-969240.html","activated_at":"2020-08-27 17:15:16","return_policy_message":{"message":"This product qualifies for 30 day free returns","bold_substring":"free returns"},"categories_translated":"Shoes|Running|Performance Shoes","category_path":null,"category_ids":null,"related_products":null,"image_products":null,"attribute_set_identifier":"SF","supplier":"NIKE AUSTRALIA PTY LTD","wannaby_id":null,"citrus_ad_id":null,"associated_skus":"","size_guide_url":"https:\/\/www.theiconic.com.au\/index\/sizeguidemain?for=SF&brand=Nike&gender=female","related":{"count":0,"label":"Colour","visible":true,"message":null},"variants":{"count":0,"label":"Colour","visible":true,"message":null},"_embedded":{"brand":{"id":126,"name":"Nike","url_key":"nike","image_url":"http:\/\/static.theiconic.com.au\/b\/nike.jpg","banner_url":null,"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/brands\/nike"}}},"gender":{"id":2,"name":"female","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/genders\/female"}}},"shops":[{"is_default":false,"name":"sports","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/sports"}}},{"is_default":true,"name":"shop","_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/shops\/shop"}}}],"images":[{"url":"http:\/\/static.theiconic.com.au\/p\/nike-7725-042969-1.jpg","thumbnail":"\/\/static.theiconic.com.au\/p\/nike-7725-042969-1.jpg"}]},"_links":{"self":{"href":"https:\/\/eve.theiconic.com.au\/catalog\/products\/NI126SF74CPD"}}}]},"page_count":5962,"page_size":10,"total_items":59612,"page":1}';
    
	
	
	$objs = json_decode($obj, TRUE);
	return addVideoLink($objs);
});

function addVideoLink($objArray){
	foreach($objArray as $key => $value){
		if($key == '_embedded'){
			foreach($value["product"] as $k => $val){
				$sku = $val["sku"];
				$video_link = ([
					"url" => "https://eve.theiconic.com.au/products/".$sku."/videos"
				]);

				$objArray["_embedded"]["product"][$k]["video"] = $video_link;
			}
		}
	}
	return $objArray;
}

