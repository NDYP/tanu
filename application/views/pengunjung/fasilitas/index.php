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
                                 <th rowspan="2">No.</th>

                                 <th rowspan="2">Nama Peralatan</th>
                                 <th colspan="2">Jumlah Peralatan</th>
                             </tr>
                             <tr>
                                 <th>Jumlah Minimum Harus Dimiliki</th>
                                 <th>Jumlah Dimiliki</th>

                             </tr>
                             <tr>
                                 <th>A</th>
                                 <th colspan="3">Set Pemeriksaan Umum</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $no = 0;
                                foreach ($fasilitas1 as $x) : $no++; ?>
                                 <tr align="center">
                                     <td><?= $no; ?></td>
                                     <td><?= $x['nama_fasilitas']; ?></td>
                                     <td><?= $x['jumlah_min']; ?></td>
                                     <td><?= $x['jumlah']; ?></td>

                                 </tr>
                             <?php endforeach; ?>
                         </tbody>
                         <thead>
                             <tr>
                                 <th>B</th>
                                 <th colspan="3">Perlengkapan</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $no = 0;
                                foreach ($fasilitas2 as $x) : $no++; ?>
                                 <tr align="center">
                                     <td><?= $no; ?></td>
                                     <td><?= $x['nama_fasilitas']; ?></td>
                                     <td><?= $x['jumlah_min']; ?></td>
                                     <td><?= $x['jumlah']; ?></td>

                                 </tr>
                             <?php endforeach; ?>
                         </tbody>
                         <thead>
                             <tr>
                                 <th>C</th>
                                 <th colspan="3">Meubelair</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $no = 0;
                                foreach ($fasilitas3 as $x) : $no++; ?>
                                 <tr align="center">
                                     <td><?= $no; ?></td>
                                     <td><?= $x['nama_fasilitas']; ?></td>
                                     <td><?= $x['jumlah_min']; ?></td>
                                     <td><?= $x['jumlah']; ?></td>

                                 </tr>
                             <?php endforeach; ?>
                         </tbody>
                     </table>

                 </div>

             </div>
         </div>
     </section>
     </section><!-- End Team Section -->