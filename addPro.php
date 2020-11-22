<?php
error_reporting(E_ERROR | E_PARSE);
echo "came";
if($_GET['delhi'])
  {
    require_once "config.php";
    $sql = "INSERT INTO records (location, appartment, bedRoom, bathRoom, price) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ssiii",$param_delhi , $param_appartment, $param_bedRoom, $param_bathRoom, $param_price);

        $param_delhi = $_GET['delhi'];
        $param_appartment = $_GET['appartment'];
        $param_bedRoom = (int)$_GET['bedRoom'];
        $param_bathRoom = (int)$_GET['bathRoom'];
        $param_price = (int)$_GET['price'];

        if (!mysqli_stmt_execute($stmt))
        {
            echo "Something went wrong...";
        }
    }
    mysqli_stmt_close($stmt);
    echo "successfull";
  }
else{
    header("location: index.html");
}
?>