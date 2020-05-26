<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?= $title; ?></h4>
            <div class="card mb-4">
                <div class="card-header">
                    <a class="" href="<?= base_url('admin/fasilitas/simpan'); ?>">
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
                                    <th>Kategori</th>
                                    <th>Nama</th>
                                    <th>Jumlah Minimum Harus Dimiliki</th>
                                    <th>Jumlah Dimiliki</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($fasilitas as $x) : $no++; ?>
                                    <tr align="center">
                                        <td><?= $no; ?></td>
                                        <td>
                                            <img style="width: 200px;height:200px;" src="<?= base_url('assets/foto/fasilitas/' . $x['foto']) ?>" class="img-box">
                                        </td>
                                        <td><?= $x['kategori']; ?></td>
                                        <td><?= $x['nama_fasilitas']; ?></td>
                                        <td><?= $x['jumlah_min']; ?></td>
                                        <td><?= $x['jumlah']; ?></td>
                                        <td>
                                            <a class="" href="<?= base_url('admin/fasilitas/edit/' . $x['id_fasilitas']); ?>"><i class="fa fa-edit"> </i> |</a>
                                            <a class="" href="<?= base_url('admin/fasilitas/hapus/' . $x['id_fasilitas']); ?>"><i class="fa fa-trash"> </i> </a>
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