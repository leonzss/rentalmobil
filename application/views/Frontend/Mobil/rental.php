    <!-- Page Header Start -->
    <br>
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Rental</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Rental</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 center">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5"><?php echo $judul;?></h1>
            <div class="row justify-content-md-center">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                    <?php echo $this->session->flashdata("message");?>
                        <?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

                        <?php
                        $attributes = array('autocomplete' => 'off');
                        echo form_open_multipart("rental/add",$attributes);
                        ?>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input name="nama" id="nama" type="text" class="form-control" value="<?php echo
                                set_value("nama");?>" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Lengkap</label>
                                <input name="alamat" id="alamat" type="text" class="form-control" value="<?php echo
                                set_value("alamat");?>" required>
                            </div>
                            <div class="form-group">
                                <label for="kode_mobil">Kode Mobil Yang Ingin Disewa</label>
                                <input name="kode_mobil" id="kode_mobil" type="text" class="form-control" value="<?php echo
                                set_value("kode_mobil");?>" required>
                            </div>
                            <div class="form-group">
                                <label for="durasi_sewa">Durasi Sewa</label>
                                <select name="durasi_sewa" id="durasi_sewa" class="form-control" required>
                                    <option value="">Silahkan Pilih</option>
                                    <option value="1">12 Jam</option>
                                    <option value="0">Full Day</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">WA / Telpon</label>
                                <input name="no_hp" id="no_hp" type="text" class="form-control" value="<?php echo
                                set_value("no_hp");?>" required>
                            </div>
                            <div class="form-group">
                                <label for ="image_trf">Upload Bukti Transfer</label>
                                <input name="image_trf" type="file" id="image_trf" class="form-control" required>
                            </div>
                            <div>
                                <input class="btn btn-primary py-3 px-5" type="submit" name="submit" value="RENTAL" />
                            </div>
                        <?php echo form_close();?>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->