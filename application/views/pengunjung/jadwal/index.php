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
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Jenis Pelayanan
                                </th>
                                <th rowspan="2">Hari</th>
                            </tr>
                            <tr align="center">

                                <th>A</th>
                                <th>Rawat Jalan</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($jadwal1 as $x) : $no++; ?>
                                <tr align="center">
                                    <td><?= $no; ?></td>
                                    <td><?= $x['nama_jadwal']; ?></td>
                                    <td><?= $x['tanggal']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <thead>
                            <tr align="center">

                                <th>B</th>
                                <th>Rawat Inap</th>
                                <th>Setiap Hari 24 jam</th>
                            </tr>


                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($jadwal2 as $x) : $no++; ?>
                                <tr align="center">
                                    <td><?= $no; ?></td>
                                    <td><?= $x['nama_jadwal']; ?></td>
                                    <td><?= $x['tanggal']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>

                                <td colspan="3">
                                    <b>JAM KERJA PELAYANAN PUSKESMAS RAWAT JALAN</b><br>
                                    HARI SENIN S/D KAMIS JAM 07.30 – 13.00<br>
                                    HARI JUM’AT JAM 07.30 – 13.00<br>
                                    HARI SABTU JAM 07.30 – 10.30

                                </td>
                                </th>


                            </tr>
                            <tr>
                                <td colspan="3">
                                    <b>JAM KERJA PELAYANAN PUSKESMAS RAWAT JALAN</b><br>
                                    HARI SENIN S/D KAMIS JAM 08.00 – 14.00 <br>
                                    HARI JUM’AT JAM 08.00 – 11.00 <br>
                                    HARI SABTU JAM 08.00 – 12.00

                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </div>

            </div>
        </div>
    </section><!-- End Team Section -->