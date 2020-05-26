<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?= $title; ?></h4>
            <div class="card mb-4">
                <div class="card-header">
                    <a class="" href="<?= base_url('admin/kamar_inap/tambah'); ?>">
                        <i class="fa fa-plus"> </i> Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>

                                <tr align="center">
                                    <th>No.</th>
                                    <th>Foto</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($kamar_inap as $x) : $no++; ?>
                                    <tr align="center">
                                        <td><?= $no; ?></td>
                                        <td><img width="80%" src="<?= base_url('assets/foto/kamar_inap/' . $x['foto']); ?>" alt="">
                                        </td>
                                        <td><?= $x['isi']; ?></td>
                                        <td>
                                            <center>
                                                <a class="" href="<?= base_url('admin/kamar_inap/edit/' . $x['id_kamar_inap']); ?>"><i class="fa fa-edit"> </i></a>
                                                <a class="" href="<?= base_url('admin/kamar_inap/hapus/' . $x['id_kamar_inap']); ?>"><i class="fa fa-trash"> </i></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </main>