<h1>
    <?php echo $judul;?>
    <span style="float:right">
        <?php echo anchor('admin/jenis_mobil','<button>Kembali</button>');?>
    </span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/jenis_mobil/add",$attributes);
?>
    <label for="news_cat_name">KATEGORI</label>
    <input name="news_cat_name" type="text" id="news_cat_name" placeholder="Input Jenis Mobil...."
    value="<?php echo set_value("news_cat_name");?>" size="100%" required>
    <br /><br />
    <input type="submit" name="submit" value="simpan" />
<?php echo form_close();?>