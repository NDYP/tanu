<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?= $title; ?></h4>

            <?php foreach ($prasarana as $x) { ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <a class="" href="<?= base_url('admin/prasarana/edit/' . $x['id_prasarana']); ?>"><i class="fa fa-edit"> </i> Edit</a>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">
                            <?= $x['isi']; ?>
                        <?php } ?>
                        </p>
                    </div>
                </div>
        </div>
    </main>