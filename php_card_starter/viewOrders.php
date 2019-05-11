<?php
require_once('dbConnection.php');
include_once('userSession.php');
checkSession();

$user_name = $_SESSION['name'];
#if(isset($user_name)) echo "<u>".$user_name.", Active Cards:</u><br>";

//fetch current user's card numbers
$ordersList = mysqli_query($conn, "
select orders_status.order_id as order_id, orders_status.is_done, total_price_amount, beverage_name, cup_size, other_options, price as beverage_price from orders_status 
join orders_description 
on orders_status.order_id = orders_description.order_id
join users_info
on users_info.user_id = orders_status.user_id 
where users_info.username = '$user_name' order by orders_status.order_id desc;
");

echo "<h2> These are your orders $user_name! : </h2>";
$orderId = -1;
while($tableRowIndex = mysqli_fetch_row($ordersList)) {

    if($orderId != $tableRowIndex[0]) {
        if($orderId != -1) {
            echo "</table>";
        }
        echo '<br>';
        $orderId = $tableRowIndex[0];
        echo "Order Id:  $tableRowIndex[0]";
        echo '<br>';
        echo "Is Order Ready?:  $tableRowIndex[1]";
        echo '<br>';
        echo "Order Total $:  $tableRowIndex[2]";

        echo "<table><tr><th>Beverage Name</th><th>Cup Size</th><th>Other Options</th><th>Price $</th></tr>";
        echo "<tr><td>" . $tableRowIndex[3]. "</td><td>" . $tableRowIndex[4]. "</td><td>" . $tableRowIndex[5]. "</td><td>" . $tableRowIndex[6]. "</td></tr>";
        echo '<br>';
    } else {
        echo "<tr><td>" . $tableRowIndex[3]. "</td><td>" . $tableRowIndex[4]. "</td><td>" . $tableRowIndex[5]. "</td><td>" . $tableRowIndex[6]. "</td></tr>";
    }


//    echo "<td>{$tableRowIndex[1], $tableRowIndex[2]}</td>";
//    echo '<br>';

}

//echo '<a href=userDashboard.php><button>User Dashboard</button></a>';


//while($row = mysqli_fetch_assoc($cardNumber)) {
//    echo "card: ".$row['order_id']."<br>";
//}
?>
<!DOCTYPE html>
<html>
<head>
    <title>My orders</title>
</head>
<body>
</body>
</html>