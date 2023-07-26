

<?php $__env->startSection('container'); ?>
    <h1>Halaman Daftar</h1><button type="button" class="btn btn-primary">Tambah</button>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="modalDaftarTambah">
      Tambah Data Antrian (Pasien)
    </button>

    <p>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <td align="center">No Antrian</td>
            <td align="center">NIK</td>
            <td align="center">Nama</td>
            <td align="center">Alamat</td>
          </tr>
        </thead>
        <tbody>
          
          <?php $__currentLoopData = $container; 
          $__env->addLoop($__currentLoopData); 
          foreach($__currentLoopData as $layoutsmain => $dt): 
          $__env->incrementLoopIndices(); 
          $loop = $__env->getLastLoop(); 
          ?>
          <tr>
            <td align="center" scope="row"><?php echo e($layouts.main + $container->firstItem()); ?></td>
            <td><?php echo e($dt->no_antrian); ?></td>
            <td><?php echo e($dt->nik); ?></td>
            <td><?php echo e($dt->nama); ?></td>
            <td><?php echo e($dt->alamat); ?></td>
            <td align="center">
              <button class="btn-warning">
                Edit
              </button>
              <a href="daftar/hapus/<?php echo e($dt->no_antrian); ?>" onclick="return confirm('Yakin Mau DiHapus?')">
                <button class="btn-danger">
                  Delete
                </button>
              </a>
            </td>
          </tr>
        </tbody>
      </table>

      <!--awal pagination-->
      Halaman : <?php echo e($Daftar->currentPage()); ?> <br />
      Jumlah Data : <?php echo e($Daftar->total()); ?> <br />>
      Data Per Halaman : <?php echo e($Daftar->perPage()); ?> <br />
      <?php echo e($Daftar->links()); ?>


      <!--awal modal tambah data antrian-->
      <div class="modal fade" id="modalDaftarTambah" tabindex="-1" role="dialog" aria-labelledby="modalDaftarTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-header">
            <h5 class="modal-title" id="modalDaftarTambahLabel">Form Input Data Antrian</h5>
          </div>
          <div class="modal-body">
            <form name="formdaftartambah" id="formdaftartambah" action="/daftar/buku" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="form-group row">
                <label for="no_antrian" class="col-sm-4 col-form-label">Nomor Antrian</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="no_antrian" name="no_antrian" placeholder="Masukan Nomor Antrian">
                </div>
              </div>
              <p>
                <div class="form-group row">
                  <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukan NIK">
                  </div>
                </div>
              <p>
                <div class="form-group row">
                  <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                  </div>
                </div>
                <p>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                    </div>
                  </div>
                  <p>
                    <div class="modal-footer">
                      <button type="button" name="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                      <button type="submit" name="daftartambah" class="btn btn-success">Tambah</button>
                    </div>
                  </form>
          </div>
        </div>
      </div>
      <!--akhir modal tambah data antrian-->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puskesmas\resources\views/daftar.blade.php ENDPATH**/ ?>