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
                            <div class="col-lg-12 col-md-12 col-sm-12  mb-3">
                                <a class="navbar-brand" href="javascript:void(0)"> <img src="assets/img/logo.png" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Menu top -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="container">
                    <div class="box-section-premium-cart">
                        <h1 class="title-section-cart">สินค้า Premium </h1>
                        <p class="sub-title-cart">รายละเอียดการสั่งซื้อสินค้า </p>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="mt-4">
                                    <a href="product.php" class="link-back"><i class="fas fa-shopping-cart cart-menu"></i> สินค้าพรีเมี่ยม</a> / <a href="javascript:void(0)">รายละเอียดสินค้า</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-4 ">
                                <p class="total-products">จำนวนสินค้าทั้งหมด 3 ชิ้น</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <!--  -->

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="container">
                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                        <div class="box-items-cart">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="box-img">
                                        <img src="assets/img/product.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="box-content-cart">
                                        <p class="name-product-cart">หมวก adidas</p>
                                        <p class="price-product-cart">500 บาท</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php } ?>

                    <div class="row text-right box-sum-cart ">
                        <div class="col-lg-8 col-md-6 col-sm-8"></div>
                        <div class="col-lg-4 col-md-6 col-sm-4">
                            <h2 class="mb-4">ยอดรวมสุทธิ</h2>
                            <p>สินค้า : หมวก adidas <span> 550 บาท</span></p>
                            <p>สินค้า : หมวก adidas <span> 550 บาท</span></p>
                            <p class="sum-price">ราคารวม : <span>550 บาท</span></p>
                        </div>
                        <hr class="w-100">
                    </div>
                    <!--  -->

                    <form action="" class="form-contact-cart">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h2>รายละเอียดช่องทางการรับสินค้า</h2>
                                <hr>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="name">ชื่อจริง</label>
                                    <input type="text" class="form-control" id="firstname" placeholder="กรุณากรอกชื่อจริง">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="name">นามสกุล</label>
                                    <input type="text" class="form-control" id="lastname" placeholder="กรุณากรอกนามสกุล">
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name">ที่อยู่</label>
                                    <textarea type="text" class="form-control text-area" id="address" placeholder="กรุณากรอกที่อยู่"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 text-right">
                                <a href="thankyou-cart.php" class="btn btn-gradient"> <i class="fas fa-shopping-cart"></i> ยืนยันการสั่งซื้อ</a>
                            </div>


                        </div>
                    </form>

                    <!--  -->
                </div>
            </div>
            <!--  -->
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