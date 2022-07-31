<?php

include __DIR__ . '/Rwallet.php';

$api_key = '0d9a19bdfe4599cbabdb45a0405ae452';
$secret_key = '1de1ad1846f08ac9eb3e7df7d718283e7cc71254fc13c0f7524b52e424f928f5d6b972a9';


$Rwallet = new Rwallet($api_key,$secret_key);




$label = "Hotwallet-1";
$res = $Rwallet->generateAddress($label);
print_r($res);

/*
 *Array
(
    [address_id] => 8
    [address] => 0xdfe57fb8d708da0bd49d6135657304e838ae3e74
    [label] => Hotwallet-1
    [success] => 1
    [status] => 200
)



 *
 *  Array
(
    [errors] => Array
        (
            [auth] => INVALID_API_KEY
        )

    [success] =>
    [status] => 403
)

 * */