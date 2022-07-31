<?php
include __DIR__ . '/Rwallet.php';

$api_key = '0d9a19bdfe4599cbabdb45a0405ae452';
$secret_key = '1de1ad1846f08ac9eb3e7df7d718283e7cc71254fc13c0f7524b52e424f928f5d6b972a9';


$Rwallet = new Rwallet($api_key,$secret_key);


$res = $Rwallet->transactionList([
    'page' => 1,
    'limit' => 3,
    //'address_id' => 1,
    //'type' => $tron24::TYPE_DEPOSIT,
    //'txid' => '08ae02058de8e24f59a1985f97e2dc73209860f496e53f1e19eff0179a0b1935',
    //'coin' => $Rwallet::COIN_TRX,
    //'status' => 'SUCCESS'
]);
print_r($res);

/*
Array
(
    [items] => Array
        (
            [0] => Array
                (
                    [id] => 22
                    [txid] => 0xa4df431ce6295e0dfb3e0f9bccca758e27eecfe8d52174b1f24882fa5f46ae57
                    [blockchain_time] => 1648057504
                    [blockchain_date] => 2022-03-23T17:45:04+0000
                    [fee] => 0.000255455
                    [fee_coin] => TRX
                    [status] => Success
                    [owner_address] => 0x4cfe4eadd9374b83bb78497aa66ec110deb48576
                    [amount] => 0.014
                    [to_address] => 0xcd241a928d21ebd4299655f4f54b9363e8364032
                    [coin] => XRP
                    [address_id] => 4
                    [address_label] => hotwallet
                    [type] => withdraw
                    [block_id] => 16315215
                    [time] => 1648057503
                    [date] => 2022-03-23T17:45:03+0000
                )

            [1] => Array
                (
                    [id] => 21
                    [txid] => 0xa16e2ceab816dbb6fb8171879c76a656f9fb33b2a1b8d7d417e45f070b6b121b
                    [blockchain_time] => 1648057323
                    [blockchain_date] => 2022-03-23T17:42:03+0000
                    [fee] => 0
                    [fee_coin] => TRX
                    [status] => Success
                    [owner_address] => 0xe2fc31f816a9b94326492132018c3aecc4a93ae1
                    [amount] => 0.76
                    [to_address] => 0x4cfe4eadd9374b83bb78497aa66ec110deb48576
                    [coin] => XRP
                    [address_id] => 4
                    [address_label] => hotwallet
                    [type] => deposit
                    [block_id] => 16315153
                    [time] => 1648057322
                    [date] => 2022-03-23T17:42:02+0000
                )

            [2] => Array
                (
                    [id] => 20
                    [txid] => 0x1a54eb279293d01029f62805e19cf92aa2a545d5e09b69a1c657a867c83188ad
                    [blockchain_time] => 1647953704
                    [blockchain_date] => 2022-03-22T12:55:04+0000
                    [fee] => 0.000255515
                    [fee_coin] => TRX
                    [status] => Success
                    [owner_address] => 0x4cfe4eadd9374b83bb78497aa66ec110deb48576
                    [amount] => 8
                    [to_address] => 0xcd241a928d21ebd4299655f4f54b9363e8364032
                    [coin] => USDT
                    [address_id] => 4
                    [address_label] => hotwallet
                    [type] => withdraw
                    [block_id] => 16280873
                    [time] => 1647953703
                    [date] => 2022-03-22T12:55:03+0000
                )

        )

    [total] => 8
    [limit] => 3
    [page] => 1
    [success] => 1
    [status] => 200
)

 * */