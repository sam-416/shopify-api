<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPShopify\ShopifySDK;

class ShopifyController extends Controller
{
    protected $shopify;
    protected $shopifyConfig;
    public function __construct()
    {
        
        $config = array(
            'ShopUrl' => env('SHOPIFY_SHOP_URL'),
            'AccessToken' => env('SHOPIFY_ACCESS_TOKEN')
        );
        $this->shopify = new ShopifySDK($config);

       
    }

    public function index(){
        
    }

    public function getProducts()
    {
        $products = $this->shopify->Product->get();
        // Process and return the products as needed
        return response()->json($products);
    }
}
