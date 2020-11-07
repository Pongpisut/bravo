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



    <section id="content-index">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="box-bg-user">
                        <a href="javascript:void(0)">
                            <img src="assets/img/bg-user-index.png" class="img-fluid img-bg-user" alt="">
                        </a>
                    </div>

                    <div class="box-countdown-course">
                        <div class="img-logo-bravo">
                            <img src="assets/img/logo.png" class="img-fluid img-logo-index" alt="">
                        </div>

                        <div class="box-detail-countdown">
                            <p>พบกับหลักสูตร</p>
                            <h2>DEMAND SUPPLY</h2>
                            <hr class="line-course">

                            <div class="price">
                                <p>3300 B </p><span class="free-price">ฟรี</span>
                            </div>


                            <div class="box-next-live">
                                <p class="text-next-live">ไลฟ์ครั้งต่อไป วันที่ 1 เดือน พศจิกายน 2563</p>
                                <div class="box-count-down">
                                    <div id="countdown" class="justify-content-center">
                                        <ul>
                                            <li><span id="days"></span><span class="text-date">วัน</span></li>
                                            <li><span id="hours"></span><span class="text-date">ชั่วโมง</span></li>
                                            <li><span id="minutes"></span><span class="text-date">นาที</span></li>
                                            <li><span id="seconds"></span><span class="text-date">วินาที</span></li>
                                        </ul>
                                    </div>
                                    <!--  -->
                                    <div class="message">
                                        <div id="content">
                                            <?php for ($i = 1; $i <= 4; $i++) { ?>
                                                <div class="form-check items-select<?= $i; ?>">
                                                    <input type="radio" class="form-check-input" name="radio-check" id="radio-check" value="option<?= $i; ?>">
                                                    <label class="form-check-label"> วันนี้เวลา 16.00 น. </label>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>

                            <div class="box-btn ">
                                <button type="button" class="btn btn-gradient  btn-banner-index " data-toggle="modal" data-target="#myModal1"><i class="fas fa-user-plus"></i> สมัครเรียน</button>
                                <p id="text-or">หรือ</p>
                                <button type="button" class="btn btn-gradient btn-banner-index " data-toggle="modal" data-target="#timeModal1"><i class="far fa-clock"></i> เลือกเวลาเรียน</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-card-course">
            <div class="container">
                <div class="row">
                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                        <?php $items_card_th = array(
                            '1' => 'สอนตั้งแต่เริ่มต้น',
                            '2' => 'ดาวน์โหลดหนังสือเรียน',
                            '3' => 'เลือกเวลาเรียนได้ด้วยตัวเอง',
                        );
                        ?>
                        <?php $items_card_en = array(
                            '1' => 'Step By Step',
                            '2' => 'Download E-book',
                            '3' => 'Customized Plan',
                        );
                        ?>

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card card-course">
                                <div class="card-header text-center">
                                    <p class="name-th"><?= $items_card_th[$i]; ?></p>
                                    <p class="name-en"><?= $items_card_en[$i]; ?></p>
                                </div>
                                <div class="card-body">
                                    <img src="assets/img/items-course-index-<?= $i; ?>.png" class="img-fluid" alt="">
                                </div>
                            </div>

                            <?php
                            if ($i == 1) {
                                echo '
                                <div class="box-modal text-center">
                                <a href="javscript:void(0)" class="btn btn-gradient" data-toggle="modal" data-target="#myModal1">
                                <i class="fas fa-user-plus"></i> สมัครเรียน
                                </a>
                            </div>
                            ';
                            } else if ($i == 2) {
                                echo '
                                <div class="box-modal text-center">
                                <a href="javscript:void(0)" class="btn btn-gradient" data-toggle="modal" data-target="#myModal1">
                                <i class="fas fa-download"></i> ดาวน์โหลดหนังสือ
                                </a>
                                </div>
                                ';
                            } else {
                                echo '
                                <div class="box-modal text-center">
                                <a href="javscript:void(0)" class="btn btn-gradient" data-toggle="modal" data-target="#timeModal1">
                                <i class="far fa-clock"></i> เลือกเวลาเรียน
                                </a>
                                </div>
                                ';
                            }

                            ?>


                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="footer-index">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                        <p>Copyright © 2020 All rights reserved. | Bravo Win Trade</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="toTop"><i class="fas fa-angle-up"></i></div>
    </section>


    <?php include 'modal-index.php'; ?>
    <?php include 'javascript.php'; ?>

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
                        let content = document.getElementById("content");
                        let btn_register = document.getElementById("register-btn");
                        let or = document.getElementById("text-or");

                        countdown.style.display = "none";
                        content.style.display = "block";
                        btn_register.style.display = "none";
                        or.style.display = "none";

                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());
    </script>

    <script>
        $("div[id^='myModal']").each(function() {

            var currentModal = $(this);

            //click next
            currentModal.find('#register_modal_btn').click(function() {
                currentModal.modal('hide');
                currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show');
            });

        });

        $("div[id^='timeModal']").each(function() {

            var currentModaltime = $(this);

            //click next

            currentModaltime.find('#select_time').click(function() {
                currentModaltime.modal('hide');
                currentModaltime.closest("div[id^='timeModal']").nextAll("div[id^='timeModal']").first().modal('show');
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
</body>

</html>