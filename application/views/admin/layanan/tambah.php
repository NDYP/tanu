 <div id="layoutSidenav_content">
     <main>
         <div class="container-fluid">
             <h4 class="mt-4"><?= $title; ?></h4>

             <?= form_open_multipart('admin/layanan/simpan') ?>
             <div class="card mb-4">
                 <div class="card-header">
                     <a class="" href="<?= base_url('admin/layanan'); ?>"> <i class="fas fa-angle-left"></i> Kembali</a>
                 </div>
                 <div class="card-body">
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Judul</label>
                         <input name="judul" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Masukkan Judul" />
                         <?= form_error('judul', '<small class="text-danger pl-1">', '</small>'); ?>
                     </div>
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Foto</label>
                         <div>
                             <?= form_upload('foto'); ?>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="small mb-1" for="inputEmailAddress">Keterangan</label>
                         <div class="box-body pad">
                             <form>
                                 <textarea id="tinymce" name="isi">
                                           </textarea>
                             </form>
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