<?php
$adTime = 123;
$id = 11;
$adPositionDetail = [];
$data = [];
if ($adTime > 0
    && $id === $adPositionDetail['id']
    && $adTime >= $data['payment_time'] && $adTime <= $data['payment_time'] + 86400
) {
    $data['is_start_ad'] = 1;
}


function test_test()
{
    echo 'da';
}


test_test();


// fixed #1