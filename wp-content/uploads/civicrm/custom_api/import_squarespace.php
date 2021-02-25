<?php

if(!isset($_POST['api_key'])){
    echo json_encode(array(
        'success' => false,
    ));
    exit();
}

$api_key = $_POST['api_key'];
function getTransactions($api_key, $nextPageUrl){
    $curl = curl_init();

    if($nextPageUrl == ''){
        $transactions_url = 'https://api.squarespace.com/1.0/commerce/transactions';
    }
    else{
        $transactions_url = $nextPageUrl;
    }
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => $transactions_url,
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
    'donations' => array()
);

$documents = array();

$nextPageUrl = '';
while(1){
    $response = getTransactions($api_key, $nextPageUrl);
    $resp_data = json_decode($response, true);
    if(!isset($resp_data['pagination'])){
        echo json_encode(array(
            'success' => false,
            'resp_data' => $documents
        ));
        exit();
    }
    else{
        $documents = array_merge($documents, $resp_data['documents']);

        if($resp_data['pagination']['hasNextPage']){
            $nextPageUrl = $resp_data['pagination']['nextPageUrl'];
        }
        else{
            break;
        }
    }
}

$echo_data['donations'] = $documents;
echo json_encode($echo_data);
?>