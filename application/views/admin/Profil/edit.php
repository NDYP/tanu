 <div id="layoutSidenav_content">
     <main>
         <div class="container-fluid">
             <h4 class="mt-4"><?= $title; ?></h4>
             <br>
             <?= form_open_multipart('admin/profil/simpan') ?>
             <div class="card mb-4">
                 <div class="card-header">
                     <a class="" href="<?= base_url('admin/profil/sejarah'); ?>"> <i class="fas fa-angle-left"></i> Kembali</a>
                 </div>
                 <div class="card-body">
                     <div class="form-group">
                         <div class="box-body pad">
                             <input name="id_profil" type="hidden" value="<?= $tentang['id_profil']; ?>">
                             <form>
                                 <textarea id="tinymce" name="visi_misi">
                                            <?= $tentang['visi_misi']; ?></textarea>
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