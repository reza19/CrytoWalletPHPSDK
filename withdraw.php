<?php
include __DIR__ . '/Rwallet.php';

$api_key = '0d9a19bdfe4599cbabdb45a0405ae452';
$secret_key = '1de1ad1846f08ac9eb3e7df7d718283e7cc71254fc13c0f7524b52e424f928f5d6b972a9';


$Rwallet = new Rwallet($api_key,$secret_key);


$coin = $Rwallet::COIN_BNB; //BNB
$address_id = 4; //from
$to_address = '0xdfe57fb8d708da0bd49d6135657304e838ae3e74';
$amount = '0.001';

$res = $Rwallet->withdraw($coin,$address_id,$to_address,$amount,'PUT_UNIQUE_REQUEST_ID');
print_r($res);

/*
Array
(
    [txid] => 0xad3fac8e17ba1df8ae6f0aeea83fbf2d8824f1a72385e7f4487194bb33716cb2
    [success] => 1
    [status] => 200
)

----
Array ( [name] => Conflict [message] => This request has already been processed [code] => 0 [status] => 409 ) 

Array
(
    [errors] => Array
        (
            [amount] => Array
                (
                    [0] => Your balance is low
                )

        )

    [success] =>
    [status] => 422
)



 * */
