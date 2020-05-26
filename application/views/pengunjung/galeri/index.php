 <main id="main">
     <!-- ======= Team Section ======= -->
     <section id="team" class="padd-section text-center wow fadeInUp">
         <div class="container">
             <div class="section-title text-center">
                 <h2><?= $title; ?></h2>
             </div>
         </div>
         <div class="container">
             <div class="row">
                 <?php $no = 0;
                    foreach ($galeri as $x) : $no++; ?>
                     <div class="col-md-6 col-md-4 col-lg-4">
                         <div class="">
                             <img width="300px" height="300" src="<?= base_url('assets/foto/galeri/' . $x['foto']) ?>" class="img-responsive" alt="img">
                             <div class="team-content">
                                 <span><?= $x['nama_galeri']; ?></span>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </section><!-- End Team Section -->