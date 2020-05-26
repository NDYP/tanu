 <div id="layoutSidenav_content">
     <main>
         <div class="container-fluid">
             <h4 class="mt-4"><?= $title; ?></h4>

             <?= form_open_multipart('admin/fasilitas_pembantu/ubah') ?>
             <div class="card mb-4">
                 <div class="card-header">
                     <a class="" href="<?= base_url('admin/fasilitas_pembantu'); ?>"> <i class="fas fa-angle-left"></i> Kembali</a>
                 </div>
                 <div class="card-body">
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Nama Peralatan</label>
                         <input value="<?= $fasilitas_pembantu['jenis_peralatan'] ?>" name="jenis_peralatan" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="" />
                         <input type="hidden" value="<?= $fasilitas_pembantu['id_fasilitas_pembantu'] ?>" name="id_fasilitas_pembantu" class="form-control py-4" id="inputEmailAddress" aria-describedby="emailHelp" placeholder="" />
                     </div>
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Jumlah Dimiliki</label>
                         <input type="text" value="<?= $fasilitas_pembantu['jumlah'] ?>" name="jumlah" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" />

                     </div>
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Kategori</label>
                         <select name="kategori" class="form-control select2" style="width: 100%;">
                             <option name="kategori" value="<?= $fasilitas_pembantu['kategori'] ?>" selected><?= $fasilitas_pembantu['kategori'] ?></option>
                             <option name="kategori" value="Set Pemeriksaan Umum di Puskesmas Pembantu">Set Pemeriksaan Umum di Puskesmas Pembantu</option>
                             <option name="kategori" value="Set Pemeriksaan Laboratorium Sederhana">Set Pemeriksaan Laboratorium Sederhana</option>

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