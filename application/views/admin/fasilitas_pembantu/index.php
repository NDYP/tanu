<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?= $title; ?></h4>
            <div class="card mb-4">
                <div class="card-header">
                    <a class="" href="<?= base_url('admin/fasilitas_pembantu/simpan'); ?>">
                        <i class="fa fa-plus"> </i> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th>No.</th>

                                    <th>Kategori</th>
                                    <th>Nama</th>
                                    <th>Jumlah Dimiliki</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($fasilitas_pembantu as $x) : $no++; ?>
                                    <tr align="center">
                                        <td><?= $no; ?></td>

                                        <td><?= $x['kategori']; ?></td>
                                        <td><?= $x['jenis_peralatan']; ?></td>

                                        <td><?= $x['jumlah']; ?></td>
                                        <td>
                                            <a class="" href="<?= base_url('admin/fasilitas_pembantu/edit/' . $x['id_fasilitas_pembantu']); ?>"><i class="fa fa-edit"> </i> |</a>
                                            <a class="" href="<?= base_url('admin/fasilitas_pembantu/hapus/' . $x['id_fasilitas_pembantu']); ?>"><i class="fa fa-trash"> </i> </a>
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