<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$link = new mysqli('localhost', 'root', '', 'demo');
if (isset($_POST['btnExport'])) {
    $link = new mysqli('localhost', 'root', '', 'demo');
    $query = "select *from phuongtienvipham";
    $result = mysqli_query($link, $query);
    $output = '';
    $i = 0;
    $output .='<table class="table table-striped table-hover" border ="1">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Mã phương tiện</th>
                                                        <th>Tên phương tiện</th>
                                                        <th>Loại phương tiện</th>     
                                                        <th>Biển số</th>
                                                        <th>Trạng thái đăng kiểm</th>
                                                        <th>Bảo hiểm</th>                    
                                                    </tr>
                                                </thead>';
    while ($r = mysqli_fetch_assoc($result)) {
        $i++;
        $idpt = $r['idpt'];
        $tenpt = $r['tenpt'];
        $idlpt = $r['idlpt'];
        $bienso = $r['bienso'];
        $trangthaidangkiem = $r['trangthaidangkiem'];
        $baohiem = $r['baohiem'];
        $output .="
        <tr>
            <td>$i</td>
            <td>$idpt</td>
            <td>$tenpt</td>
            <td>$idlpt</td>
            <td>$bienso</td>
            <td>$trangthaidangkiem</td>
            <td>$baohiem</td>
        </tr>
        ";
    }
    $output .= '</table>';
    header("Content-type: application/xls");
    header("Content-Disposition: attachment; filename=excel.xls");
    echo $output;
}
if (isset($_POST['btnExportNVP'])) {
    $query = "select *from nguoivipham";
    $result = mysqli_query($link, $query);
    $output = '';
    $i = 0;
    $output .='<table class="table table-striped table-hover" border ="1">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>ID</th>
                                                        <th>Số CMT</th>
                                                        <th>Họ tên</th>     
                                                        <th>Địa chỉ</th>
                                                        <th>Số điện thoại</th>
                                                        <th>Mã GPLX</th>
                                                               
                                                    </tr>
                                                </thead>';
    while ($r = mysqli_fetch_assoc($result)) {
        $i++;
        $idnvp = $r['idnvp'];
        $sochungminhthu = $r['sochungminhthu'];
        $hoten = $r['hoten'];
        $diachihientai = $r['diachihientai'];
        $sodienthoai = $r['sodienthoai'];
        $magplx = $r['magplx'];

        $output .="
        <tr>
            <td>$i</td>
            <td>$idnvp</td>
            <td>$sochungminhthu</td>
            <td>$hoten</td>
            <td>$diachihientai</td>
            <td>$sodienthoai</td>
            <td>$magplx</td>
        </tr>;
        ";
    }
    $output .= '</table>';
    header("Content-type: application/xls");
    header("Content-Disposition: attachment; filename=excel.xls");
    echo $output;
}
?>