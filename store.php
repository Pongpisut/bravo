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


    <section id="store">

        <div class="header-store">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 sol-sm-12">
                        <div class="box-img-logo">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 sol-sm-12 ">
                        <div class="box-btn text-right">
                            <a href="salepage.php"><button type="submit" class="btn btn-lg btn-danger btn-register-header"><i class="fas fa-user-plus"></i> ลงทะเบียนเรียน</button></a>
                        </div>
                    </div>
                </div>

                <div class="box-course-store">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            <h2 class="title-course">คอร์สเรียนทั้งหมด</h2>
                        </div>
                        <?php
                        $name_course = array(
                            '1' => 'BWT GOLD Trading Strategy  39,900.00 ฿',
                            '2' => 'Fundamental For Trading  12,900.00 ฿',
                            '3' => 'Start To forex  6,900.00 ฿',
                            '4' => 'Advance Demand & Supply  20,000.00 ฿',
                            '5' => 'Private Advance Demand & Supply  199,900.00 ฿',
                            '6' => 'I’m Trader 100%  0 ฿',
                            '7' => 'Bravo Camp 39,900.00 ฿',
                            '8' => 'Bravo Win Trade Seminar 0 ฿',
                            '9' => 'Life Forex Trip (Coming Soon) 0 ฿',
                        );
                        ?>
                        <?php for ($i = 1; $i <= 9; $i++) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="detail-store.php">
                                    <div class="box-course-sale">
                                        <div class="box-img">
                                            <img src="assets/img/store/store-course-<?= $i; ?>.png" class="img-fluid" alt="">
                                            <p class="name-course"><?= $name_course[$i]; ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <div class="box-img-sale">
                            <img src="assets/img/banner-sale-price.png" class="img-fluid" alt="">
                        </div>

                        <a href="salepage.php"><button type="submit" class="btn btn-lg btn-danger btn-register-section"><i class="fas fa-user-plus"></i> ลงทะเบียนเรียน</button></a>

                    </div>
                </div>
            </div>
        </div>

        <!--  Reviews photo-->
        <div class="box-review-photo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="box-title-section">
                            <h2 class="title-section">รีวิวจากผู้เรียนกับ Webinar Live</h2>
                            <p class="sub-title">หลังจากเรียนแล้วชีวิตของพวกเขาเปลี่ยนไป</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
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
        <div class="box-skill">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="box-title-section">
                            <h2 class="title-section">สิ่งที่นักเรียนจะได้รับ</h2>
                            <p class="sub-title">สิ่งที่นักเรียนจะได้รับหลังจากเรียนคอร์สต่างๆ</p>
                        </div>
                    </div>

                    <?php for ($i = 1; $i <= 12; $i++) { ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 mt-4 mb-4">
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

        <div class="box-course-other">
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
                        <div class="col-lg-6 col-md-6 col-sm-6 box-detail-course">
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

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box-img-certificate">
                            <img src="assets/img/certificate.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
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
                        <div class="col-lg-4 col-md-4 col-sm-4 grid-user-reviews">
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
                    <span class="jumpto"><a href="javascript:void(0)">สิ่งที่นักเรียนจะได้รับ</a></span>
                    <span class="jumpto"><a href="javascript:void(0)">รีวิวจากผู้เรียน</a></span>
                    <span class="jumpto"><a href="javascript:void(0)">ลงทะเบียนเรียน</a></span>
                    <span class="jumpto"><a href="javascript:void(0)">คอร์สเรียนอื่นๆ</a></span>

                    <p class="copyright">
                        Copyright © 2020 all rights reserved. | Bravo Win Trade
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--  End Footer -->

    <?php include 'javascript.php'; ?>

</html>