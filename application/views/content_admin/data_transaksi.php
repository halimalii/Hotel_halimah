
<!-- Begin page content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <hi class="h3 mb-2 text-gray-800">
        Tabel data transaksi
</hi>
<!-- Datatales Example -->
<div class="card shadow mb-4">
    <div class="card header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data transaksi
        <a href="<?= base_url('index.php/data_transaksi/tambah_data'); ?>">
            <button class="btn btn-primary">Tambah data</button>
</a>
</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="datatable" width="100%" cellpacing="0">
             <thead>
                </tr>
            </tr>
                <th>id transaksi</th>
                <th>jenis id</th>
                <th>atas nama</th>
                <th>tanggal</th>
                <th>waktu sewa</th>
                <th>kamar id</th>
                <th>jenis pembayaran</th>
                <th>aksi</th>
            </tr>
        </thead>
            </tr>
        <tfoot>
          <tr>
                <th>id transaksi</th>
                <th>jenis id</th>
                <th>atas nama</th>
                <th>tanggal</th>
                <th>waktu sewa</th>
                <th>kamar id</th>
                <th>jenis pembayaran</th>
                <th>aksi</th>


        </tr>
      </tfoot>
     <tbody>
            <?php
        $no = 1;

foreach ($tbl_transaksi as $tt) :
?>
    
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $tt["jenis_id"] ?></td>
        <td><?php echo $tt["atas_nama"] ?></td>
        <td><?php echo $tt["tanggal"] ?></td>
        <td><?php echo $tt["waktu_sewa"] ?></td>
        <td><?php echo $tt["kamar_id"] ?></td>
        <td><?php echo $tt["jenis_pembayaran"] ?></td>
        
        <td>
            <a href="<?= base_url('index.php/data_transaksi/update_data/') ?><?php echo $tt['id_transaksi']?>" class="btn btn-primary btn-circle">
                 <i class="fas fa-edit"></i>

           </a>

            <a href="<?= base_url('index.php/data_transaksi/hapus_data/') ?><?php echo $tt['id_transaksi'] ?>" class="btn btn-danger btn-circle">
                  <i class="fas fa-trash"></i>
                  
          </a>
      </td>
</tr>
<?php endforeach; ?>
      
        

</tbody>   

        </table>
      </div>
      </div>
     </div>

             



