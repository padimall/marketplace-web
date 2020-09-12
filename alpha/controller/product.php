<?php
include('api_request.php');
class Product
{
    public function __construct()
    {
    }

    public function view_product()
    {
        $api_endpoint = "/product?request_type=1";
        $api_request = new Api_request();
        $request = $api_request->request_post($api_endpoint);

        $httpCode = $request['status'];
        $result = $request['result'];
        // // kondisi jika response 422
        if ($httpCode == 422) {
            return array("0", null);
        } else if ($httpCode == 200) {
            return array("1", $result);
        } else {
            return array("1", $result);
        }
    }

    public function view_product_categories()
    {
        $api_endpoint = "/product-category?request_type=1";
        $api_request = new Api_request();
        $request = $api_request->request_post($api_endpoint);

        $httpCode = $request['status'];
        $result = $request['result'];
        // // kondisi jika response 422
        if ($httpCode == 422) {
            return array("0", null);
        } else if ($httpCode == 200) {
            return array("1", $result);
        } else {
            return array("1", $result);
        }
    }
}