<?php
$link = new mysqli('localhost', 'root', '', 'demo');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from bienlaivipham inner join nguoivipham on  bienlaivipham.idnvp = nguoivipham.idnvp where idnvp='$id'";
    mysqli_query($link, $query);
    header('Location:InsertNVP.php');
}
?>
 