<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?= $title; ?></h4>
            <div class="card mb-4">
                <div class="card-header">
                    <a class="" href="<?= base_url('admin/berita/simpan'); ?>">
                        <i class="fa fa-plus"> </i> Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>

                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Tanggal, Jam Upload</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($berita as $x) : $no++; ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $x['judul']; ?></td>
                                        <td><?= date('d-m-Y, H:i', strtotime($x['tanggal'])); ?></td>
                                        <td>
                                            <center>
                                                <a class="" href="<?= base_url('admin/berita/detail/' . $x['id_berita']); ?>"><i class="fa fa-eye"> </i> |</a>
                                                <a class="" href="<?= base_url('admin/berita/edit/' . $x['id_berita']); ?>"><i class="fa fa-edit"> </i> |</a>
                                                <a class="" href="<?= base_url('admin/berita/hapus/' . $x['id_berita']); ?>"><i class="fa fa-trash"> </i></a>
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