<!doctype html>
<html lang="en">
    <head>
        <title>Thanh tra sở giao thông vận tải tỉnh Sơn La</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php
        include './cssclient.php';
        ?>
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="site-wrap" id="home-section">
            
            <?php
            include './headerclient.php';
            ?>
            <?php
            include './menuclient.php';
            ?>
            <div class="ftco-blocks-cover-1">

                <div class="col-lg-6">
                    <h3>Thông tin người vi phạm hoặc phương tiện cần tra cứu</h3>
                    <!--<p class="mb-5">Mọi thông tin người vi phạm hoặc phương tiện được lưu trữ trong hệ thống   Nếu xảy ra lỗi trong quá trình sử dụng tra cứu liên hệ với Cơ quan sở giao thông tỉnhSơn La</p>-->
                    <form action="searchresult.php" method="POST">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Nhập thông tin" name="valuesearch">
                            <input type="submit" class="btn btn-primary text-white px-4" value="Tra cứu" name="searchinfo">
                        </div>
                    </form>
                </div>

                <!-- END .ftco-cover-1 -->
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
                        if (isset($_GET['id'])) {
                            $link = new mysqli('localhost', 'root', '', 'demo');
                            $id = $_GET['id'];
                            $query = "select * from bienlaivipham inner join nguoivipham on  bienlaivipham.idnvp = nguoivipham.idnvp where nguoivipham.idnvp='$id'";
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
                                    echo "<td>$mucxuphat VNĐ</td>";
                                    echo "<td>$trangthainopphat</td>";
                                    echo "<td>$ngaynop</td>";
                                    echo "</tr>";
                                }
                            }
                        }
                        ?>
                    </tbody>
                    
                    
                    
                    
                </table>
<!--                <div class="site-section bg-light" id="contact-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                                <div class="block-heading-1">
                                    <span>Để lại thông tin cần thiết</span>
                                    <h2>Liên hệ</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                                <form action="#" method="post">
                                    <div class="form-group row">
                                        <div class="col-md-6 mb-4 mb-lg-0">
                                            <input type="text" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" placeholder="Email address">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 mr-auto">
                                            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                                <div class="bg-white p-3 p-md-5">
                                    <h3 class="text-black mb-4">Contact Info</h3>
                                    <ul class="list-unstyled footer-link">
                                        <li class="d-block mb-3">
                                            <span class="d-block text-black">Address:</span>
                                            <span>34 Street Name, City Name Here, United States</span></li>
                                        <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                                        <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
               
            </div>
            <?php
            include './jsclient.php';
            ?>
    </body>
</html>