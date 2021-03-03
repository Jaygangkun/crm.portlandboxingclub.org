<?php

if(!isset($_POST['api_key'])){
    echo json_encode(array(
        'success' => false,
    ));
    exit();
}

$api_key = $_POST['api_key'];

if(isset($_POST['modified_before']) && isset($_POST['modified_after']) && $_POST['modified_before'] != '' && $_POST['modified_after'] != ''){
    $modified_after = $_POST['modified_after'];
    $modified_before = $_POST['modified_before'];

    $modified_after = str_replace(' ', 'T', $modified_after);
    $modified_after .= 'Z';

    $modified_before = str_replace(' ', 'T', $modified_before);
    $modified_before .= 'Z';
}
else{
    $modified_after = '';
    $modified_before = '';
}

function getOrders($api_key, $modified_after, $modified_before, $nextPageUrl){
    $curl = curl_init();

    if($nextPageUrl == ''){
        if($modified_after != '' && $modified_before != ''){
            $orders_url = 'https://api.squarespace.com/1.0/commerce/orders?modifiedAfter='.$modified_after.'&modifiedBefore='.$modified_before;
        }
        else{
            $orders_url = 'https://api.squarespace.com/1.0/commerce/orders';
        }
        
    }
    else{
        $orders_url = $nextPageUrl;
    }
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => $orders_url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'User-Agent: Wordpress',
        'Authorization: Bearer '.$api_key
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);

    return $response;
}

$echo_data = array(
    'success' => true,
    'orders' => array()
);

$results = array();

$nextPageUrl = '';
while(1){
    $response = getOrders($api_key, $modified_after, $modified_before, $nextPageUrl);
    $resp_data = json_decode($response, true);
    if(!isset($resp_data['pagination'])){
        echo json_encode(array(
            'success' => false,
            'resp_data' => $results
        ));
        exit();
    }
    else{
        $results = array_merge($results, $resp_data['result']);

        if($resp_data['pagination']['hasNextPage']){
            $nextPageUrl = $resp_data['pagination']['nextPageUrl'];
        }
        else{
            break;
        }
    }
}

$echo_data['orders'] = $results;
echo json_encode($echo_data);
?>