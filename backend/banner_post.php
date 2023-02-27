<?php
    require '../database.php';
?>

<?php
    $name = $_POST['name'];
    $descrip = $_POST['descrip'];
    $btn_text = $_POST['btn_text'];
    $btn_url = $_POST['btn_url'];


    $insert = "INSERT INTO tbl_banner (name, descrip, btn, btn_url) VALUES ('$name', '$descrip', '$btn_text', '$btn_url')";

    $reqult = mysqli_query($db_connection, $insert);

    header('location:banner.php');
?>