<?php
/**
 * Created by PhpStorm.
 * User: Hai Phong
 * Date: 4/20/2016
 * Time: 11:36 PM
 */

echo $_POST["test"];

//Connect to database via $db
include ('../config.php');

//establish sql query to update user with the customer_id and relevant details
$sql_query = "UPDATE customer_order
              SET
              order_net_total= '$_POST[test]'
              WHERE order_id = 1";

//run the query. if fail, echo the error message
$query = mysqli_query($db,$sql_query) or die ("Error: Cannot edit order");

//header("Location:./test.html");
$jsonString = json_encode("test header");
echo $jsonString;

