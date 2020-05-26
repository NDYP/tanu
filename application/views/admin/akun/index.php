<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?= $title; ?></h4>
            <div class="card mb-4 col-md-10">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="" id="dataTable" width="100%" cellspacing="0" border="0">
                            <tbody class>

                                <tr>
                                    <td valign="top" width="15%">Nama Lengkap</td>
                                    <td width="2">:</td>
                                    <td><?= $this->session->userdata('nama_lengkap'); ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" width="15%">Email</td>
                                    <td width="2">:</td>
                                    <td><?= $this->session->userdata('email'); ?></td>
                                </tr>
                                <tr>
                                    <td class="text" valign="top" width="15%">No.Hp</td>
                                    <td width="2">:</td>
                                    <td><?= $this->session->userdata('no_hp'); ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" width="15%">Username</td>
                                    <td width="2">:</td>
                                    <td><?= $this->session->userdata('username'); ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" width="15%">Password</td>
                                    <td width="2">:</td>
                                    <td><?= $this->session->userdata('password'); ?></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>