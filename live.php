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

    <section id="live">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-8 zone-live">
                <div class="box-iframe text-center embed-responsive embed-responsive-16by9">
                    <iframe width="560" class="embed-responsive-item" height="315" src="https://www.youtube.com/embed/JrrLT-ZgsJU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-4 zone-chat">
                <div class="box-chat">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <div class="box-comment-show">
                            <p class="name-user">David</p>
                            <p class="comment-text">เสียงและภาพคมชัดดีครับ</p>
                            <hr class="hr-chat">
                        </div>
                    <?php } ?>
                </div>

                <div class="box-salecourse">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-download"></i> ดาวน์โหลดไฟล์ <span style="float:right;"><i class="fas fa-angle-down"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <a href="javascript:void(0)">
                                        <div class="row download-section">
                                            <div class="col-lg-3 col-md-3 col-sm-3 text-center">
                                                <i class="far fa-file-pdf"></i>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                <p>WEBINAR LIVE เนื้อหาการเรียน</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fas fa-shopping-cart"></i> Course <span style="float:right;"><i class="fas fa-angle-down"></i></span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <!--  -->
                                    <form id="msform">
                                        <fieldset>
                                            <div class="box-intro-course">
                                                <p class="name-site">WEBINAR LIVE</p>
                                                <p class="intro-site"> สำหรับคนไม่มีพื้นฐานก็เรียนได้</p>

                                                <?php $detail_items = array(
                                                    '1' => 'รับประกันการทำกำไร',
                                                    '2' => 'ยกเลิกได้ตลอดเวลาไม่มีสัญญาระยะยาว',
                                                    '3' => 'ลูกค้าจะไม่ถูกเรียกเก็บเงินหากไม่มีการแจ้งเตือน',
                                                    '4' => 'ทีมงานของเราดูแลคุณทุกย่างก้าว',
                                                ); ?>
                                                <?php for ($i = 1; $i <= 4; $i++) { ?>
                                                    <p class="detail-intro"> <i class="fas fa-check"></i> <?= $detail_items[$i]; ?> </p>
                                                <?php } ?>
                                            </div>
                                            <button type="button" class="btn btn-gradient next" name="next"><i class="fas fa-user-plus"></i> สมัครเรียน</button>
                                        </fieldset>

                                        <!--  -->
                                        <fieldset>
                                            <p class="name-site-tab2">WEBINAR LIVE SYSTEMS</p>
                                            <p class="intro-site-tab2">คลิกเลือกคอร์สเรียนที่ท่านสนใจ . . .</p>
                                            <div class="row">
                                                <?php for ($i = 1; $i <= 6; $i++) { ?>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 mt-2 mb-4">
                                                        <div class="box-img-course-tab2  items-course-tab2-<?= $i; ?>">
                                                            <img src="assets/img/course-tab2/course-tab2-<?= $i; ?>.png" class="img-fluid" alt="">
                                                            <span class="check-tab-tab2 items-tab2-<?= $i; ?>"></span>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <button type="button" class="btn btn-gradient next mt-2" name="next"><i class="fas fa-user-plus"></i> สมัครเรียน</button>
                                        </fieldset>
                                        <!--  -->

                                        <!--  -->
                                        <fieldset>
                                            <p class="name-site-tab3">คลิกเลือกช่องทางการชำระเงิน</p>
                                            <div class="row">
                                                <?php for ($i = 1; $i <= 6; $i++) { ?>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 mt-2 mb-4">
                                                        <div class="box-img-payment-tab3  items-course-tab3-<?= $i; ?>">
                                                            <img src="assets/img/payment/payment-<?= $i; ?>.png" class="img-fluid" alt="">
                                                            <span class="check-tab-tab3 items-tab3-<?= $i; ?>"></span>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <button type="button" class="btn btn-gradient next mt-2" name="next">ขั้นตอนต่อไป <i class="fas fa-angle-right"></i></button>
                                        </fieldset>
                                        <!--  -->

                                        <!--  -->
                                        <fieldset>
                                            <p class="name-site-tab4">วิดีโอโบนัสจะเริ่มขึ้นเมื่อเวลา</p>
                                            <div id="countdown" class="justify-content-center">
                                                <ul>
                                                    <li><span id="days"></span><span class="text-date"> :</span></li>
                                                    <li><span id="hours"></span><span class="text-date"> :</span></li>
                                                    <li><span id="minutes"></span><span class="text-date"> :</span></li>
                                                    <li><span id="seconds"></span><span class="text-date"></span></li>
                                                </ul>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12  mt-2 mb-4 ">
                                                    <div class="box-img-bonus-tab4 text-center">
                                                        <img src="assets/img/bonus-tab4.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"> <button type="button" class="btn btn-gradient mt-2"><i class="fas fa-tv"></i> รับชมวิดีโอ </button></a>
                                        </fieldset>
                                        <!--  -->
                                    </form>

                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-share-comment">
                    <div class="box-btn-share">
                        <span class="menu-share"><i class="fas fa-share-alt"></i> แชร์ : </span>
                        <span class="social-share"> <a href="javascript:void(0)"><i class="fab fa-facebook-square"></i> Facebook</a></span>
                        <span class="social-share"> <a href="javascript:void(0)"><i class="fab fa-line"></i> Line</a></span>
                        <span class="social-share"> <a href="javascript:void(0)"><i class="fab fa-twitter-square"></i> twitter</a></span>
                    </div>
                    <div class="box-comment">
                        <input type="text" class="form-control border-blue" placeholder="ความคิดเห็นของท่าน">
                        <button class="btn btn-comment"><i class="fas fa-paper-plane"></i> แสดงความคิดเห็น</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="toTop"><i class="fas fa-angle-up"></i></div>



    <?php include 'javascript.php'; ?>

    <script>
        $(document).ready(function() {
            for (let i = 0; i <= 6; i++) {
                $('.items-course-tab2-' + i).click(function() {
                    $('.items-tab2-' + i).addClass('check-tab-active-tab2');
                });

                $('.items-course-tab3-' + i).click(function() {
                    $('.items-tab3-' + i).addClass('check-tab-active-tab3');
                });
            }
        });
    </script>

    <script>
        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let nextlive = "Nov 1, 2021 09:32:00",
                countDown = new Date(nextlive).getTime(),
                x = setInterval(function() {

                    let now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    //do something later when date is reached
                    if (distance < 0) {
                        let countdown = document.getElementById("countdown");

                        countdown.style.display = "none";
                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());
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
</body>

</html>