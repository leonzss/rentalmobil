<h1>
    <?php echo $judul;?>
    <span style="float:right">
        <?php echo anchor('admin/detail_mobil/add','<button>Tambah Data</button>');?>
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
            <th>Foto</th>
            <th>Kategori</th>
            <th>Kode Mobil</th>
            <th>Merk</th>
            <th>No. Plat</th>
            <th>Warna</th>
            <th>Tahun</th>
            <th>Harga Sewa</th>
            <th>AC Mobil</th>
            <th>Transmisi</th>
            <th>Status Mobil</th>
            <th>Action</th>
            <?php
            foreach ($hasil as $key => $list)
            {
                ?>
                <tr>
                    <td align="center"><?php echo $i;?></td>
                    <td align="center">
                        <img src="<?php echo base_url();?>uploaded_files/<?php echo $list['NEWS_IMAGE'];?>" width="100">
                    </td>
                    <td align="center"><?php echo $list['NEWS_CAT_NAME'];?></td>
                    <td align="center"><?php echo $list['KODE_MOBIL'];?></td>
                    <td align="center"><?php echo $list['NEWS_TITLE'];?></td>
                    <td align="center"><?php echo $list['PLAT_MOBIL'];?></td>
                    <td align="center"><?php echo $list['NEWS_DESCRIPTION'];?></td>
                    <td align="center"><?php echo $list['TAHUN'];?></td>
                    <td align="center"><?php echo $list['HARGA_SEWA'];?></td>
                    <td align="center">
						<?php if($list['AC'] == 1) : ?>
							<div class="badge badge-success">Tersedia</div>
						<?php else : ?>
							<div class="badge badge-danger">Tidak Tersedia</div>
						<?php endif; ?>
					</td>
                    <td align="center">
						<?php if($list['TRANSMISI'] == 1) : ?>
							<div class="badge badge-success">Manual</div>
						<?php else : ?>
							<div class="badge badge-danger">Automatic</div>
						<?php endif; ?>
					</td>
                    <td align="center">
						<?php if($list['STATUS_MOBIL'] == 1) : ?>
							<div class="badge badge-success">Tersedia</div>
						<?php else : ?>
							<div class="badge badge-danger">Tidak Tersedia</div>
						<?php endif; ?>
					</td>
                    <td align="center">
                        <?php echo anchor('admin/detail_mobil/edit/'.$list['NEWS_ID'],'<button>EDIT</button>','title="Edit"');?>
                        &nbsp;&nbsp;&nbsp;
                        <?php
                            $attr_del = array('onclick' => 'return confirmDel();','title' => 'Delete');
                            echo anchor ('admin/detail_mobil/delete/'.$list['NEWS_ID'],'<button>DELETE</button>',$attr_del);
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