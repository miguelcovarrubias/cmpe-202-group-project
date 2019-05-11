<?php
require_once('dbConnection.php');
include_once('userSession.php');
$userId = $_SESSION['name'];

if (isset($_GET['username']) && $_GET['username']!="" or $userId != '') {
    if ($userId == '') {
        $userId = $_GET['username'];
    }
    $result3 = mysqli_query($conn, "SELECT user_id, first_name, last_name, username, email, card_id as main_card_id FROM users_info where user_id = '$userId'");

    if (mysqli_num_rows($result3) > 0) {
        while ($row3 = mysqli_fetch_array($result3)) {
            $id = $row3['user_id'];
            $userName = $row3['first_name'];
            $userLastName = $row3['last_name'];
            $userUserName = $row3['username'];
            $email = $row3['email'];
            $mainCardId = $row3['main_card_id'];
        }
    } else {
        response(200, "No Record Found");
    }

    function response($response_code, $response_desc)
    {

        $response['response_code'] = $response_code;
        $response['response_desc'] = $response_desc;

        $json_response = json_encode($response);
        echo $json_response;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Card</title>
</head>
<body>
<table width="398" ">
    <tr>
        <td height="26" colspan="2">Your Profile Information </td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Id:</div></td>
        <td valign="top"><?php echo $id ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">First Name:</div></td>
        <td valign="top"><?php echo $userName ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Last Name:</div></td>
        <td valign="top"><?php echo $userLastName ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Email:</div></td>
        <td valign="top"><?php echo $email ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Username:</div></td>
        <td valign="top"><?php echo $userUserName ?></td>
    </tr>
     <tr>
        <td valign="top"><div align="left">Main Card Id:</div></td>
        <td valign="top"><?php echo $mainCardId ?></td>
    </tr>
</table>
<p><a href="userDashboard.php"><button>User Dashboard</button></a></p>

</body>
</html>
