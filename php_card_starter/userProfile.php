<?php
require_once('dbConnection.php');
include_once('userSession.php');
$user_name = $_SESSION['name'];

if (isset($_GET['username']) && $_GET['username']!="" or $user_name != '') {
    if ($user_name == '') {
        $user_name = $_GET['username'];
    }
    $result3 = mysqli_query($conn, "SELECT id, first_name, last_name, username, email, card_id as main_card_id FROM user_info where username = '$user_name'");

    if (mysqli_num_rows($result3) > 0) {
        while ($row3 = mysqli_fetch_array($result3)) {
            $id = $row3['id'];
            $userName = $row3['user_name'];
            $userUserName = $row3['user_username'];
            $email = $row3['user_email'];
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
        <td valign="top"><div align="left">Name:</div></td>
        <td valign="top"><?php echo $userName ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Email:</div></td>
        <td valign="top"><?php echo $email ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Username:</div></td>
        <td valign="top"><?php echo $userUserName ?></td>
    </tr>
</table>
<p><a href="userDashboard.php"><button>User Dashboard</button></a></p>

</body>
</html>
