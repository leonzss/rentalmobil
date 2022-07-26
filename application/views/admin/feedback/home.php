<h1>
    <?php echo $judul;?>
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
            <th>Nama Pengirim</th>
            <th>Subject</th>
            <th>Pesan</th>
            <th>Action</th>
            <?php
            foreach ($hasil as $key => $list)
            {
                ?>
                <tr>
                    <td align="center"><?php echo $i;?></td>
                    <td align="center"><?php echo $list['NAMA'];?></td>
                    <td align="center"><?php echo $list['SUBJEK'];?></td>
                    <td align="justify"><?php echo $list['PESAN'];?></td>
                    <td align="center">
                        <?php
                            $attr_del = array('onclick' => 'return confirmDel();','title' => 'Yakin Mau Hapus Data?');
                            echo anchor ('admin/kontak_admin/delete/'.$list['KONTAK_ID'],'<button>DELETE</button>',$attr_del);
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