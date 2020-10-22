<?php

if (isset($_POST['login'])) {
    session_start();
    $link = new mysqli('localhost', 'root', '', 'demo') or die(mysqli_error($link));
    $username = $_POST['username'];
    $password = $_POST['password'];
    $v1 = $username;
    $v2 = $password;
    $password = stripcslashes($password);
    $username = stripcslashes($username);
    $password = md5($password);
    $query = "select * from taikhoanhethong where tendangnhap = '$username' and matkhau = '$password'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row['tendangnhap'] == $username && $row['matkhau'] == $password) {
        $_SESSION['login'] = $row['gmail'];
        header("Location:home.php");
    } else {
        echo "Dang nhap that bai. $password $v1 $v2";
    }
}
if (isset($_POST['update'])) {
    $link = new mysqli('localhost', 'root', '', 'demo');
    $idnvp = $_POST['idnvp'];
    $sochungminhthu = $_POST['sochungminhthu'];
    $hoten = $_POST['hoten'];
    $diachihientai = $_POST['diachihientai'];
    $sodienthoai = $_POST['sodienthoai'];
    $magplx = $_POST['magplx'];
    $query = "update nguoivipham set sochungminhthu ='$sochungminhthu', hoten='$hoten',diachihientai='$diachihientai',sodienthoai='$sodienthoai',magplx='$magplx' where idnvp = '$idnvp'";
    mysqli_query($link, $query);
    header('Location:InsertNVP.php');
}
if (isset($_POST['insert'])) {
    $link = new mysqli('localhost', 'root', '', 'demo');
    $idnvp = $_POST['idnvp'];
    $sochungminhthu = $_POST['sochungminhthu'];
    $hoten = $_POST['hoten'];
    $diachihientai = $_POST['diachihientai'];
    $sodienthoai = $_POST['sodienthoai'];
    $magplx = $_POST['magplx'];
    $query = "insert into nguoivipham values('$idnvp','$sochungminhthu','$hoten','$diachihientai','$sodienthoai','$magplx')";
    mysqli_query($link, $query) or die("Thêm dữ liệu thất bại");
    header('Location:InsertNVP.php');
}
if (isset($POST['btnSearchNVP'])) {
    $link = new mysqli('localhost', 'root', '', 'demo');
    $valuesearch = $_POST['valuesearch'];
    $query = "select * from nguoivipham where idnvp like '%$valuesearch%' or hoten like '%$valuesearch%'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while ($r = mysqli_fetch_assoc($result)) {
            $i++;
            $idnvp = $r['idnvp'];
            $sochungminhthu = $r['sochungminhthu'];
            $hoten = $r['hoten'];
            $diachihientai = $r['diachihientai'];
            $sodienthoai = $r['sodienthoai'];
            $magplx = $r['magplx'];
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$idnvp</td>";
            echo "<td>$sochungminhthu</td>";
            echo "<td>$hoten</td>";
            echo "<td>$diachihientai</td>";
            echo "<td>$sodienthoai</td>";
            echo "<td>$magplx</td>";

            echo "<td><a href='deletenvp.php?id=$idnvp'>Xóa</a></td>";
            echo "<td><a href='update.php?id=$idnvp'>Cập nhật</a></td>";
            echo "</tr>";
        }
    }
    header('Location:InsertNVP.php');
}
//if (isset($_POST['insert'])) {
//    $link = new mysqli('localhost', 'root', '', 'demo');
//    $idnvp = $_POST['idnvp'];
//    $sochungminhthu = $_POST['sochungminhthu'];
//    $hoten = $_POST['hoten'];
//    $diachihientai = $_POST['diachihientai'];
//    $sodienthoai = $_POST['sodienthoai'];
//    $magplx = $_POST['magplx'];
//    $query = "insert into nguoivipham values('$idnvp','$sochungminhthu','$hoten','$diachihientai','$sodienthoai','$magplx')";
//    mysqli_query($link, $query) or die("Thêm dữ liệu thất bại");
//    header('Location:InsertNVP.php');
//}
?>
