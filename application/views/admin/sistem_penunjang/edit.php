 <div id="layoutSidenav_content">
     <main>
         <div class="container-fluid">
             <h4 class="mt-4"><?= $title; ?></h4>
             <br>
             <?= form_open_multipart('admin/sistem_penunjang/simpan') ?>
             <div class="card mb-4">
                 <div class="card-header">
                     <a class="" href="<?= base_url('admin/sistem_penunjang/sejarah'); ?>"> <i class="fas fa-angle-left"></i> Kembali</a>
                 </div>
                 <div class="card-body">
                     <div class="form-group">
                         <div class="box-body pad">
                             <input name="id_sistem_penunjang" type="hidden" value="<?= $sistem_penunjang['id_sistem_penunjang']; ?>">
                             <form>
                                 <textarea id="tinymce" name="isi">
                                            <?= $sistem_penunjang['isi']; ?></textarea>
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