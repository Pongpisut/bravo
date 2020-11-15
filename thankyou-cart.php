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
    <section id="thankyou-page-cart">
        <div class="menu-top-thankyou bg-whites">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-3">
                        <a class="navbar-brand" href="javascript:void(0)"> <img src="assets/img/logo.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="box-text-thank">
                        <h1>ขอบคุณสำหรับการซื้อสินค้า Premium</h1>
                        <p class="sub-thank">ขอให้ท่านมีความสุขกับสินค้าของเรา</p>
                        <a href="product.php" class="btn btn-gradient"> <i class="fas fa-shopping-cart"></i> เลือกซื้อสินค้าต่อ</a>
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