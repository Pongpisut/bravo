<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bravo - Webinar Live</title>

    <?php include 'stylesheet.php'; ?>
    <link rel="stylesheet" href="assets/plugin/css/plugins.css">
    <link rel="stylesheet" href="assets/plugin/css/smart_wizard.css">
</head>

<body>

    <?php include 'header.php'; ?>


    <section id="salepage">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="box-logo">
                        <img src="assets/img/logo.png" class="img-logo" alt="">
                    </div>

                    <div class="box-intro-course">
                        <h2 class="text-center">คอร์สเรียนทั้งหมด</h2>
                        <?php $item_course = array(
                            '1' => 'BWT GOLD Trading Strategy  39,900.00 ฿',
                            '2' => 'Fundamental For Trading  12,900.00 ฿',
                            '3' => 'Start To forex  6,900.00 ฿',
                            '4' => 'Advance Demand & Supply  20,000.00 ฿',
                            '5' => 'Private Advance Demand & Supply  199,900.00 ฿',
                            '6' => 'I’m Trader 100%  0 ฿',
                            '7' => 'Bravo Camp 39,900.00 ฿',
                            '8' => 'Bravo Win Trade Seminar 0 ฿',
                            '9' => 'Life Forex Trip (Coming Soon) 0 ฿',
                        ); ?>
                        <?php for ($i = 1; $i <= 9; $i++) { ?>
                            <p class="name-course"><span><?= $item_course[$i]; ?></span></p>
                        <?php } ?>
                    </div>

                    <div class="box-img-sale">
                        <img src="assets/img/banner-sale-price.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <!--  -->
                    <div class="form-regis-learn group-dektop">
                        <div class="section detail-desc form-regis">
                            <div class="white-shadow">



                                <div id="smartwizard" class="">
                                    <ul>
                                        <li class="step-title"><a href="#step-1"><span>ส่วนที่
                                                    1</span><br /><small>รายละเอียดผู้สมัคร</small></a></li>
                                        <li class="step-title"><a href="#step-2"><span>ส่วนที่ 2</span>
                                                <br /><small>คอร์สเรียนทั้งหมด</small></a></li>
                                    </ul>

                                    <div>
                                        <div id="step-1" class="">
                                            <h3 class="border-bottom border-gray pb-2 step-head"><i class="fa fa-user" aria-hidden="true"></i> รายละเอียดผู้สมัคร</h3>
                                            <div class="row form-mb-1">
                                                <div class="col-md-6">
                                                    <label for="">ชื่อ <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="fistname" placeholder="ชื่อ">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="">นามสกุล <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="lastname" placeholder="นามสกุล">
                                                </div>
                                            </div>

                                            <div class="row form-mb-1">
                                                <div class="col-md-6">
                                                    <label for="">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="phone" placeholder="เบอร์โทรศัพท์">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="">E-mail <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                                                </div>
                                            </div>

                                            <h3 class="border-bottom border-gray pb-2  step-head"><i class="fa fa-map-marker-alt"></i>
                                                ที่อยู่ปัจจุบัน</h3>

                                            <div class="row form-mb-1">
                                                <div class="col-md-2">
                                                    <label for="">เลขที่ <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="numbers" placeholder="เลขที่">
                                                </div>

                                                <div class="col-md-2">
                                                    <label for="">หมู่ที่</label>
                                                    <input type="text" class="form-control" id="moo" placeholder="หมู่ที่">
                                                </div>

                                                <div class="col-md-2">
                                                    <label for="">ซอย</label>
                                                    <input type="text" class="form-control" id="soi" placeholder="ซอย">
                                                </div>

                                                <div class="col-md-2">
                                                    <label for="">ถนน</label>
                                                    <input type="text" class="form-control" id="road" placeholder="ถนน">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="">แขวง/ตำบล <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="tamboon" placeholder="แขวง/ตำบล">
                                                </div>
                                            </div>

                                            <div class="row form-mb-1">
                                                <div class="col-md-4">
                                                    <label for="">เขต/อำเภอ <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="amphoe" placeholder="เขต/อำเภอ">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="">จังหวัด <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="province" placeholder="จังหวัด">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="">รหัสไปรษณีย์ <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="postcode" placeholder="รหัสไปรษณีย์">
                                                </div>

                                            </div>


                                        </div>
                                        <div id="step-2" class="">
                                            <h3 class="border-bottom border-gray pb-2  step-head"><i class="fa fa-book"></i>
                                                คอร์สเรียน</h3>

                                            <div class="row form-mb-1">
                                                <div class="col-md-3">
                                                    <img src="assets/img/course/10-tradegoldcourse-1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="title-course">BWT GOLD Trading Strategy </h4>
                                                    <h5 class="price-course"> 39,900.00 ฿</h5>
                                                    <h6 class="link-course"><a href="javascript:void(0)" target="_blank">อ่านรายละเอียดคอร์ส</a></h6>

                                                </div>

                                                <div class="col-md-3">
                                                    <img src="assets/img/course/course-seminar-1-1-1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="title-course">Fundamental For Trading </h4>
                                                    <h5 class="price-course"> 12,900.00 ฿</h5>
                                                    <h6 class="link-course"><a href="javascript:void(0)" target="_blank">อ่านรายละเอียดคอร์ส</a></h6>
                                                </div>
                                            </div>

                                            <div class="row form-mb-1">
                                                <div class="col-md-3">
                                                    <img src="assets/img/course/course-start.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="title-course">Start To forex </h4>
                                                    <h5 class="price-course"> 6,900.00 ฿</h5>
                                                    <h6 class="link-course"><a href="javascript:void(0)" target="_blank">อ่านรายละเอียดคอร์ส</a></h6>
                                                </div>

                                                <div class="col-md-3">
                                                    <img src="assets/img/course/course-advance-2.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="title-course">Advance Demand & Supply </h4>
                                                    <h5 class="price-course">20,000.00 ฿</h5>
                                                    <h6 class="link-course"><a href="่javascript:void(0)" target="_blank">อ่านรายละเอียดคอร์ส</a></h6>
                                                </div>
                                            </div>


                                            <div class="row form-mb-1">
                                                <div class="col-md-3">
                                                    <img src="assets/img/course/course-padvance-2-1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="title-course">Private Advance Demand & Supply </h4>
                                                    <h5 class="price-course"> 199,900.00 ฿</h5>
                                                    <h6 class="link-course"><a href="javascript:void(0)" target="_blank">อ่านรายละเอียดคอร์ส</a></h6>
                                                </div>

                                                <div class="col-md-3">
                                                    <img src="assets/img/course/banner1-3.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="title-course">I’m Trader 100% </h4>
                                                    <h5 class="price-course"> Free</h5>
                                                    <h6 class="link-course"><a href="javascript:void(0)" target="_blank">อ่านรายละเอียดคอร์ส</a></h6>
                                                </div>
                                            </div>


                                            <div class="row form-mb-1">
                                                <div class="col-md-3">
                                                    <img src="assets/img/course/course-camp-2-300x157-1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="title-course">Bravo Camp </h4>
                                                    <h5 class="price-course"> 39,900.00 ฿</h5>
                                                    <h6 class="link-course"><a href="javascript:void(0)" target="_blank">อ่านรายละเอียดคอร์ส</a></h6>
                                                </div>

                                                <div class="col-md-3">
                                                    <img src="assets/img/course/course-seminar-1.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="title-course">Bravo Win Trade Seminar</h4>
                                                    <h5 class="price-course">Free</h5>
                                                    <h6 class="link-course"><a href="javascript:void(0)" target="_blank">อ่านรายละเอียดคอร์ส</a></h6>
                                                </div>
                                            </div>

                                            <div class="row form-mb-1">
                                                <div class="col-md-3">
                                                    <img src="assets/img/course/course-lifeforex-2-1024x536-1-1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="title-course">Life Forex Trip (Coming Soon) </h4>
                                                    <h5 class="price-course">Free</h5>
                                                    <h6 class="link-course"><a href="javascript:void(0)" target="_blank">อ่านรายละเอียดคอร์ส</a></h6>
                                                </div>
                                            </div>

                                            <h3 class="border-bottom border-gray pb-2  step-head"><i class="fa fa-shopping-cart"></i>
                                                เลือกคอร์สเรียน</h3>

                                            <div class="row form-mb-1">
                                                <div class="col-md-12">
                                                    <select class="custom-select" id="course_learn">
                                                        <option selected>กรุณาเลือกคอร์สเรียนที่ท่านสนใจ...</option>
                                                        <option value="1">BWT GOLD Trading Strategy | 39,900.00 ฿</option>
                                                        <option value="2">Fundamental For Trading | 12,900.00 ฿</option>
                                                        <option value="3">Start To forex | 6,900.00 ฿</option>
                                                        <option value="4">Advance Demand & Supply | 20,000.00 ฿</option>
                                                        <option value="5">Private Advance Demand & Supply | 199,900.00 ฿</option>
                                                        <option value="6">I’m Trader 100% | Free</option>
                                                        <option value="7">Bravo Camp | 39,900.00 ฿</option>
                                                        <option value="8">Bravo Win Trade Seminar | Free</option>
                                                        <option value="9">Life Forex Trip (Coming Soon) | Free</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-secondary btn-finish mt-4"><i class="fas fa-check"></i> ยืนยันการลงทะเบียน</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>

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
                        <a href="javascript:void(0)"><button type="submit" class="btn btn-lg btn-danger btn-register-section"><i class="fas fa-user-plus"></i> ลงทะเบียนเรียน</button></a>
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
                            <a href="javascript:void(0)">
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
                        <a href="javascript:void(0)"><button type="submit" class="btn btn-lg btn-danger btn-register-section"><i class="fas fa-user-plus"></i> ลงทะเบียนเรียน</button></a>
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
                    <div class="col-lg-12 col-md-12 col-sm-12">
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
                        <a href="javascript:void(0)"><button type="submit" class="btn btn-lg btn-danger btn-register-section"><i class="fas fa-user-plus"></i> ลงทะเบียนเรียน</button></a>
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
                    <span class="jumpto"><a href="#salepage" class="page-scroll">ลงทะเบียนเรียน</a></span>
                    <span class="jumpto"><a href="#course-others" class="page-scroll">คอร์สเรียนอื่นๆ</a></span>

                    <p class="copyright">
                        Copyright © 2020 all rights reserved. | Bravo Win Trade
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--  End Footer -->

    <?php include 'javascript.php'; ?>

    <script src="assets/plugin/js/jquery.smartWizard.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection,
                stepPosition) {
                //alert("You are on step "+stepNumber+" now");
                if (stepPosition === 'first') {
                    $("#prev-btn").addClass('disabled');
                } else if (stepPosition === 'final') {
                    $("#next-btn").addClass('disabled');
                } else {
                    $("#prev-btn").removeClass('disabled');
                    $("#next-btn").removeClass('disabled');
                }
            });

            // Toolbar extra buttons
            var btnFinish = $().text('Finish')
                .addClass('btn btn-info')
                .on('click', function() {
                    alert('Finish Clicked');
                });
            var btnCancel = $().text('Cancel')
                .addClass('btn btn-danger')
                .on('click', function() {
                    $('#smartwizard').smartWizard("reset");
                });


            // Smart Wizard
            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'default',
                transitionEffect: 'fade',
                showStepURLhash: true,
                toolbarSettings: {
                    toolbarPosition: 'both',
                    toolbarButtonPosition: 'end',
                    toolbarExtraButtons: [btnFinish, btnCancel]
                }
            });

            // define a action for finish btn
            $('.btn-fnsh').on('click', function() {
                alert('Finish clicked!')
            });



            $("#prev-btn").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });

            $("#next-btn").on("click", function() {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });

            $("#theme_selector").on("change", function() {
                // Change theme
                $('#smartwizard').smartWizard("theme", $(this).val());
                return true;
            });

            // Set selected theme on page refresh
            $("#theme_selector").change();
        });
    </script>

    <script type="text/javascript">
        $(function() {
            AOS.init({
                delay: 100,
                duration: 400,
            });
        });
    </script>
</body>

</html>