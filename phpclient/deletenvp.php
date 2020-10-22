<?php
$link = new mysqli('localhost', 'root', '', 'demo');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "delete from nguoivipham where idnvp='$id'";
    mysqli_query($link, $query);
    header('Location:InsertNVP.php');
}
?>
 