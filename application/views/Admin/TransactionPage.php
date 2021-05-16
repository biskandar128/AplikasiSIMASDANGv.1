<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h3 class="font-weight-bold text-center mb-3">Data Transaksi</h3>
                    </div>
                    <div class="dropdown-divider mb-3"></div>
                    <div class="table-responsive">
                        <table
                            id="zero_config"
                            class="table table-striped table-bordered"
                        >
                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Transaction Date</th>
                                    <th>Transaction Total</th>
                                    <th>Account ID</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($DataTransaction)) : $i = 0; foreach ($DataTransaction as $transaction) : ?>

                                    <tr>
                                        <td><?= $transaction->transaction_id; ?></td>
                                        <td><?= $transaction->transaction_date; ?></td>
                                        <td><?= $transaction->transaction_total; ?></td>
                                        <td><button type="button" class="btn btn-info" data-transaction-id="<?= $kontenProduk->transaction_id; ?>" data-bs-toggle="modal" data-bs-target="#modalTransactionDetail">Detail</button></td>
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

<!-- ========================================================================================= -->
<!-- MODAL FORM DETAIL -->
<!-- ========================================================================================= -->
<div class="modal fade" id="modalTransactionDetail" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('admin/tambah_konten_produk'); ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="konten_produk_img" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" id="konten_produk_img" name="goods_img">
            </div>
            <div class="mb-3">
                <label for="desc_content" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="desc_content" name="deskripsi">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>
            <div class="mb-3">
                <label for="produk_id" class="form-label">Produk ID</label>
                <input type="text" class="form-control" id="produk_id" name="goods_id">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Upload</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ========================================================================================= -->
<!-- END OF MODAL FORM DETAIL -->
<!-- ========================================================================================= -->