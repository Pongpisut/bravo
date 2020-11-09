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
    <section id="login-page">
        <div class="menu-top-thankyou bg-whites">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <a class="navbar-brand" href="javascript:void(0)"> <img src="assets/img/logo.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-2 col-sm-2"></div>
                <div class="col-lg-4 col-md-8 col-sm-8">
                    <div class="box-login">
                        <h3><i class="fas fa-user"></i> เข้าสู่ระบบ</h3>
                        <hr>
                        <form action="">
                            <div class="form-group">
                                <label for="username"><i class="fas fa-user"></i> ชื่อผู้ใช้งาน</label>
                                <input type="text" class="form-control" id="username" placeholder="ชื่อผู้ใช้งาน">
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="fas fa-unlock-alt"></i> รหัสผ่าน</label>
                                <input type="password" class="form-control" id="password" placeholder="รหัสผ่าน">
                            </div>
                            <div class="form-group">
                                <p>RECAPCHA</p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-gradient"><i class="fas fa-check"></i> เข้าสู่ระบบ</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-2 col-sm-2"></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

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