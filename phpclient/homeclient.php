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
                <div class="ftco-cover-1 overlay" style="background-image: url('/PhpProject1/resourceclient/images/sgtvt.png')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h1>Thông tin người vi phạm hoặc phương tiện cần tra cứu</h1>
                                <p class="mb-5">Mọi thông tin người vi phạm hoặc phương tiện được lưu trữ trong hệ thống   Nếu xảy ra lỗi trong quá trình sử dụng tra cứu liên hệ với Cơ quan sở giao thông tỉnhSơn La</p>
                                <form action="searchresult.php" method="POST">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Nhập thông tin" name="valuesearch">
                                        <input type="submit" class="btn btn-primary text-white px-4" value="Tra cứu" name="searchinfo">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>           
                <!-- END .ftco-cover-1 -->
                <div class="ftco-service-image-1 pb-5">
                    <div class="container">
                        <div class="owl-carousel owl-all">
                            <div class="service text-center">
                                <a href="#"><img src="/PhpProject1/resourceclient/images/cargo_sea_small.jpg" alt="Image" class="img-fluid"></a>
                                <div class="px-md-3">
                                    <h3><a href="#">Giám đốc công an</a></h3>
                                    <p>Trịnh Xuân Hùng</p>
                                </div>
                            </div>
                            <div class="service text-center">
                                <a href="#"><img src="/PhpProject1/resourceclient/images/cargo_air_small.jpg" alt="Image" class="img-fluid"></a>
                                <div class="px-md-3">
                                    <h3><a href="#">Phó trưởng phòng</a></h3>
                                    <p>Nguyễn Hợp Cường</p>
                                </div>
                            </div>
                            <div class="service text-center">
                                <a href="#"><img src="/PhpProject1/resourceclient/images/cargo_delivery_small.jpg" alt="Image" class="img-fluid"></a>
                                <div class="px-md-3">
                                    <h3><a href="#">Trưởng ban đối ngoại</a></h3>
                                    <p>Đào Tài Tuệ	</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section" id="about-section">
                <div class="container">
                    <div class="row mb-5 justify-content-center">
                        <div class="col-md-7 text-center">
                            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                                <h2>Giới thiệu về sở giao thông tỉnh</h2>
                                <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section bg-light" id="about-section">
                <div class="container">
                    <div class="row justify-content-center mb-4 block-img-video-1-wrap">
                        <div class="col-md-12 mb-5">
                            <figure class="block-img-video-1" data-aos="fade">
                                <a href="https://www.youtube.com/watch?v=VaoduRF-rRM" data-fancybox data-ratio="2">
                                    <span class="icon"><span class="icon-play"></span></span>
                                    <img src="/PhpProject1/resourceclient/images/sgtvt.png" alt="Image" class="img-fluid">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                                    <div class="block-counter-1">
                                        <span class="number"><span data-number="50">0</span>+</span>
                                        <span class="caption">Năm thành lập</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                                    <div class="block-counter-1">
                                        <span class="number"><span data-number="15">0</span>+</span>
                                        <span class="caption">Đội tuần tra</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                                    <div class="block-counter-1">
                                        <span class="number"><span data-number="108">0</span>+</span>
                                        <span class="caption">Cán bộ chủ chốt</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                                    <div class="block-counter-1">
                                        <span class="number"><span data-number="1500">0</span>+</span>
                                        <span class="caption">Xử lý sai phạm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section" id="team-section">
                <div class="container">
                    <div class="row mb-5 justify-content-center">
                        <div class="col-md-7 text-center">
                            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                                <h2>Dánh sách cán bộ chủ chốt</h2>
                                <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-all">
                        <div class="block-team-member-1 text-center rounded h-100">
                            <figure>
                                <img src="/PhpProject1/resourceclient/images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
                            </figure>
                            <h3 class="font-size-20 text-black">Max Carlson</h3>
                            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="block-social-1">
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
                            </div>
                        </div>
                        <div class="block-team-member-1 text-center rounded h-100">
                            <figure>
                                <img src="/PhpProject1/resourceclient/images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
                            </figure>
                            <h3 class="font-size-20 text-black">Charlotte Pilat</h3>
                            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="block-social-1">
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
                            </div>
                        </div>
                        <div class="block-team-member-1 text-center rounded h-100">
                            <figure>
                                <img src="/PhpProject1/resourceclient/images/person_3.jpg" alt="Image" class="img-fluid rounded-circle">
                            </figure>
                            <h3 class="font-size-20 text-black">Nicole Lewis</h3>
                            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="block-social-1">
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
                            </div>
                        </div>
                        <div class="block-team-member-1 text-center rounded h-100">
                            <figure>
                                <img src="/PhpProject1/resourceclient/images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
                            </figure>
                            <h3 class="font-size-20 text-black">Jean Smith</h3>
                            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Financial Manager</span>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="block-social-1">
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
                            </div>
                        </div>
                        <div class="block-team-member-1 text-center rounded h-100">
                            <figure>
                                <img src="/PhpProject1/resourceclient/images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
                            </figure>
                            <h3 class="font-size-20 text-black">Bob Carry</h3>
                            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Loader Manager</span>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="block-social-1">
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
                            </div>
                        </div>
                        <div class="block-team-member-1 text-center rounded h-100">
                            <figure>
                                <img src="/PhpProject1/resourceclient/images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
                            </figure>
                            <h3 class="font-size-20 text-black">Anne Fisher</h3>
                            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Package Manager</span>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="block-social-1">
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section" id="faq-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="block-heading-1 col-12 text-center">
                            <h2>Câu hỏi thường gặp</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>Can I accept both Paypal and Stripe?</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>What available is refund period?</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>Can I accept both Paypal and Stripe?</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>

                            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>What available is refund period?</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>Where are you from?</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>What is your opening time?</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>Can I accept both Paypal and Stripe?</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>What available is refund period?</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block__73694 site-section border-top" id="why-us-section">
                <div class="container">
                    <div class="row d-flex no-gutters align-items-stretch">
                        <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('images/cargo_sea_small.jpg');" data-aos="fade-left" data-aos-delay="">
                        </div>
                        <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
                            <h2 class="mb-4 text-black">Tại sao nên sử dụng dịch vụ tra cứu online</h2>
                            <h4 class="text-primary">Sử dụng thuận tiện và nhanh chóng!</h4>
                            <p>Tra cứu thông tin và cập nhật thông tin cần thiết về luật lệ tham gia giao thông</p>

                            <ul class="ul-check primary list-unstyled mt-5">
                                <li>Tiết kiệm thời gian!</li>
                                <li>Tiện dụng!</li>
                                <li>Chính xác!</li>
                                <li>Nhanh chóng!</li>
                                <li>Hỗ trợ 24/7</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
                <div class="container">

                    <div class="text-center mb-5">
                        <div class="block-heading-1">
                            <h2>Phản hồi của người dùng</h2>
                        </div>
                    </div>
                    <div class="owl-carousel nonloop-block-13">
                        <div>
                            <div class="block-testimony-1 text-center">

                                <blockquote class="mb-4">
                                    <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt
                                        and made herself on the way.&rdquo;</p>
                                </blockquote>

                                <figure>
                                    <img src="/PhpProject1/resourceclient/images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                                </figure>
                                <h3 class="font-size-20 text-black">Ricky Fisher</h3>
                            </div>
                        </div>
                        <div>
                            <div class="block-testimony-1 text-center">
                                <blockquote class="mb-4">
                                    <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                                </blockquote>
                                <figure>
                                    <img src="/PhpProject1/resourceclient/images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                                </figure>
                                <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>
                            </div>
                        </div>
                        <div>
                            <div class="block-testimony-1 text-center">
                                <blockquote class="mb-4">
                                    <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                                </blockquote>
                                <figure>
                                    <img src="/PhpProject1/resourceclient/images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                                </figure>
                                <h3 class="font-size-20 text-black">Mellisa Griffin</h3>
                            </div>
                        </div>
                        <div>
                            <div class="block-testimony-1 text-center">
                                <blockquote class="mb-4">
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                                <figure>
                                    <img src="/PhpProject1/resourceclient/images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                                </figure>
                                <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section py-5" id="blog-section">
                <div class="container">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
                                <h2>Thông tin mới</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-5 d-flex blog-entry" data-aos="fade-right" data-aos-delay="">
                                <a href="#" class="blog-thumbnail"><img src="/PhpProject1/resourceclient/images/cargo_sea_small.jpg" alt="Image" class="img-fluid"></a>
                                <div class="blog-excerpt">
                                    <span class="d-block text-muted">Apr 19, 2019</span>
                                    <h2 class="h4  mb-3"><a href="single.html">Knowing the Difference Is Key to Effective Logistics</a></h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                                    <p><a href="single.html" class="text-primary">Read More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-5 d-flex blog-entry" data-aos="fade-right" data-aos-delay="">
                                <a href="#" class="blog-thumbnail"><img src="/PhpProject1/resourceclient/images/cargo_air_small.jpg" alt="Image" class="img-fluid"></a>
                                <div class="blog-excerpt">
                                    <span class="d-block text-muted">Apr 19, 2019</span>
                                    <h2 class="h4  mb-3"><a href="single.html">Knowing the Difference Is Key to Effective Logistics</a></h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                                    <p><a href="single.html" class="text-primary">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-light" id="contact-section">
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
        </div>
        <?php
        include './footerclient.php';
        ?>
    </div>
    <?php
    include './jsclient.php';
    ?>
</body>
</html>
