<h1> 
    <?php echo $judul;?>
    <span style="float:right"><?php echo anchor('admin/detail_mobil','<button>Kembali</button>');?></span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/detail_mobil/add", $attributes);
?>
    <label for="news_cat_fid">KATEGORI</label>
    <?php
    $opsi_cat = $this->jenis_mobil_model->get_drop_down();
    echo form_dropdown('news_cat_fid',$opsi_cat,set_value('news_cat_fid'));
    ?>
    <br /><br />

    <label for="kode_mobil">KODE MOBIL</label>
    <input name="kode_mobil" type="text" id="kode_mobil" placeholder="input kode mobil" value="<?php echo
    set_value("kode_mobil");?>" size="100%" required> 
    <br /><br />

    <label for="news_title">MERK</label>
    <input name="news_title" type="text" id="news_title" placeholder="input merk mobil" value="<?php echo 
    set_value("news_title");?>" size="100%" required>
    <br /><br />

    <label for="plat_mobil">NO.PLAT</label>
    <input name="plat_mobil" type="text" id="plat_mobil" placeholder="input plat mobil" value="<?php echo
    set_value("plat_mobil");?>" size="100%" required> 
    <br /><br />

    <label for="news_description">WARNA</label>
    <input name="news_description" type="text" id="news_description" placeholder="input warna mobil" value="<?php echo
    set_value("news_description");?>" size="100%" required> 
    <br /><br />

    <label for="tahun">TAHUN</label>
    <input name="tahun" type="text" id="tahun" placeholder="input tahun mobil" value="<?php echo
    set_value("tahun");?>" size="100%" required> 
    <br /><br />

    <label for="harga_sewa">HARGA SEWA</label>
    <input name="harga_sewa" type="text" id="harga_sewa" placeholder="input harga sewa mobil" value="<?php echo
    set_value("harga_sewa");?>" size="100%" required> 
    <br /><br />

    <label for="ac">AC</label>
    <input class="form-check-input" type="radio" id="ac" name="ac" value="1" size="100%" required>
    <label class="form-check-label" for="ac">Tersedia</label>
    <input class="form-check-input" type="radio" id="ac" name="ac" value="0" size="100%" required>
    <label class="form-check-label" for="ac">Tidak Tersedia</label>
    <br /><br />

    <label for="transmisi">TRANSMISI</label>
    <input class="form-check-input" type="radio" id="transmisi" name="transmisi" value="1" size="100%" required>
    <label class="form-check-label" for="ac">Manual</label>
    <input class="form-check-input" type="radio" id="transmisi" name="transmisi" value="0" size="100%" required>
    <label class="form-check-label" for="ac">Automatic</label>
    <br /><br />

    <label for="status_mobil">STATUS</label>
    <select name="status_mobil" id="status_mobil" class="form-control">
        <option value="">=== Pilih Status ===</option>
        <option value="1">Tersedia</option>
        <option value="0">Sedang Disewa</option>
    </select>
    <br /><br />

    <label for ="news_image">FOTO</label>
    <input name="news_image" type="file" id="news_image" required> 
    <br /><br />
    <input type="submit" name="submit" value="simpan" />
<?php echo form_close();?>