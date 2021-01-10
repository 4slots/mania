<?php

/* import checksum generation utility */
require_once("./PaytmChecksum.php");

/* initialize an array */
$paytmParams = array();

/* add parameters in Array */
$paytmParams["MID"] = "ZaKhJF45180846090084";
$paytmParams["ORDERID"] = "YOUR_ORDERID_HERE";

/**
* Generate checksum by parameters we have
* Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
$paytmChecksum = PaytmChecksum::generateSignature($paytmParams, 'lw1M@U3lmwkoQ7PU');
echo sprintf("generateSignature Returns: %s\n", $paytmChecksum);
