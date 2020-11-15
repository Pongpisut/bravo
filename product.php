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

    <section id="product-premium">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="menu-top-thankyou bg-whites">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6  mb-3">
                                <a class="navbar-brand" href="javascript:void(0)"> <img src="assets/img/logo.png" class="img-fluid" alt=""></a>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 text-right mycart">
                                <a href="cart.php">
                                    <p class="icon-menu"> MY CART <i class="fas fa-shopping-cart cart-menu"></i></p>
                                    <p class="number-product"></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Menu top -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="container">
                    <div class="box-section-premium">
                        <h1 class="title-section">สินค้า Premium </h1>
                        <p class="sub-title">สินค้า Premium จาก Webinar Live </p>
                    </div>
                </div>
            </div>

            <!--  -->

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="box-product">
                    <div class="container">
                        <div class="row">
                            <?php for ($i = 1; $i <= 9; $i++) { ?>
                                <div class="col-lg-4 col-md-6 col-sm-12 items-product">
                                    <div class="box-product-premium">
                                        <div class="box-img">
                                            <img src="assets/img/product.png" class="img-fluid" alt="">

                                            <div class="text-center">
                                                <p class="name-product">Adidas</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 line-right">
                                                <p class="price">ราคา : 550 บาท</p>

                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="btn btn-add-cart"> <i class="fas fa-shopping-cart cart-menu"></i> เพิ่มลงตะกร้า</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
    </section>



    <!-- Footer -->
    <section class="footer-salepage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="img-logo-footer text-center">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-4">
                    <span class="menu-jump">ข้ามไปที่ :</span>
                    <span class="jumpto"><a href="index.php" class="page-scroll">Webinar Live</a></span>
                    <span class="jumpto"><a href="salepage.php" class="page-scroll">คอร์สเรียนต่างๆ</a></span>

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

    <script>
        $(function() {

            "use strict"

            var init = "0";
            var counter = 0;

            // Initial Cart
            $(".number-product").html(init);

            // Add Items To Basket
            function addToBasket() {
                counter++;
                $(".number-product").html(counter).animate({
                    'opacity': '0'
                }, 300, function() {
                    $(".number-product").delay(100).animate({
                        'opacity': '1'
                    })
                });
            }

            // Add To Basket Animation
            $(".btn-add-cart").on("click", function() {
                addToBasket();
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