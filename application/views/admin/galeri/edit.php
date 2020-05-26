 <div id="layoutSidenav_content">
     <main>
         <div class="container-fluid">
             <h4 class="mt-4"><?= $title; ?></h4>

             <?= form_open_multipart('admin/galeri/ubah') ?>
             <div class="card mb-4">
                 <div class="card-header">
                     <a class="" href="<?= base_url('admin/galeri'); ?>"> <i class="fas fa-angle-left"></i> Kembali</a>
                 </div>
                 <div class="card-body">
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Nama</label>
                         <input value="<?= $galeri['nama_galeri']; ?>" name="nama_galeri" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Masukkan Judul" />
                         <input type="hidden" value="<?= $galeri['id_galeri']; ?>" name="id_galeri" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Masukkan Judul" />
                     </div>
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Foto</label>
                         <div>
                             <?= form_upload('foto'); ?>
                         </div>
                     </div>
                 </div>
                 <div class="card-footer">
                     <button class="btn btn-primary btn-sm" type="submit"> <i class="fas fa-save"></i> Simpan</button>
                 </div>
             </div>
             <?= form_close(); ?>
         </div>
     </main>