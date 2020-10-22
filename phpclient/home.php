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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

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
                    <!--conten--> 
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
<!--                             <div class="card shadow mb-4" style="margin-top: 50px">
                                 Card Header - Dropdown 
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary" align="center">Thông tin vi phạm</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="value1" style="column-rule-width: 100px"></canvas>
                                </div>
                            </div>-->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary" align="center">Thống kê Lỗi vi phạm</h6>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="bienlaivipham" style="column-rule-width: 100px"></canvas>
                                </div>
                            </div>

                            <div class="card shadow mb-4" style="margin-top: 50px">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary" align="center">Thành phố Hà Nội</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="thanhphohanoi" style="column-rule-width: 100px"></canvas>
                                </div>
                            </div>

                            <!--                            <div class="card shadow mb-4" style="margin-top: 50px">
                                                             Card Header - Dropdown 
                                                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                                <h6 class="m-0 font-weight-bold text-primary" align="center">Xã Quyết Tâm</h6>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="chart-area">
                                                                <canvas id="QuyetTamcanvas" style="column-rule-width: 100px"></canvas>
                                                            </div>
                                                        </div>-->

                            <div class="card shadow mb-4" style="margin-top: 50px">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary" align="center">Thành phố Hồ Chí Minh</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="thanhphohochiminh" style="column-rule-width: 100px"></canvas>
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
        <script>
            $(document).ready(
                    function () {
                        $.ajax({
                            url: "ajax1.php",
                            type: "GET",
                            success: function (data) {
                                console.log(data);
                                var dataJS = data;
                                var idblvp = [];
                                var mucxuphat = [];
                                for (var i in data) {
                                    idblvp.push( data[i].noidungvipham)
                                    mucxuphat.push(data[i].mucxuphat);
                                }
                                var chartdata = {
                                    labels: idblvp,
                                    datasets: [
                                        {
                                            label: 'Tiền phạt',
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.5)',
                                                'rgba(54, 162, 235, 0.6)',
                                                'rgba(255, 206, 86, 0.6)',
                                                'rgba(75, 192, 192, 0.6)',
                                                'rgba(153, 102, 255, 0.6)',
                                                'rgba(255, 159, 64, 0.6)',
                                                'rgba(255, 99, 132, 0.6)'
                                            ],
                                            borderColor: 'rgba(255, 99, 132, 1)',
                                            hoverBackgroundColor: 'rgba(255, 99, 132, 1)',
                                            hoverBorderColor: 'rgba(255, 99, 132, 1)',
                                            data: mucxuphat
                                        }
                                    ]
                                };
                                var ctx = $("#bienlaivipham");
                                var barGraph = new Chart(ctx, {
                                    type: 'pie',
                                    data: chartdata
                                });
                            },
                            error: function (data) {
                                console.log(data);
                            }
                        })

                    });
        </script>
        <script>
            $(document).ready(
                    function () {
                        $.ajax({
                            url: "ajax2.php",
                            type: "GET",
                            success: function (data) {
                                console.log(data);
                                var dataJS = data;
                                var idblvp = [];
                                var mucxuphat = [];
                                for (var i in data) {
                                    idblvp.push( data[i].noidungvipham)
                                    mucxuphat.push(data[i].mucxuphat);
                                }
                                var chartdata = {
                                    labels: idblvp,
                                    datasets: [
                                        {
                                            label: 'Tiền phạt',
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.5)',
                                                'rgba(54, 162, 235, 0.6)',
                                                'rgba(255, 206, 86, 0.6)',
                                                'rgba(75, 192, 192, 0.6)',
                                                'rgba(153, 102, 255, 0.6)',
                                                'rgba(255, 159, 64, 0.6)',
                                                'rgba(255, 99, 132, 0.6)'
                                            ],
                                            borderColor: 'rgba(255, 99, 132, 1)',
                                            hoverBackgroundColor: 'rgba(255, 99, 132, 1)',
                                            hoverBorderColor: 'rgba(255, 99, 132, 1)',
                                            data: mucxuphat
                                        }
                                    ]
                                };
                                var ctx = $("#thanhphohanoi");
                                var barGraph = new Chart(ctx, {
                                    type: 'bar',
                                    data: chartdata
                                });
                            },
                            error: function (data) {
                                console.log(data);
                            }
                        })

                    });
        </script>
        <script>
            $(document).ready(
                    function () {
                        $.ajax({
                            url: "ajax3.php",
                            type: "GET",
                            success: function (data) {
                                console.log(data);
                                var dataJS = data;
                                var idblvp = [];
                                var mucxuphat = [];
                                for (var i in data) {
                                    idblvp.push( data[i].noidungvipham)
                                    mucxuphat.push(data[i].mucxuphat);
                                }
                                var chartdata = {
                                    labels: idblvp,
                                    datasets: [
                                        {
                                            label: 'Tiền phạt',
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.5)',
                                                'rgba(54, 162, 235, 0.6)',
                                                'rgba(255, 206, 86, 0.6)',
                                                'rgba(75, 192, 192, 0.6)',
                                                'rgba(153, 102, 255, 0.6)',
                                                'rgba(255, 159, 64, 0.6)',
                                                'rgba(255, 99, 132, 0.6)'
                                            ],
                                            borderColor: 'rgba(255, 99, 132, 1)',
                                            hoverBackgroundColor: 'rgba(255, 99, 132, 1)',
                                            hoverBorderColor: 'rgba(255, 99, 132, 1)',
                                            data: mucxuphat
                                        }
                                    ]
                                };
                                var ctx = $("#thanhphohochiminh");
                                var barGraph = new Chart(ctx, {
                                    type: 'bar',
                                    data: chartdata
                                });
                            },
                            error: function (data) {
                                console.log(data);
                            }
                        })

                    });
        </script>
        <script>
            $(document).ready(
                    function () {
                        $.ajax({
                            url: "ajax3.php",
                            type: "GET",
                            success: function (data) {
                                console.log(data);
                                var dataJS = data;
                                var idblvp = [];
                                var mucxuphat = [];
                                for (var i in data) {
                                    idblvp.push( data[i].noidungvipham)
                                    mucxuphat.push(data[i].mucxuphat);
                                }
                                var chartdata = {
                                    labels: idblvp,
                                    datasets: [
                                        {
                                            label: 'Tiền phạt',
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.5)',
                                                'rgba(54, 162, 235, 0.6)',
                                                'rgba(255, 206, 86, 0.6)',
                                                'rgba(75, 192, 192, 0.6)',
                                                'rgba(153, 102, 255, 0.6)',
                                                'rgba(255, 159, 64, 0.6)',
                                                'rgba(255, 99, 132, 0.6)'
                                            ],
                                            borderColor: 'rgba(255, 99, 132, 1)',
                                            hoverBackgroundColor: 'rgba(255, 99, 132, 1)',
                                            hoverBorderColor: 'rgba(255, 99, 132, 1)',
                                            data: mucxuphat
                                        }
                                    ]
                                };
                                var ctx = $("#thanhphohochiminh");
                                var barGraph = new Chart(ctx, {
                                    type: 'bar',
                                    data: chartdata
                                });
                            },
                            error: function (data) {
                                console.log(data);
                            }
                        })

                    });
        </script>
        
    </body>
</html>