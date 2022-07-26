<h1>
    <?php echo $judul;?>
    <span style="float:right">
        <?php echo anchor('admin/jenis_mobil/add','<button> Tambah Data</button>');?>
</span>
</h1>
<?php echo $this->session->flashdata("message");?>

<?php
if (count($hasil) > 0)
{
    //jika ditemukan data maka eksekusi kode ini
    $i=1;
    ?>
       <table width="100%" border="1" cellpadding="5" cellspacing="5">
            <th>No.</th>
            <th>Jenis Mobil</th>
            <th>Action</th>
            <?php
            foreach ($hasil as $key => $list)
            {
                ?>
                    <tr>
                        <td align="center"><?php echo $i;?></td>
                        <td align="justify"><?php echo $list['NEWS_CAT_NAME'];?></td>
                        <td align="center">
                            <?php echo anchor('admin/jenis_mobil/edit/'.$list['NEWS_CAT_ID'],'<button>EDIT</button>','title="edit"');?>
                            &nbsp;&nbsp;&nbsp;
                            <?php
                            $attr_del = array('onclick' => 'return confirmDel ();','title' => 'Delete');
                            echo anchor('admin/jenis_mobil/delete/'.$list['NEWS_CAT_ID'],'<button>DELETE</button>',$attr_del);
                            ?>
                        </td>
                    </tr>
                <?php
                $i++;
            }
            ?>
        </table>
    <?php
}
else
{
    //jika tidak ada data maka tampilkan notifikasi
    ?>
        <p>Data tidak ada</p>
    <?php
}
?>
