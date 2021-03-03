<?php

if(!isset($_POST['token'])){
    echo json_encode(array(
        'success' => false,
    ));
    exit();
}

$token = $_POST['token'];

$start_at = '';
$end_at = '';
if(!isset($_POST['start_at'])){
    echo json_encode(array(
        'success' => false,
        'message' => 'start_at is empty'
    ));
    exit();
}
$start_at = $_POST['start_at'];

if(!isset($_POST['end_at'])){
    echo json_encode(array(
        'success' => false,
        'message' => 'end_at is empty'
    ));
    exit();
}
$end_at = $_POST['end_at'];

function getOrders($token, $start_at, $end_at){
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
                            "start_at": "'.$start_at.'",
                            "end_at": "'.$end_at.'"
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

    return $response;
}

$response = getOrders($token, $start_at, $end_at);

$resp_data = json_decode($response, true);

if(!isset($resp_data['orders'])){
    echo json_encode(array(
        'success' => false,
    ));
    exit();
}

// finding customer information
$orders = $resp_data['orders'];
$resp_orders = array();
$found_customers = array();

function getCustomer($token, $customer_id){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://connect.squareup.com/v2/customers/'.$customer_id,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Square-Version: 2021-01-21',
        'Authorization: Bearer '.$token
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);

    return $response;
}

foreach($orders as $key => $order){
    if(!isset($order['tenders'])){
        continue;
    }

    $tenders = $order['tenders'];

    foreach($tenders as $key1 => $tender){
        if(!isset($tender['customer_id'])){
            continue;
        }

        $customer_id = $tender['customer_id'];

        if(!isset($found_customers[$customer_id])){
            $found_customers[$customer_id] = json_decode(getCustomer($token, $customer_id), true);
        }
    }

    $resp_orders[] = $order;
}


echo json_encode(array(
    'success' => true,
    'orders' => $resp_orders,
    'customers' => $found_customers
));
?>