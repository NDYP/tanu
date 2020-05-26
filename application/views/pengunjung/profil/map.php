<style>

</style>
<main id="main">
    <!-- ======= Team Section ======= -->
    <section id="team" class="padd-section text-center wow fadeInUp">
        <div class="container">
            <div class="section-title text-center">
                <h2><?= $title; ?></h2>
            </div>
        </div>
        <div class="container" style="justify-content: center;">

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <?php $no = 0;
                    foreach ($profil as $x) : $no++; ?>

                        <iframe src="<?= $x['peta']; ?>" width="1025" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <?php endforeach; ?>
                    <div class="col-md-1"></div>
                </div>
            </div>
    </section><!-- End Team Section -->