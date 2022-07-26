    <!-- Page Header Start -->
    <br>
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Jenis Mobil</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Jenis Mobil</h6>
        </div>
    </div>
    <!-- Page Header Start -->
     <!-- Rent A Car Start -->
     <h1 class="display-4 text-uppercase text-center mb-5"><?php echo $head?></h1>
     <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="row">
    <?php
            // cek apakah ada data atau tidak dari database
            if (count($hasil) > 0)
            {
                // jika terdapat data
                foreach ($hasil as $key => $list)
                {
                    ?>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="<?php echo base_url();?>uploaded_files/<?php echo $list
                        ['NEWS_IMAGE'];?>" alt="<?php echo $list['NEWS_IMAGE'];?>">
                        <h4 class="text-uppercase mb-4"><?php echo $list ['NEWS_TITLE'];?></h4>
                        <?php echo anchor('jenis_mobil/detail/'.$list['NEWS_ID'],'Lihat Detail', array('class' => 'btn btn-primary px-3'));?>
                    </div>
                </div>
                <?php
                }
            }
            else
            {
                //jika tidak terdapat data
                ?>
                    <h1>Data not available...</h1>
                <?php
            }
            ?>
            <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- Rent A Car End -->
