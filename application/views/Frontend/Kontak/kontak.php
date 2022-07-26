    <!-- Page Header Start -->
    <br>
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Kontak</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Kontak</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5"><?php echo $judul;?></h1>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                    <?php echo $this->session->flashdata("message");?>
                        <?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

                        <?php
                        $attributes = array('autocomplete' => 'off');
                        echo form_open_multipart("kontak/add",$attributes);
                        ?>
                            <div class="form-group">
                                <input name="nama" id="nama" type="text" class="form-control p-4" placeholder="Nama Lengkap" 
                                value="<?php echo set_value("nama");?>" required>
                            </div>
                            <div class="form-group">
                                <input name="subjek" id="subjek" type="text" class="form-control p-4" placeholder="Subject" 
                                value="<?php echo set_value("subjek");?>" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control py-3 px-4"  name="pesan" id="pesan" type="text" rows="5" placeholder="Message" 
                                value="<?php echo set_value("pesan");?>" required></textarea>
                            </div>
                            <div>
                                <input class="btn btn-primary py-3 px-5" type="submit" name="submit" value="Send Message" />
                            </div>
                        <?php echo form_close();?>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">KANTOR PUSAT</h5>
                                <p>Jl. Raya Wates-Jogjakarta, Karanglo, Argomulyo, Kec. Sedayu, Kab.Bantul, Daerah Istimewa Yogyakarta 55752</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">KANTOR CABANG</h5>
                                <p>Gg. Jemb. Merah No.84C</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">CUSTOMER SERVICE</h5>
                                <p>customer@rocket.com</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">RETURN & REFUND</h5>
                                <p class="m-0">refund@rocket.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->