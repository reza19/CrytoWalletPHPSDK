<?php
include __DIR__ . '/Rwallet.php';

$api_key = '0d9a19bdfe4599cbabdb45a0405ae452';
$secret_key = '1de1ad1846f08ac9eb3e7df7d718283e7cc71254fc13c0f7524b52e424f928f5d6b972a9';


$Rwallet = new Rwallet($api_key,$secret_key);



$label = "Hotwallet-1";
$res = $Rwallet->getAddressListByLabel($label);
//echo json_encode($res,JSON_PRETTY_PRINT);
print_r($res);

/*
Array
(
    [items] => Array
        (
            [0] => Array
                (
                    [id] => 8
                    [address] => 0xdfe57fb8d708da0bd49d6135657304e838ae3e74
                    [label] => Hotwallet-1
                    [address_id] => 8
                    [date] => 2022-03-24T09:51:20+0000
                    [db_balance] => Array
                        (
                            [BNB] => 0
                            [ETH] => 0
                            [USDT] => 0
                            [USDC] => 0
                            [BTCB] => 0
                            [ADA] => 0
                            [TRX] => 0
                            [XRP] => 0
                            [AVAX] => 0
                            [BUSD] => 0
                            [DOT] => 0
                            [DOGE] => 0
                            [SHIBA] => 0
                            [DAI] => 0
                            [FTM] => 0
                        )

                )

        )

    [success] => 1
    [status] => 200
)
 * */