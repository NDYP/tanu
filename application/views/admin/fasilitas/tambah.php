 <div id="layoutSidenav_content">
     <main>
         <div class="container-fluid">
             <h4 class="mt-4"><?= $title; ?></h4>

             <?= form_open_multipart('admin/fasilitas/simpan') ?>
             <div class="card mb-4">
                 <div class="card-header">
                     <a class="" href="<?= base_url('admin/fasilitas'); ?>"> <i class="fas fa-angle-left"></i> Kembali</a>
                 </div>
                 <div class="card-body">
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Nama</label>
                         <input name="nama_fasilitas" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Masukkan Judul" />
                         <?= form_error('nama_fasilitas', '<small class="text-danger pl-1">', '</small>'); ?>
                     </div>
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Foto</label>
                         <div>
                             <?= form_upload('foto'); ?>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Jumlah Minimum</label>
                         <input name="jumlah_min" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" />
                         <?= form_error('jumlah_min', '<small class="text-danger pl-1">', '</small>'); ?>
                     </div>
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Jumlah Dimiliki</label>
                         <input name="jumlah" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" />
                         <?= form_error('jumlah', '<small class="text-danger pl-1">', '</small>'); ?>
                     </div>
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Kategori</label>
                         <select name="kategori" class="form-control select2" style="width: 100%;">
                             <option name="kategori" selected>-- Pilih --</option>
                             <option name="kategori" value="Set Pemeriksaan Umum">Set Pemeriksaan Umum</option>
                             <option name="kategori" value="Perlengkapan">Perlengkapan</option>
                             <option name="kategori" value="Meubelair">Meubelair</option>
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