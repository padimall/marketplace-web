<?php
include('api_request.php');
class Product
{
    public function __construct()
    {
        $api_request = new Api_request();
        $this->api_request = $api_request;
    }

    public function view_product()
    {
        $api_endpoint = "/product";
        $params = "request_type=1";
        $api_request = $this->api_request;
        $request = $api_request->request_post($api_endpoint, $params);

        return array(
            "status" => $request['status'], //memberitahukan status dalam bentuk http code agar bisa di cek di tampilan
            "result" => $request['result']
        );
    }

    public function view_product_categories()
    {
        $api_endpoint = "/product-category";
        $params = "request_type=1";
        $api_request = $this->api_request;
        $request = $api_request->request_post($api_endpoint, $params);

        return array(
            "status" => $request['status'], //memberitahukan status dalam bentuk http code agar bisa di cek di tampilan
            "result" => $request['result']
        );
    }
}