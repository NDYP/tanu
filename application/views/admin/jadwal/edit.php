 <div id="layoutSidenav_content">
     <main>
         <div class="container-fluid">
             <h4 class="mt-4"><?= $title; ?></h4>

             <?= form_open_multipart('admin/jadwal/ubah') ?>
             <div class="card mb-4">
                 <div class="card-header">
                     <a class="" href="<?= base_url('admin/jadwal'); ?>"> <i class="fas fa-angle-left"></i> Kembali</a>
                 </div>
                 <div class="card-body">
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Nama Jadwal</label>
                         <input value="<?= $jadwal['nama_jadwal']; ?>" name="nama_jadwal" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Masukkan Judul" />
                         <input type="hidden" value="<?= $jadwal['id_jadwal']; ?>" name="id_jadwal" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Masukkan Judul" />
                     </div>
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Keterangan</label>
                         <input value="<?= $jadwal['tanggal']; ?>" name="tanggal" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" />

                     </div>
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Kategori</label>
                         <select name="kategori" class="form-control select2" style="width: 100%;">
                             <option name="kategori" value="<?= $jadwal['kategori'] ?>"><?= $jadwal['kategori'] ?></option>
                             <option name="kategori" value="Rawat Jalan">Rawat Jalan</option>
                             <option name="kategori" value="Rawat Inap">Rawat Inap</option>
                         </select>
                     </div>
                 </div>
                 <div class="card-footer">
                     <button class="btn btn-primary btn-sm" type="submit"> <i class="fas fa-save"></i> Simpan</button>
                 </div>
             </div>
             <?= form_close(); ?>
         </div>
     </main>