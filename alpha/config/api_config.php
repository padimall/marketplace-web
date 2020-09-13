<?php
class Api_config
{
    function getKey()
    {
        include('config.php');
        $sql = $pdo->prepare("SELECT bearer_key FROM api_key WHERE id = 1 ");
        $sql->execute();
        $data = $sql->fetch();
        $bearerKey = $data['bearer_key'];

        //untuk versioning versi api, dilakukan di sini
        return array(
            "bearer_key" => $bearerKey, //mendapatkan bearer key dev
            "version" => "v1", //version api yang sedang digunakan
            "api_address" => "https://api.padimall.id/api/" //endpoint api yang digunakan
        );
    }
}