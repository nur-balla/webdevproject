<?php 
  include_once("../dbConnection/mysqlconfig_connection.php");
  if  (isset($_POST["update"])) {
    $id = $_POST['id'];
    $code = $_POST['code'];
    $name = $_POST['name'];

    if (empty($code) || empty($name)) {
      if(empty($code)) {
        echo "<font color = 'red'> object code field is empty.</font><br>";
      }
      if(empty($name)) {
        echo "<font color = 'red'> object code field is empty.</font><br>";
      }
    }
    else {
      mysqli_query($dbc, "UPDATE tblsubjects SET Subject_Code='$code', Subject_Name='$name' WHERE Subject_ID='$id'");
      header("Location: ../index.php");
    }
  }
?>