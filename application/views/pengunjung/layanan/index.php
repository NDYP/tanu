<style>
    .container1 {
        justify-content: center;

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
                <?php $no = 0;
                foreach ($layanan as $x) : $no++; ?>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-5">
                                <img width="150px" height="150px" src="<?= base_url('assets/foto/layanan/' . $x['foto']); ?>" alt="">
                            </div>
                            <div class="col-md-6">
                                <h4 align="justify"><?= $x['judul']; ?></h4>
                                <text align="justify"> <?= $x['isi']; ?></text>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section><!-- End Team Section -->