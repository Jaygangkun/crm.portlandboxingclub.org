<?php

if(!isset($_POST['token'])){
    echo json_encode(array(
        'success' => false,
    ));
    exit();
}

$token = $_POST['token'];

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://connect.squareup.com/v2/orders/search',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
        "query": {
        "filter": {
            "date_time_filter": {
            "created_at": {
                "start_at": "2020-01-01",
                "end_at": "2030-12-31"
            }
            },
            "state_filter": {
            "states": [
                "COMPLETED"
            ]
            }
        }
        },
        "location_ids": [
            "RQWXR9ETKRETN"
        ]
    }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Square-Version: 2021-01-21',
        'Authorization: Bearer '.$token
    ),
));

$response = curl_exec($curl);

curl_close($curl);

$resp_data = json_decode($response, true);

if(!isset($resp_data['orders'])){
    echo json_encode(array(
        'success' => false,
    ));
    exit();
}

// finding donations
$orders = $resp_data['orders'];
$resp_orders = array();

foreach($orders as $key => $order){
    if(!isset($order['line_items'])){
        continue;
    }

    $line_items = $order['line_items'];

    foreach($line_items as $key1 => $line_item){
        if($line_item['name'] == 'Donation'){
            $resp_orders[] = $order;
            break;
        }
    }
}


echo json_encode(array(
    'success' => true,
    'orders' => $resp_orders
));
?>