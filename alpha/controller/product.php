<?php
class Product
{
    private $header;

    public function __construct()
    {
        //get class api_key to get bearer key
        include('./config/api_key.php');

        $key = new Api_key;
        $bearerKey = $key->getKey();

        $header = array(
            "Content-Type: application/json",
            "X-Requested-With: XMLHttpRequest",
            "Authorization: Bearer $bearerKey"
        );

        $this->header = $header;
    }

    public function view_product()
    {
        $header = $this->header;

        // send a HTTP request with curl
        $ch = curl_init("https://api.padimall.id/api/v1/product?request_type=1");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        //menentukan method request http
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $result = json_decode($result, TRUE);
        $result = $result['data'];

        //kondisi jika response 422
        if ($httpCode == 422) {
            return array("0", null);
        } else if ($httpCode == 200) {
            return array("1", $result);
        }
    }
}