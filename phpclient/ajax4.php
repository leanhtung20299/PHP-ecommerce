<?php
    header('Content-type: application/json');
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'demo');
    $mysqli = new mysqli('localhost','root','','demo') or die(mysqli_error($mysqli));
    // $query = sprintf("select diaChi, tienPhat from ViPham ");
    $result = $mysqli->query("select * from bienlaivipham");
    $data = array();
    foreach ($result as $row){
      $data[] = $row;
    }
   
    echo json_encode($data);
 ?>
