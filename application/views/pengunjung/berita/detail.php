 <main id="main">
     <!-- ======= Blog Section ======= -->
     <section id="blog" class="padd-section wow fadeInUp">
         <div class="container">
             <div class="row">
                 <div class="card mb-4">
                     <div class="card-header">
                         <a class="pull-left readmore" href="<?= base_url('berita'); ?>"></i> Kembali</a>
                     </div>
                     <div class="card-body">
                         <h2><?= $berita['judul']; ?></h2>
                         <small><?= date('H:i, d-m-Y', strtotime($berita['judul'])); ?></small>
                         <br>
                         <div class="row">
                             <div class="col-md-3">
                                 <img style="width: 100%" src="<?= base_url('assets/foto/berita/' . $berita['foto']) ?>" alt="user image" class="img-box">
                             </div>
                             <div class="col-md-8">
                                 <p class="mb-0">
                                     <?= $berita['isi']; ?>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- End Blog Section -->