<?php
include __DIR__ . '/Rwallet.php';

$api_key = '0d9a19bdfe4599cbabdb45a0405ae452';
$secret_key = '1de1ad1846f08ac9eb3e7df7d718283e7cc71254fc13c0f7524b52e424f928f5d6b972a9';


$Rwallet = new Rwallet($api_key,$secret_key);


$res = $Rwallet->getAddressList($page = 1 , $limit = 2);
print_r($res);

/*
Array
(
    [items] => Array
        (
            [0] => Array
                (
                    [id] => 4
                    [address] => 0x4cfe4eadd9374b83bb78497aa66ec110deb48576
                    [label] => hotwallet
                    [address_id] => 4
                    [date] => 2022-03-09T12:26:48+0000
                    [db_balance] => Array
                        (
                            [BNB] => 0.00438603
                            [ETH] => 0
                            [USDT] => 1.2
                            [USDC] => 0
                            [BTCB] => 0
                            [ADA] => 0
                            [TRX] => 3
                            [XRP] => 0.746
                            [AVAX] => 0
                            [BUSD] => 0
                            [DOT] => 0
                            [DOGE] => 0
                            [SHIBA] => 0
                            [DAI] => 0
                            [FTM] => 0
                        )

                )

            [1] => Array
                (
                    [id] => 5
                    [address] => 0x7160152ed9e5e174be4e3697cc1450ab9bea8cae
                    [label] => test-1
                    [address_id] => 5
                    [date] => 2022-03-09T12:50:36+0000
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

    [total] => 2
    [limit] => 2
    [page] => 1
    [success] => 1
    [status] => 200
)
 * */