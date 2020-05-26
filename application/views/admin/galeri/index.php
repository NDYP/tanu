<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?= $title; ?></h4>
            <div class="card mb-4">
                <div class="card-header">
                    <a class="" href="<?= base_url('admin/galeri/simpan'); ?>">
                        <i class="fa fa-plus"> </i> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th>No.</th>
                                    <th>Foto</th>
                                    <th>Judul</th>

                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($galeri as $x) : $no++; ?>
                                    <tr align="center">
                                        <td><?= $no; ?></td>
                                        <td>
                                            <img style="width: 20%" src="<?= base_url('assets/foto/galeri/' . $x['foto']) ?>" alt="user image" class="img-box">
                                        </td>
                                        <td><?= $x['nama_galeri']; ?></td>

                                        <td>
                                            <a class="" href="<?= base_url('admin/galeri/edit/' . $x['id_galeri']); ?>"><i class="fa fa-edit"> </i> |</a>
                                            <a class="" href="<?= base_url('admin/galeri/hapus/' . $x['id_galeri']); ?>"><i class="fa fa-trash"> </i> </a>
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