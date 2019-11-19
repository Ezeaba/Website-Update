<?php
if(isset($_GET['id'])) {
    require("databaseHandler.php");
    $id = mysqli_real_escape_string($con, $_GET['id']);

    $sql = "SELECT * FROM business WHERE id='$id' ";
    $result= mysqli_query($con, $sql) or die("Bad Query");
    $row = mysqli_fetch_array($result);

}
else{
    header('Location: index.php');
}
?> 