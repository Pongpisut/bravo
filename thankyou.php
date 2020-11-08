<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bravo - Webinar Live</title>
    <meta name="keywords" content=">Webinar Live" />
    <meta name="description" content=">Webinar Live" />
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="brackets">
    <meta name='copyright' content='orange technology solution co.,ltd.'>
    <meta name='designer' content='Peem'>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link type="image/ico" rel="shortcut icon" href="assets/img/favicon.ico">

    <?php include 'stylesheet.php'; ?>
</head>

<body>
    <section id="thankyou-page">
        <div class="menu-top-thankyou bg-whites">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 text-center mb-3">
                        <a class="navbar-brand" href="javascript:void(0)"> <img src="assets/img/logo.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 date-learning">
                        <i class="fas fa-check-circle"></i> ยืนยันการเข้าเรียน วันอังคารที่ 18 พฤศจิกายน 2564 เวลา 18.00 น.
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 button-waitelive">
                        <a href="waitlive.php" c> <button class="btn btn-gradient w-100"><i class="fas fa-tv"></i> รับชม Live </button></a>
                        <p class="text-send-mail">เราส่งรายละเอียดให้ท่านทาง E-mail แล้ว</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="box-text-thank">
                        <h1>ขอบคุณสำหรับการซื้อคอร์สเรียน</h1>
                        <p class="sub-thank">เราจะทำให้ท่านมีรายได้เพิ่มขึ้นหลังจากการเรียนจบ</p>
                    </div>

                    <div class="box-iframe text-center embed-responsive embed-responsive-16by9">
                        <iframe width="560" class="embed-responsive-item" height="315" src="https://www.youtube.com/embed/JrrLT-ZgsJU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>


        <div class="box-step">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="box-step1 text-center">
                            <h2>ขั้นตอนที่ 1 ดาวน์โหลด E-BOOK</h2>
                            <img src="assets/img/book.png" class="img-fluid e-book-download" alt=""> <br>
                            <img src="assets/img/Arrow-Drawing.gif" class="img-fluid img-arrow" alt=""> <br>
                            <a href="javascript:void(0)"> <button class="btn btn-gradient btn-download "><i class="fas fa-download"></i> ดาวน์โหลด</button></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="box-step2 text-center">
                            <h2>ขั้นตอนที่ 2 รอเข้าชม Live</h2>
                            <img src="assets/img/logo.png" class="img-fluid mt-4 mb-4" alt="">
                            <p class="begin-time">WEBINAR LIVE จะเริ่มขึ้นเมื่อ</p>
                            <div id="countdown" class="justify-content-center">
                                <ul>
                                    <li><span id="days"></span><span class="text-date">วัน</span></li>
                                    <li><span id="hours"></span><span class="text-date">ชั่วโมง</span></li>
                                    <li><span id="minutes"></span><span class="text-date">นาที</span></li>
                                    <li><span id="seconds"></span><span class="text-date">วินาที</span></li>
                                </ul>
                            </div>

                            <a href="waitlive.php"> <button class="btn btn-gradient btn-watch-live"><i class="fas fa-tv"></i> รับชม Live</button></a>
                            <p class="suitable-text">เหมาะสำหรับรับชมผ่าน แท็บเล็ต และ คอมพิวเตอร์</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-thankyou">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="box-lecturer">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 text-center mb-4">
                                    <div class="box-img">
                                        <img src="assets/img/human.png" class="img-fluid img-human" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-9 col-md-9 col-sm-9 box-name-lecturer">
                                    <p class="text-blacks title-lecturer">วิทยากร</p>
                                    <p class="text-blues name-lecturer">นาย อิทธิพัฒน์ ทางศาลา</p>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <b class="experience-lecturer">ประสบการณ์วิทยากร</b>
                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                        <p class="text-lecturer">Lorem Ipsum is simply dummy text.</p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="box-time-learning">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 text-center mb-4">
                                    <div class="box-img">
                                        <img src="assets/img/work.png" class="img-fluid img-work rounded-circle" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-9 col-md-9 col-sm-9 box-time-learn">
                                    <p class="text-blacks title-times-learn">เวลาในการเรียน</p>
                                    <p class="text-blues times-learn">คอร์สนี้ใช้เวลาประมาณ : 3 ชั่วโมง</p>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <b class="experience-learning">สิ่งที่จะได้รับจากการเรียนคอร์สนี้</b>
                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                        <p class="text-learning">สิ่งที่จะได้รับจากการเรียนคอร์สนี้</p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-thankyou">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                        <p class="copyright-thankyou">Copyright © 2020 all rights reserved. | Bravo Win Trade</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="toTop"><i class="fas fa-angle-up"></i></div>
    </section>



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