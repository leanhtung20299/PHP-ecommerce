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
                                <div class="col-md-12">
                                    <!-- general form elements disabled -->
                                    <div class="card card-warning">
                                        <div class="card-header">
                                            <h3 class="card-title">Cập nhật người vi phạm</h3>
                                        </div>
                                        <?php
                                        $link = new mysqli('localhost', 'root', '', 'demo');
                                        $id = $_GET['id'];
                                        $query = "select *from nguoivipham where idnvp='$id'";
                                        $result = mysqli_query($link, $query);
                                        $r = mysqli_fetch_assoc($result);
                                        ?>
                                        <div class="card-body">
                                            <form action="controller.php" method="POST">                                                                                                                                                                     
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Mã người vi phạm</label>
                                                    <input type="text" name="idnvp" value="<?php echo $r['idnvp'] ?>" readonly/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Số Chứng minh thư</label>
                                                    <input type="text" name="sochungminhthu" value="<?php echo $r['sochungminhthu'] ?>"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Họ tên</label>
                                                    <input type="text" name="hoten" value="<?php echo $r['hoten'] ?>"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Địa chỉ</label>
                                                    <input type="text" name="diachihientai" value="<?php echo $r['diachihientai'] ?>"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" style="color: #00353b">Số điện thoại</label>
                                                    <input type="text" name="sodienthoai" value="<?php echo $r['sodienthoai'] ?>"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" va style="color: #00353b">Mã giấy phép lái xe</label>
                                                    <input type="text" name="magplx" value="<?php echo $r['magplx'] ?>" readonly/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="Cập nhật" name="update"/>
                                                    <input type="reset" value="Xóa"/>                                    
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!--   Core JS Files   -->
        <?php
        include './js.php';
        ?>
    </body>

</html>