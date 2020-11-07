<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bravo - Webinar Live</title>

    <?php include 'stylesheet.php'; ?>
</head>

<body>

    <?php include 'header.php'; ?>


    <section id="detail-store">
        <!-- Slide -->
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="assets/img/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="assets/img/banner2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/banner3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- End Slide -->



        <!--  Reviews photo-->
        <div class="box-review-photo" id="reviews-photos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="box-title-section">
                            <h2 class="title-section">รีวิวจากผู้เรียนกับ Webinar Live</h2>
                            <p class="sub-title">หลังจากเรียนแล้วชีวิตของพวกเขาเปลี่ยนไป</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-down">
                        <div class="box-review-photo">
                            <img src="assets/img/reviews-photo.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 text-center ">
                        <a href="salepage.php"><button type="submit" class="btn btn-lg btn-danger btn-register-section"><i class="fas fa-user-plus"></i> ลงทะเบียนเรียน</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Reviews photo -->

        <!-- skill -->
        <div class="box-skill" id="box-skills">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="box-title-section">
                            <h2 class="title-section">สิ่งที่นักเรียนจะได้รับ</h2>
                            <p class="sub-title">สิ่งที่นักเรียนจะได้รับหลังจากเรียนคอร์สต่างๆ</p>
                        </div>
                    </div>

                    <?php for ($i = 1; $i <= 12; $i++) { ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 mt-4 mb-4" data-aos="fade-down">
                            <div class="box-skill-img">
                                <img src="assets/img/skills/skills-<?= $i; ?>.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- end skill -->

        <!-- course other -->

        <div class="box-course-other" id="course-others">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="box-title-section">
                            <h2 class="title-section">คอร์สเรียนเพิ่มเติมอื่นๆ</h2>
                            <p class="sub-title">เรามีอีกหลายหลักสูตรให้ท่านเลือก</p>
                        </div>
                    </div>


                    <?php $name_course = array(
                        '1' => 'BWT GOLD Trading Strategy',
                        '2' => 'Fundamental For Trading',
                        '3' => 'Start To forex',
                        '4' => 'Advance Demand & Supply',
                        '5' => 'Private Advance Demand & Supply',
                        '6' => 'I’m Trader 100%',
                    ); ?>
                    <?php for ($i = 1; $i <= 6; $i++) { ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 box-detail-course" data-aos="fade-right">
                            <a href="salepage.php">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="box-img-course-other mt-4 mb-4">
                                            <img src="assets/img/course-other/course-other-<?= $i; ?>.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <p><?= $name_course[$i]; ?></p>
                                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ea quo maiores rem officia iusto?</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>

                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <a href="salepage.php"><button type="submit" class="btn btn-lg btn-danger btn-register-section"><i class="fas fa-user-plus"></i> ลงทะเบียนเรียน</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end course other -->

        <!-- certificate -->
        <div class="box-certificate">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="box-title-section">
                            <h2 class="title-section">มีใบรับรองการเรียนอย่างเป็นทางการ</h2>
                            <p class="sub-title">เมื่อเรียนจบมีใบรับรองให้กับนักเรียนอย่างเป็นทางการ</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6" data-aos="fade-right">
                        <div class="box-img-certificate">
                            <img src="assets/img/certificate.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6" data-aos="fade-left">
                        <div class="box-icon-certificate">
                            <img src="assets/img/icon-certificate.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end certificate -->

        <!-- video -->
        <div class="box-video">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="box-title-section">
                            <h2 class="title-section">วิดีโอแนะนำหลักสูตร</h2>
                            <p class="sub-title">เรามีวิดีโอแนะนำหลักสูตรก่อนเข้าเรียนเพื่อให้ท่านตัดสินใจ</p>
                        </div>

                        <div class="box-video-iframe">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" class="embed-responsive-item" height="315" src="https://www.youtube.com/embed/JrrLT-ZgsJU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end video -->

        <!-- reviews-text -->
        <div class="box-reviews-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="box-section-reviews">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6 ">
                                    <div class="box-img-section">
                                        <img src="assets/img/icon-review-text.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="box-title-section">
                                        <h2 class="title-section">รีวิวจากผู้เรียน</h2>
                                        <p class="sub-title">รีวิวจากผู้เรียนที่เคยลงคอร์สต่างๆกับทาง Webinar Live</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php for ($i = 1; $i <= 9; $i++) { ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 grid-user-reviews" data-aos="fade-up">
                            <div class="box-reviews-text-user">
                                <div class="star">
                                    <?php for ($k = 1; $k <= 5; $k++) { ?>
                                        <i class="fas fa-star"></i>
                                    <?php } ?>
                                </div>
                                <p class="detail-reviews-text">ขอบคุณสำหรับคอร์สดีๆครับทำให้ผมมีกำไรเพิ่มขึ้นหลายเท่า จากที่เคยเติมเงินตลอดตอนนี้ได้ถอนแล้วครับ</p>
                                <p class="name-reviews">- David</p>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <a href="salepage.php"><button type="submit" class="btn btn-lg btn-danger btn-register-section"><i class="fas fa-user-plus"></i> ลงทะเบียนเรียน</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end reviews-text -->
    </section>


    <!-- Footer -->
    <section class="footer-salepage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="img-logo-footer text-center">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                        <p class="sub-logo">การฝึกอบรมเป็นการศึกษาแตัวอย่างที่ให้ไว้เป็นเพียงแนวทางในการต่อยอด<br>และผลลัพธ์ของคุณจะแตกต่างกันไป</p>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <span class="menu-jump">ข้ามไปที่ :</span>
                    <span class="jumpto"><a href="#box-skills" class="page-scroll">สิ่งที่นักเรียนจะได้รับ</a></span>
                    <span class="jumpto"><a href="#reviews-photos" class="page-scroll">รีวิวจากผู้เรียน</a></span>
                    <span class="jumpto"><a href="salepage.php" class="page-scroll">ลงทะเบียนเรียน</a></span>
                    <span class="jumpto"><a href="#course-others" class="page-scroll">คอร์สเรียนอื่นๆ</a></span>

                    <p class="copyright">
                        Copyright © 2020 all rights reserved. | Bravo Win Trade
                    </p>
                </div>
            </div>
        </div>
        <div id="toTop"><i class="fas fa-angle-up"></i></div>
    </section>
    <!--  End Footer -->

    <?php include 'javascript.php'; ?>

    <script type="text/javascript">
        $(function() {
            AOS.init({
                delay: 100,
                duration: 400,
            });
        });
    </script>

    <script>
        // to top
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $("#toTop").fadeIn();
            } else {
                $("#toTop").fadeOut();
            }
        });
        $("#toTop").click(function() {
            $("html, body").animate({
                    scrollTop: 0,
                },
                1800
            );
        });
    </script>

</html>