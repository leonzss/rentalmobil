    <body style="background:#F77D0A;">
        <div class="container">
            <!-- grid -->
            <div class="row">
                <div class="col-sm-5 mx-auto mt-5 pt-5">
                        <?php echo $this->session->flashdata("message");?>
                        <div class="card">
                        <div class="card-header">
                            <h2><?php echo $judul;?></h2>
                        </div>
                        <div class="card-body">
                            <?php $attributes = array('autocomplete' => 'off');
                            echo form_open_multipart("admin/login/cek_login",$attributes);
                            ?>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" required
                                        class="form-control" name="cms_user" id="cms_user" placeholder="Masukan Username">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" required
                                        class="form-control" name="cms_password" id="cms_password" placeholder="Masukan Password">
                                </div>
                                <input type="submit" name="submit" value="LOGIN" class="btn btn-primary btn-user btn-block"/>
                            <?php echo form_close();?>
                        </div>
                        <div class="card-footer text-muted">
                            Copyright &copy; <?= date('Y');?> - M. Anjas Leonardi
                        </div>
                    </div>
                </div>
            </div>
            <!-- grid -->
        </div>