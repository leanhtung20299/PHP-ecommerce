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
                                            <h3 class="card-title">Thêm mới người vi phạm</h3>
                                        </div>
                                        <!-- /.card-header -->



                                        <div class="card-body">
                                            <form action="controller.php" method="POST">                                                                                                                                                                     
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Mã người vi phạm</label>
                                                    <input type="text" name="idnvp"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Số Chứng minh thư</label>
                                                    <input type="text" name="sochungminhthu"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Họ tên</label>
                                                    <input type="text" name="hoten"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Địa chỉ</label>
                                                    <input type="text" name="diachihientai"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Số điện thoại</label>
                                                    <input type="text" name="sodienthoai"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Mã giấy phép lái xe</label>
                                                    <input type="text" name="magplx"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mã giấy phép lái xe</label>
                                                    <select name="magplx">
                                                        <?php
                                                        $link = new mysqli('localhost', 'root', '', 'demo');
                                                        $query = "select *from giaypheplaixe";
                                                        $result = mysqli_query($link, $query);
                                                        while ($r = mysqli_fetch_assoc($result)) {
                                                            $id = $r['magplx'];
                                                            echo "<option value='$id'>$id</option>";
                                                        }
                                                        ?>        
                                                    </select>
                                                </div>   
                                                <div class="form-group">
                                                    <input type="submit" value="Thêm" name="insert"/>
                                                    <input type="reset" value="Xóa"/>                                    
                                                </div>

                                            </form>

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
                                                        <th>ID</th>
                                                        <th>Số CMT</th>
                                                        <th>Họ tên</th>     
                                                        <th>Địa chỉ</th>
                                                        <th>Số điện thoại</th>
                                                        <th>Mã GPLX</th>
                                                        <th>Xóa</th>
                                                        <th>Cập nhật</th>
                                                    </tr>
                                                </thead>
                                                <tbody>   
                                                    <?php
                                                    if (isset($_POST['btnSearchNVP'])) {
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
                                                                echo "<td><a href='deletenvp.php?id=$idnvp'>Chi tiết</a></td>";
                                                                echo "<td><a href='update.php?id=$idnvp'>Cập nhật</a></td>";
                                                                echo "</tr>";
                                                            }
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