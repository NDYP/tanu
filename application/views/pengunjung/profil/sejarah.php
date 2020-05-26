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
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <?php $no = 0;
                    foreach ($profil as $x) : $no++; ?>

                        <text>
                            <?= $x['sejarah']; ?>
                        </text>
                    <?php endforeach; ?>
                    <div class="col-md-3"></div>
                </div>
            </div>
    </section><!-- End Team Section -->