<h1>
    <?php echo $judul;?>
    <span style="float:right">
        <?php echo anchor ('admin/jenis_mobil','<button>Kembali</button>');?>
    </span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/jenis_mobil/edit/".$hasil['NEWS_CAT_ID'],$attributes);
?>
    <label for="news_cat_name">KATEGORI</label>
    <input name="news_cat_name" type="text" id="news_cat_name" value="<?php echo $hasil["NEWS_CAT_NAME"];?>" size="100%" required>
    <br/><br/>
    <input type="submit" name="submit" value="simpan" />
<?php echo form_close();?>