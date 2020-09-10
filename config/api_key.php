<?php
class Api_key
{
    function getKey()
    {
        include('config.php');
        $sql = $pdo->prepare("SELECT bearer_key FROM api_key WHERE id = 1 ");
        $sql->execute();
        $data = $sql->fetch();
        $bearerKey = $data['bearer_key'];

        return $bearerKey;
    }
}