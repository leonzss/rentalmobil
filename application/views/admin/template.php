<body>

<div id="container">
    <h1><?php echo $judul;?>
    <br/>
        <h4 id="body">
            <?php echo anchor('admin/home','HOME');?> ||
            <?php echo anchor('admin/jenis_mobil','JENIS MOBIL');?> ||
            <?php echo anchor('admin/detail_mobil','DETAIL MOBIL');?> ||
            <?php echo anchor('admin/rental_admin','RENTAL MOBIL');?> ||
            <?php echo anchor('admin/kontak_admin','FEEDBACK');?> ||
            <?php echo anchor('admin/login/logout','LOGOUT');?>
        </h4>
    </h1>
    <br/>
    <div id="body">
        <?php echo $konten;?>
    </div>

    <p class="footer"><span>Copyright &copy; <?php echo date('Y') ?> - M. Anjas Leonardi</span></p>
</div>

</body>