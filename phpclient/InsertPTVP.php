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
                                            <h3 class="card-title">Thêm mới phương tiện vi phạm</h3>
                                        </div>
                                        <!-- /.card-header -->



                                        <div class="card-body">

                                            <form method="post">                                                                                                                                                                     
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Mã phương tiện</label>
                                                    <input type="text" name="idpt"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Tên phương tiện</label>
                                                    <input type="text" name="tenpt"/>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Loại phương tiện</label>
                                                    <select name="idlpt">
                                                        <?php
                                                        $link = new mysqli('localhost', 'root', '', 'demo');
                                                        $query = "select *from loaiphuongtien";
                                                        $result = mysqli_query($link, $query);
                                                        while ($r = mysqli_fetch_assoc($result)) {
                                                            $id = $r['idlpt'];
                                                            echo "<option value='$id'>$id</option>";
                                                        }
                                                        ?>        
                                                    </select>
                                                </div>   
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Biển số</label>
                                                    <input type="text" name="bienso"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Trạng thái đăng kiểm</label>
                                                    <input type="text" name="trangthaidangkiem"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Bảo hiểm</label>
                                                    <input type="text" name="baohiem"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="Thêm" name="insertPTVP"/>
                                                    <input type="reset" value="Xóa"/>                                    
                                                </div>

                                            </form>
                                            <?php
                                            $link = new mysqli('localhost', 'root', '', 'demo');
                                            if (isset($_POST['insertPTVP'])) {
                                                $idpt = $_POST['idpt'];
                                                $tenpt = $_POST['tenpt'];
                                                $idlpt = $_POST['idlpt'];
                                                $bienso = $_POST['bienso'];
                                                $trangthaidangkiem = $_POST['trangthaidangkiem'];
                                                $baohiem = $_POST['baohiem'];
                                                $query = "insert into phuongtienvipham values('$idpt','$tenpt','$idlpt','$bienso','$trangthaidangkiem','$baohiem')";
                                                mysqli_query($link, $query) or die("Thêm dữ liệu thất bại");
                                            }
//                                        ob_end_flush();
//                                        header('location:InsertNVP.php');
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
                                                            <button name="btnExport" type="submit">Xuất File Excel</button>
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
                                                        <th>Mã phương tiện</th>
                                                        <th>Tên phương tiện</th>
                                                        <th>Loại phương tiện</th>     
                                                        <th>Biển số</th>
                                                        <th>Trạng thái đăng kiểm</th>
                                                        <th>Bảo hiểm</th>
                                                        <th>Xóa</th>
                                                        <th>Cập nhật</th>
                                                    </tr>
                                                </thead>
                                                <tbody>  

                                                    <?php
                                                    $query = "select *from phuongtienvipham";
                                                    $result = mysqli_query($link, $query);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        $i = 0;
                                                        while ($r = mysqli_fetch_assoc($result)) {
                                                            $i++;
                                                            $idpt = $r['idpt'];
                                                            $tenpt = $r['tenpt'];
                                                            $idlpt = $r['idlpt'];
                                                            $bienso = $r['bienso'];
                                                            $trangthaidangkiem = $r['trangthaidangkiem'];
                                                            $baohiem = $r['baohiem'];
                                                            echo "<tr>";
                                                            echo "<td>$i</td>";
                                                            echo "<td>$idpt</td>";
                                                            echo "<td>$tenpt</td>";
                                                            echo "<td>$idlpt</td>";
                                                            echo "<td>$bienso</td>";
                                                            echo "<td>$trangthaidangkiem</td>";
                                                            echo "<td>$baohiem</td>";
                                                            echo "<td><a class='btn btn-info' href=''>Xóa</a></td>";
                                                            echo "<td><a class='btn btn-info' href=''>Cập nhật</a></td>";
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