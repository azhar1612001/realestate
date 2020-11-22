
<script type="text/javascript">
    console.log("message.php");
    debugger
</script>
<?php
error_reporting(E_ERROR | E_PARSE);
if($_GET['name'] && $_GET['email'] && $_GET['mobile'] && $_GET['message'])
  {
    require_once "config.php";
    $sql = "INSERT INTO messages (name, email, mobile, message) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ssss",$param_name , $param_email, $param_mobile, $param_message);
        $param_name = $_GET["name"];
        $param_email = $_GET['email'];
        $param_mobile = $_GET["mobile"];
        $param_message = $_GET["message"];

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