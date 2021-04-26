<?php
$callbackJSONData=file_get_contents('php://input');
$callbackData=json_decode($callbackJSONData);
$responseCode=$callbackData->ResponseCode;
$responseDescription=$callbackData->ResponseDescription;
$merchantRequestID=$callbackData->MerchantRequestID;
$checkoutRequestID=$callbackData->CheckoutRequestID;
$resultCode=$callbackData->ResultCode;
$resultDesc=$callbackData->ResultDesc;

$result=[
    "resultCode"=>$resultCode,
    "responseDescription"=>$responseDescription,
    "responseCode"=>$responseCode,
    "merchantRequestID"=>$merchantRequestID,
    "checkoutRequestID"=>$checkoutRequestID,
    "resultDesc"=>$resultDesc
];

echo $result;