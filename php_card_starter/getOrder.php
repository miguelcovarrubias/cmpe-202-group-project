<?php
header("Content-Type:application/json");
if (isset($_GET['order_id']) && $_GET['order_id']!="") {
    require_once('dbConnection.php');
    $order_id = $_GET['order_id'];
    $result = mysqli_query(
        $conn,
        "SELECT * FROM orders_description WHERE order_id=$order_id");
    if(mysqli_num_rows($result)>0){
        $rows=array();
        while($row = mysqli_fetch_assoc($result))
        {
            $rows[]=$row;
        }
        echo json_encode($rows);
        $row = mysqli_fetch_array($result);
        $beverageName = $row['beverage_name'];
        $beveragePrice = $row['price'];
        $beverageCupSize = $row['cup_size'];
        $beverageOtherOptions = $row['other_options'];
        $response_code = $row['response_code'];
        $response_desc = $row['response_desc'];
        response($order_id, $beverageName, $beveragePrice, $beverageCupSize, $beverageOtherOptions, $response_code,$response_desc);
        mysqli_close($conn);
    }else{
        response(NULL, NULL, NULL, NULL, NULL,200,"No Record Found");
    }
}else{
    response(NULL, NULL, NULL, NULL, NULL,400,"Invalid Request");
}

function response($order_id, $beverageName, $beveragePrice, $beverageCupSize, $beverageOtherOptions, $response_code,$response_desc){
    $response['order_id'] = $order_id;
    $response['beverage_name'] = $beverageName;
    $response['price'] = $beveragePrice;
    $response['cup_size'] = $beverageCupSize;
    $response['other_options'] = $beverageOtherOptions;
    $response['response_code'] = $response_code;
    $response['response_desc'] = $response_desc;

    $json_response = json_encode($response);
//    echo $json_response;
}
?>
