<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?= $title; ?></h4>
            <div class="card mb-4">
                <div class="card-header">
                    <a class="" href="<?= base_url('admin/jadwal/simpan'); ?>">
                        <i class="fa fa-plus"> </i> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th>No.</th>
                                    <th>Nama Jadwal</th>
                                    <th>Keterangan</th>
                                    <th>Kategori</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($jadwal as $x) : $no++; ?>
                                    <tr align="center">
                                        <td><?= $no; ?></td>

                                        <td><?= $x['nama_jadwal']; ?></td>
                                        <td><?= $x['tanggal']; ?></td>
                                        <td><?= $x['kategori']; ?></td>
                                        <td>
                                            <a class="" href="<?= base_url('admin/jadwal/edit/' . $x['id_jadwal']); ?>"><i class="fa fa-edit"> </i> |</a>
                                            <a class="" href="<?= base_url('admin/jadwal/hapus/' . $x['id_jadwal']); ?>"><i class="fa fa-trash"> </i> </a>
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