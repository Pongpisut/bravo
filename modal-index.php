<!-- Modal -->
<div class="modal fade " id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header ">
                <h5 class="modal-title"><i class="fas fa-user-plus"></i> ลงทะเบียน</h5>

            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 text-center">
                            50% Complete
                            <div class="progress ">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex align-self-center justify-content-center mb-4">
                            <img src="assets/img/logo.png" class="img-fluid logo-modal" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="username"><i class="fas fa-user"></i> ชื่อผู้ใช้งาน</label>
                                <input type="text" class="form-control" id="username" placeholder="กรุณากรอกชื่อผู้ใช้งาน">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i> E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="กรุณากรอกอีเมล">
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="fas fa-phone-alt"></i> เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="phone" placeholder="กรุณากรอกเบอรโทรศัพท์">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gradient" id="register_modal_btn"><i class="fas fa-check"></i> ลงทะเบียน</button>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="far fa-clock"></i> เลือกเวลาเรียนที่ท่านสะดวกต่อการเรียน</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 text-center">
                            75% Complete
                            <div class="progress ">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex align-self-center justify-content-center mb-4">
                            <img src="assets/img/logo.png" class="img-fluid logo-modal" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <?php for ($i = 1; $i <= 4; $i++) { ?>
                                <div class="form-check items-select<?= $i; ?>">
                                    <input type="radio" class="form-check-input" name="radio-check" id="radio-check" value="option<?= $i; ?>">
                                    <label class="form-check-label"> วันนี้เวลา 16.00 น. </label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="thankyou.php"><button type="button" class="btn btn-gradient">ขั้นตอนต่อไป <i class="fas fa-angle-right"></i></button></a>
            </div>
        </div>
    </div>
</div>
<!--  -->


<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->


<!-- Modal -->
<div class="modal fade" id="timeModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="far fa-clock"></i> เลือกเวลาเรียนที่ท่านสะดวกต่อการเรียน</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 text-center">
                            50% Complete
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex align-self-center justify-content-center mb-4">
                            <img src="assets/img/logo.png" class="img-fluid logo-modal" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <?php for ($i = 1; $i <= 4; $i++) { ?>
                                <div class="form-check items-select<?= $i; ?>">
                                    <input type="radio" class="form-check-input" name="radio-check" id="radio-check" value="option<?= $i; ?>">
                                    <label class="form-check-label"> วันนี้เวลา 16.00 น. </label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gradient" id="select_time">ขั้นตอนต่อไป <i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->

<!-- Modal -->
<div class="modal fade " id="timeModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header ">
                <h5 class="modal-title"><i class="fas fa-user-plus"></i> ลงทะเบียน</h5>

            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 text-center">
                            75% Complete
                            <div class="progress ">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex align-self-center justify-content-center mb-4">
                            <img src="assets/img/logo.png" class="img-fluid logo-modal" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="username"><i class="fas fa-user"></i> ชื่อผู้ใช้งาน</label>
                                <input type="text" class="form-control" id="username" placeholder="กรุณากรอกชื่อผู้ใช้งาน">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i> E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="กรุณากรอกอีเมล">
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="fas fa-phone-alt"></i> เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="phone" placeholder="กรุณากรอกเบอรโทรศัพท์">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="thankyou.php"> <button type="button" class="btn btn-gradient"><i class="fas fa-check"></i> ลงทะเบียน</button></a>
            </div>
        </div>
    </div>
</div>