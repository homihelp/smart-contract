<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.etherscan.io/api?module=stats&action=tokensupply&contractaddress=0xCa208BfD69ae6D2667f1FCbE681BAe12767c0078&apikey=<!-- Homihelp Etherscan Verified API For Access -->"); //ETHERSCAN MAX SUPPLLY API

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($ch);

$json = json_decode($output, true);

$a = $json['result'];                                    // Max Supply [FROM ETHERSCAN]
$b = 30000000;                                          //  Circulation Supply [UNLOCKED]
$c = 30000000;                                           // Rewards & Incentives [UNLOCKED]
$d = 20000000;                                          //  Development & Marketing [LOCKED]
$e = 5000000;                                             //  Future Investors [LOCKED]
$f = 15000000;                                           //  Founder [LOCKED]

echo ($a - ($d + $e + $f));    // [Max Supply - (Development & Marketing + Future Investors + Founder)] 

curl_close($ch);
?>
