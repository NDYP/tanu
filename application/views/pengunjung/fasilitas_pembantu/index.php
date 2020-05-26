 <style>
     .container1 {
         justify-content: center;

         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         text-align: center;
     }
 </style>
 <main id="main">
     <!-- ======= Team Section ======= -->
     <section id="team" class="padd-section text-center wow fadeInUp">
         <div class="container">
             <div class="section-title text-center">
                 <h2><?= $title; ?></h2>
             </div>
         </div>
         <div class="container1">
             <div class="row">
                 <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                         <thead>
                             <tr align="center">
                                 <th rowspan="">No.</th>

                                 <th rowspan="">Jenis Peralatan</th>
                                 <th colspan="">Jumlah</th>
                             </tr>
                             <tr>
                                 <th>A</th>
                                 <th colspan="3">Set Pemeriksaan Umum di Puskesmas Pembantu</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $no = 0;
                                foreach ($fasilitas_pembantu1 as $x) : $no++; ?>
                                 <tr align="center">
                                     <td><?= $no; ?></td>
                                     <td><?= $x['jenis_peralatan']; ?></td>

                                     <td><?= $x['jumlah']; ?></td>
                                 </tr>
                             <?php endforeach; ?>
                         </tbody>
                         <thead>
                             <tr>
                                 <th>B</th>
                                 <th colspan="3">Set Pemeriksaan Laboratorium Sederhana</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $no = 0;
                                foreach ($fasilitas_pembantu2 as $x) : $no++; ?>
                                 <tr align="center">
                                     <td><?= $no; ?></td>
                                     <td><?= $x['jenis_peralatan']; ?></td>

                                     <td><?= $x['jumlah']; ?></td>
                                 </tr>
                             <?php endforeach; ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </section><!-- End Team Section -->