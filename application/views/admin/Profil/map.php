<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?= $title; ?></h4>

            <?php foreach ($profil as $x) { ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <a class="" href="<?= base_url('admin/profil/editmap/' . $x['id_profil']); ?>"><i class="fa fa-edit"> </i> Edit</a>
                    </div>
                    <div class="card-body">
                        <iframe src="<?= $x['peta']; ?>" width="1025" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <?php } ?>
                    </div>
                </div>
        </div>
    </main>