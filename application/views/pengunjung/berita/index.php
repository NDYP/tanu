 <main id="main">
     <!-- ======= Blog Section ======= -->
     <section id="blog" class="padd-section wow fadeInUp">

         <div class="container">
             <div class="section-title text-center">
                 <h2><?= $title; ?></h2>
             </div>
         </div>

         <div class="container">
             <div class="row">
                 <?php $no = 0;
                    foreach ($berita as $x) : $no++; ?>
                     <div class="col-md-6 col-lg-4">
                         <div class="block-blog text-left">
                             <a href="#"><img height="220px" width="360px" src="<?= base_url('assets/foto/berita/' . $x['foto']) ?>" class="img-responsive" alt="img"></a>
                             <div class="content-blog">
                                 <h4><a href="#"><?= $x['judul']; ?></a></h4>
                                 <span><?= date('d-m-Y, H:i', strtotime($x['tanggal'])); ?></span>
                                 <a class="pull-right readmore" href="<?= base_url('berita/detail/' . $x['id_berita']) ?>">Baca Selengkapnya</a>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </section><!-- End Blog Section -->