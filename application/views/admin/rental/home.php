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
            <th>Bukti Transfer</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kode Mobil Yang Ingin Disewa</th>
            <th>Durasi Sewa</th>
            <th>WA / Telp</th>
            <th>Action</th>
            <?php
            foreach ($hasil as $key => $list)
            {
                ?>
                    <tr>
                        <td align="center"><?php echo $i;?></td>
                        <td align="center">
                            <img src="<?php echo base_url();?>uploaded_files/<?php echo $list['IMAGE_TRF'];?>" width="100">
                        </td>
                        <td align="center"><?php echo $list['NAMA'];?></td>
                        <td align="center"><?php echo $list['ALAMAT'];?></td>
                        <td align="center"><?php echo $list['KODE_MOBIL'];?></td>
                        <td>
						    <?php if($list['DURASI_SEWA'] == 1) : ?>
							    <p align="center">12 JAM</p>
						    <?php else : ?>
							    <p align="center">Full Day</p>
						    <?php endif; ?>
					    </td>
                        <td align="center"><?php echo $list['NO_HP'];?></td>
                        <td align="center">
                            <?php
                            $attr_del = array('onclick' => 'return confirmDel ();','title' => 'delete');
                            echo anchor('admin/rental_admin/delete/'.$list['CUSTOMER_ID'],'<button>DELETE</button>',$attr_del);
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