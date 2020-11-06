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


    <section id="waitlive">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="box-wait-live">
                        <h2 class="title-live">Live จะเริ่มขึ้นเวลา 18.00 น.</h2>
                        <p class="subtitle-live">แนะนำคอร์สเรียนเบื้องต้น</p>

                        <div class="box-iframe-wait embed-responsive embed-responsive-16by9">
                            <iframe width="100%" class="embed-responsive-item" height="500" src="https://www.youtube.com/embed/JrrLT-ZgsJU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="box-wait-download">
                        <div class="watch">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 text-center">
                                    <i class="fas fa-tv"></i>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <p class="title-watch">ช่องทางที่เหมาะสำหรับการรับชม</p>
                                    <p class="sub-watch">เหมาะสำหรับทุกอุปกรณ์ แต่จะดีหากรับชมบน คอมพิวเตอร์ และ แท็บเล็ต</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="download-ebook">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 text-center">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <a href="javascript:void(0)" class="title-download-book">
                                        <p>ดาวน์โหลด Webinar E-Book</p>
                                    </a>
                                    <p class="sub-download-book">ดาวน์โหลด E-book สำหรับคอร์สเรียนของท่าน</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="box-wait-teacher">
                        <?php for ($i = 1; $i <= 2; $i++) { ?>
                            <div class="teacher-info">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 text-center">
                                        <img src="assets/img/human.png" class="img-fluid img-teacher-wait" alt="">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        <p class="name-teacher">นาย อิทธิพัฒน์ ทางศาลา</p>
                                        <p class="standing-teacher">วิทยากร Webinar Live</p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-wait-live">
            <div class="container">
                <div class="box-detail-wait">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 box-logo-site">
                            <h2 class="name-site">WEBINAR LIVE</h2>
                            <p class="date-live">วันอังคารที่ 18 เดือนพฤษจิกายน 2564</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 box-countdown-wait">
                            <p class="title-live">จะเริ่มขึ้นในเร็วๆนี้</p>
                            <div id="countdown" class="justify-content-center">
                                <ul>
                                    <li><span id="days"></span><span class="text-date">วัน</span></li>
                                    <li><span id="hours"></span><span class="text-date">ชั่วโมง</span></li>
                                    <li><span id="minutes"></span><span class="text-date">นาที</span></li>
                                    <li><span id="seconds"></span><span class="text-date">วินาที</span></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</body>

</html>