<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h3 class="font-weight-bold text-center mb-3">KONTEN PRODUK</h3>
                         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKontenProduk">Tambah data</button>
                    </div>
                    <div class="dropdown-divider mb-3"></div>
                    <div class="table-responsive">
                        <table
                            id="zero_config"
                            class="table table-striped table-bordered"
                        >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Produk Image</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th>Testi Rate</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($DataGoodsContent)) : $i = 0; foreach ($DataGoodsContent as $kontenProduk) : ?>

                                    <tr>
                                        <td><?= ++$i; ?></td>
                                        <td><img src="<?= base_url('upload/konten_produk/'.$kontenProduk->goods_img); ?>" class="img-thumbnail" width="150" /></td>
                                        <td><?= $kontenProduk->deskripsi; ?></td>
                                        <td><?= $kontenProduk->status; ?></td>
                                        <td><?= $kontenProduk->testi_rate; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-update-konten-produk" data-content-id="<?= $kontenProduk->content_id; ?>" data-deskripsi="<?= $kontenProduk->deskripsi; ?>" data-goods-img="<?= $kontenProduk->goods_img; ?>" data-status="<?= $kontenProduk->status; ?>" data-bs-toggle="modal" data-bs-target="#modalUbahKontenProduk">Update</button>
                                        </td>
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
<!-- MODAL FORM TAMBAH -->
<!-- ========================================================================================= -->
<div class="modal fade" id="modalKontenProduk" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Upload Konten Produk</h5>
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
<!-- END OF MODAL FORM TAMBAH -->
<!-- ========================================================================================= -->

<!-- ========================================================================================= -->
<!-- MODAL FORM UBAH -->
<!-- ========================================================================================= -->
<div class="modal fade" id="modalUbahKontenProduk" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Ubah Konten Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('admin/ubah_konten_produk'); ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="konten_produk_img" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" name="goods_img">
                <input type="hidden" id="kontenId_ubah" name="content_id">
                <input type="hidden" id="old_img" name="old_image">
                <label class="form-label mt-2">Gambar sebelumnya</label>
                <br>
                <img class="img-thumbnail" src="" width="150" id="kontenProduk_img_ubah"/>
            </div>
            <div class="mb-3">
                <label for="desc_content" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsiKonten_ubah" name="deskripsi">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status_ubah" name="status">
            </div>
            <!-- <div class="mb-3">
                <label for="produk_id" class="form-label">Produk ID</label>
                <input type="text" class="form-control" id="produkId_ubah" name="goods_id">
            </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Ubah Konten</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ========================================================================================= -->
<!-- END OF MODAL FORM UBAH -->
<!-- ========================================================================================= -->