<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HOT WHEELS</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url();?>asset/img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url();?>asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">
    
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <div class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Hot Wheels</h1>
                </div>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <?php echo anchor('home','Home', array('class' => 'nav-item nav-link'));?>
                        <?php echo anchor('tentang','Tentang', array('class' => 'nav-item nav-link'));?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Mobil</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <?php echo anchor('jenis_mobil','Jenis Mobil', array('class' => 'dropdown-item'));?>
                                <?php echo anchor('rental','Rental', array('class' => 'dropdown-item'));?>
                            </div>
                        </div>
                        <?php echo anchor('faqs','Faqs', array('class' => 'nav-item nav-link'));?>
                        <?php echo anchor('kontak','Kontak', array('class' => 'nav-item nav-link'));?>
                        <?php echo anchor('admin/login','Login', array('class' => 'nav-item nav-link'));?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
 	
	<?php echo $konten;?>

    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="<?php echo base_url();?>asset/img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php echo base_url();?>asset/img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php echo base_url();?>asset/img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php echo base_url();?>asset/img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php echo base_url();?>asset/img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php echo base_url();?>asset/img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php echo base_url();?>asset/img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php echo base_url();?>asset/img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>Location, City, Country</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>info@example.com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="<?php echo base_url();?>asset/img/gallery-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="<?php echo base_url();?>asset/img/gallery-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="<?php echo base_url();?>asset/img/gallery-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="<?php echo base_url();?>asset/img/gallery-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="<?php echo base_url();?>asset/img/gallery-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="<?php echo base_url();?>asset/img/gallery-6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
                <p class="mb-4">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
                <i>Lorem sit sed elitr sed kasd et</i>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; 2022 All Rights Reserved.</p>
		
							
        <p class="m-0 text-center text-body">Designed by <a href="https://www.instagram.com/leonzss_/">M. Anjas Leonardi</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>asset/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url();?>asset/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>asset/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>asset/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url();?>asset/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo base_url();?>asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url();?>asset/js/main.js"></script>
</body>

</html>