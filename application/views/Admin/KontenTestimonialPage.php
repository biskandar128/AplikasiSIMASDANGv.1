<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h3 class="font-weight-bold text-center mb-3">Konten Testimonial</h3>
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
                                    <th>Ulasan</th>
                                    <th>Rate</th>
                                    <th>Account ID</th>
                                    <th>Transaksi ID</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($DataTestimonial)) : $i = 0; foreach ($DataTestimonial as $testi) : ?>

                                    <tr>
                                        <td><?= ++$i; ?></td>
                                        <td><?= $testi->ulasan; ?></td>
                                        <td><?= $testi->rate; ?></td>
                                        <td><?= $testi->account_id; ?></td>
                                        <td><?= $testi->transaction_id; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-update-about" data-bs-toggle="modal" data-bs-target="#modalTesti">Detail</button>
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