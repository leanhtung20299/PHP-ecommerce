<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="/PhpProject1/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="/PhpProject1/assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Quản trị admin
        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

        <!--     Fonts and icons     -->
        <?php
        include './css.php';
        ?>
    </head>

    <body class="">
        <div class="wrapper ">
            <?php
            include './menu.php';
            ?>
            <div class="main-panel">
                <!-- Navbar -->
                <?php
                include './header.php';
                ?>
                <!-- End Navbar -->
                <div class="content">
                    <!--content--> 
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- left column -->

                                <!--/.col (left) -->
                                <!-- right column -->

                                <div class="col-md-4">
                                    <!-- general form elements disabled -->
                                    <div class="card card-warning">
                                        <div class="card-header">
                                            <h3 class="card-title">Biên lai vi phạm</h3>
                                        </div>
                                        <!-- /.card-header -->



                                        <div class="card-body">

                                            <form method="post" action="InsertBienlai.php">                                                                                                                                                                     
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Mã biên lai</label>
                                                    <input type="text" name="idblvp"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Người vi phạm</label>
                                                    <select name="idnvp">
                                                        <?php
                                                        $link = new mysqli('localhost', 'root', '', 'demo');
                                                        $query = "select *from nguoivipham";
                                                        $result = mysqli_query($link, $query);
                                                        while ($r = mysqli_fetch_assoc($result)) {
                                                            $id = $r['idnvp'];
                                                            $ten = $r['hoten'];
                                                            echo "<option value='$id'>$id-$ten</option>";
                                                        }
                                                        ?>        
                                                    </select>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Phương tiện vi phạm</label>
                                                    <select name="idpt">
                                                        <?php
                                                        $link = new mysqli('localhost', 'root', '', 'demo');
                                                        $query = "select *from phuongtienvipham";
                                                        $result = mysqli_query($link, $query);
                                                        while ($r = mysqli_fetch_assoc($result)) {
                                                            $id = $r['idpt'];
                                                            $ten = $r['tenpt'];
                                                            echo "<option value='$id'>$ten</option>";
                                                        }
                                                        ?>        
                                                    </select>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Hành vi vi phạm</label>
                                                    <select name="idhv">
                                                        <?php
                                                        $link = new mysqli('localhost', 'root', '', 'demo');
                                                        $query = "select *from hanhvivipham";
                                                        $result = mysqli_query($link, $query);
                                                        while ($r = mysqli_fetch_assoc($result)) {
                                                            $id = $r['idhv'];
                                                            $ten = $r['tenhanhvi'];
                                                            echo "<option value='$id'>$ten</option>";
                                                        }
                                                        ?>        
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Nội dung vi phạm</label>
                                                    <textarea type="text" name="noidungvipham"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Mức xử phạt</label>
                                                    <input type="text" name="mucxuphat"/>
                                                </div>
<!--                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Mã giấy phép lái xe</label>
                                                    <input type="text" name="magplx"/>
                                                </div>-->
                                                <div class="form-group">
                                                    <input type="submit" value="Thêm" name="insert"/>
                                                    <input type="reset" value="Xóa"/>                                    
                                                </div>

                                            </form>
                                            <?php
                                            $link = new mysqli('localhost', 'root', '', 'demo');
                                            if ($link) {
                                                echo 'kết nối thành công';
                                            } else {
                                                echo 'kết nối thất bại';
                                            }

                                            if (isset($_POST['insert'])) {
                                                $idnvp = $_POST['idnvp'];
                                                $sochungminhthu = $_POST['sochungminhthu'];
                                                $hoten = $_POST['hoten'];
                                                $diachihientai = $_POST['diachihientai'];
                                                $sodienthoai = $_POST['sodienthoai'];
                                                $magplx = $_POST['magplx'];
                                                $query = "insert into nguoivipham values('$idnvp','$sochungminhthu','$hoten','$diachihientai','$sodienthoai','$magplx')";
                                                mysqli_query($link, $query) or die("Thêm dữ liệu thất bại");
                                            }
                                            ?>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <div class="container">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="card-header card card-info">
                                                            <h3 class="card-title">Thông tin người vi phạm</h3>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="">
                                                        <form method="POST" action="exportExcel.php">
                                                            <button name="btnExportNVP" type="submit">Xuất File Excel</button>
                                                        </form>
                                                    </div>
                                                    <form class="navbar-form col-sm-4" action="valueseachVNP.php" method="post">
                                                        <div class="input-group no-border">
                                                            <input type="text" value="" name="valuesearch" class="form-control" placeholder="Search...">
                                                            <button type="submit" name="btnSearchNVP" class="btn btn-white btn-round btn-just-icon">
                                                                <i class="material-icons">search</i>
                                                                <div class="ripple-container"></div>
                                                            </button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                            <table class="table table-striped table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Mã biên lai</th>
                                                        <th>Mã người vi phạm</th>
                                                        <th>Mã phương tiện</th>
                                                        <th>Mã hành vi</th>     
                                                        <th>Nội dung</th>
                                                        <th>Mức xử phạt</th>
                                                        <th>Trạng thái nộp phạt</th>
                                                        <th>Ngày nộp phạt</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                                                                 
                                                    <?php
                                                    $query = "select *from bienlaivipham";
                                                    $result = mysqli_query($link, $query);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        $i = 0;
                                                        while ($r = mysqli_fetch_assoc($result)) {
                                                            $i++;
                                                            $idblvp = $r['idblvp'];
                                                            $idnvp = $r['idnvp'];
                                                            $idpt = $r['idpt'];
                                                            $idhv = $r['idhv'];
                                                            $noidungvipham = $r['noidungvipham'];
                                                            $mucxuphat = $r['mucxuphat'];
                                                             $trangthainopphat = $r['trangthainopphat'];
                                                              $ngaynop = $r['ngaynop'];
                                                            echo "<tr>";
                                                            echo "<td>$i</td>";
                                                            echo "<td>$idblvp</td>";
                                                            echo "<td>$idnvp</td>";
                                                            echo "<td>$idpt</td>";
                                                            echo "<td>$idhv</td>";
                                                            echo "<td>$noidungvipham</td>";
                                                            echo "<td>$mucxuphat</td>";
                                                             echo "<td>$trangthainopphat</td>";
                                                             echo "<td>$ngaynop</td>";
                                                            echo "</tr>";
                                                        }
                                                    }
                                                    ?>


                                                </tbody>
                                        </div>     

                                    </div>

                                </div><!-- /.container-fluid -->
                                
                              
                            </div>
                          
                        </div>
                </div>
                <!--   Core JS Files   -->
                <?php
                include './js.php';
                ?>
                </body>

                </html>