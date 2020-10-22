<?php
$link = new mysqli('localhost', 'root', '', 'demo');
$gmail = $_POST['gmail'];
$query = "select *from taikhoanhethong where gmail = '$gmail'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$target = $row['gmail'];
if ($row['gmail'] != null) {
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
    $newpass = substr(str_shuffle($permitted_chars), 0, 10);
    $newpassdto = md5($newpass);
    $gmailreturn = $row['gmail'];
    $query2 = "update taikhoanhethong set matkhau = '$newpassdto' where gmail = '$gmailreturn'";
    mysqli_query($link, $query2);

    $to = $gmailreturn;
    $subject = "Khôi phục mật khẩu";
    $message = $newpassdto;
    if(mail($to, $subject, $message)==true)   echo "Susscess";
    else echo "false";
} else {
    echo "tài khoản Gmail không tồn tại trong hệ thống";
}
?>