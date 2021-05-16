<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h3 class="font-weight-bold text-center mb-3">Data Akun Pengguna</h3>
                    </div>
                    <div class="dropdown-divider mb-3"></div>
                    <div class="table-responsive">
                        <table
                            id="zero_config"
                            class="table table-striped table-bordered"
                        >
                            <thead>
                                <tr>
                                    <th>Accounts ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Nama</th>
                                    <th>JK</th>
                                    <th>Tanggal Lahir</th>
                                    <th>No Telp</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Gambar</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($DataAccount)) : $i = 0; foreach ($DataAccount as $account) : ?>

                                    <tr>
                                        <td><?= $account->account_id; ?></td>
                                        <td><?= $account->username; ?></td>
                                        <td><?= $account->password; ?></td>
                                        <td><?= $account->nama; ?></td>
                                        <td><?= $account->jk; ?></td>
                                        <td><?= $account->tgl_lahir; ?></td>
                                        <td><?= $account->nomor_telp; ?></td>
                                        <td><?= $account->email; ?></td>
                                        <td><?= $account->alamat; ?></td>
                                        <td><img src="<?= base_url('upload/foto/'.$account->account_img); ?>" width="150" /></td>
                                        <td><?= $account->role; ?></td>
                                    </tr>

                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>