    <!-- Page Header Start -->
    <br>
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Detail Mobil</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Detail Mobil</h6>
        </div>
    </div>
    <h1 class="display-4 text-uppercase text-center mb-5"><?php echo $head?></h1>
            <?php
            //cek apakah ada data atau tidak dari database
            if (count($hasil) > 0)
            {
            ?>
<div class="container">
  <div class="row justify-content-md-center">
<div class="col-lg-10">
<div class="card mt-5 mb-5">
  <div class="card-header">
    <p class="badge badge-info float-right">KATEGORI <?php echo $hasil['NEWS_CAT_NAME']; ?></p>
    <h4><?= $hasil['NEWS_TITLE']; ?></h4>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card-body"></br></br></br>
      <img class="img-fluid" src="<?php echo base_url();?>uploaded_files/<?php echo $hasil['NEWS_IMAGE'];?>" 
      alt="<?php echo $hasil['NEWS_IMAGE'];?>">
      </div>
    </div>
    <div class="col-md-6">
      <div class="table-responsive">
        <table class="table table-md mt-4">
          <tr>
            <th>Kode Mobil</th>
            <td>: <?php echo $hasil['KODE_MOBIL']; ?></td>
          </tr>
          <tr>
            <th>Merk</th>
            <td>: <?php echo $hasil['NEWS_TITLE']; ?></td>
          </tr>
          <tr>
            <th>No. Plat</th>
            <td>: <?php echo $hasil['PLAT_MOBIL']; ?></td>
          </tr>
          <tr>
            <th>Warna</th>
            <td>: <?php echo $hasil['NEWS_DESCRIPTION']; ?></td>
          </tr>
          <tr>
            <th>Tahun</th>
            <td>: <?php echo $hasil['TAHUN']; ?></td>
          </tr>
          <tr>
            <th>Harga Sewa</th>
            <td>: <?php echo $hasil['HARGA_SEWA']; ?></td>
          </tr>
          <tr>
            <th>Transmisi</th>
            <td>
						<?php if($hasil['TRANSMISI'] == 1) : ?>
							<div class="badge badge-success">Manual</div>
						<?php else : ?>
							<div class="badge badge-success"> Automatic</div>
						<?php endif; ?>
					  </td>
          </tr>
          <tr>
            <th>AC Mobil</th>
            <td>
						<?php if($hasil['AC'] == 1) : ?>
							<div class="badge badge-success">Tersedia</div>
						<?php else : ?>
							<div class="badge badge-danger">Tidak Tersedia</div>
						<?php endif; ?>
					  </td>
          </tr>
          <tr>
            <th>Status Mobil</th>
            <td>
						<?php if($hasil['STATUS_MOBIL'] == 1) : ?>
							<div class="badge badge-success">Tersedia</div>
						<?php else : ?>
							<div class="badge badge-danger">Sedang Disewa</div>
						<?php endif; ?>
					  </td>
          </tr>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <?php

            }
            else
            {
                //jika tidak terdapat data
                ?>
                  <div class="row justify-content-md-center">
                      <h1>Data not available...</h1>
                  </div>
                <?php
            }
            ?>
            </div>
            <div class="row justify-content-md-center">
            <?php echo anchor('jenis_mobil','BACK', array('class' => 'btn btn-primary py-2 px-4'));?>
          </div>
          </div>
</div>
<!-- /.col-lg-9 -->

</div>
<!-- /.row -->