<?php
    require '../database.php';
?>
<?php
    $id = $_GET['id'];

    $update_deactive = "UPDATE tbl_about SET status = 0";
    $reqult = mysqli_query($db_connection, $update_deactive);

    ///-----------------------------------
    $update_active = "UPDATE tbl_about SET status = 1 WHERE id = $id";
    $reqult = mysqli_query($db_connection, $update_active);

    header('location:about.php');
?>
