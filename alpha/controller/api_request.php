<?php
class Api_request
{
    public function __construct()
    {
        //get class api_config to get api details
        include('./config/api_config.php');

        $key = new Api_config;
        $api_key = $key->getKey();
        $bearerKey = $api_key["bearer_key"];

        $header = array(
            "Content-Type: application/json",
            "X-Requested-With: XMLHttpRequest",
            "Authorization: Bearer $bearerKey"
        );

        $this->header = $header;
        $this->api_endpoint = $api_key["api_address"];
        $this->api_version = $api_key["version"];
    }


    public function request_post($api_endpoint)
    {
        //menyatukan link api dengan link end point yang di inginkan
        $api_endpoint = $this->api_endpoint . $this->api_version . $api_endpoint;

        $ch = curl_init($api_endpoint);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        //menentukan method request http POST
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        //mengubah JSON menjadi array
        $result = json_decode($result, TRUE);
        $result = $result['data'];

        return array(
            "status" => $httpCode,
            "result" => $result
        );
    }
}