<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-block">
                <h4 class="card-title float-left">Data Packing</h4>
                <div class="d-inline ml-auto float-right">
                    <a href="<?= base_url('packing/create') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped datatable">
                        <thead>
                            <th>No</th>
                            <th width="20%">Client</th>
                            <th>PC</th>
                            <th>Description</th>
                            <th>Total</th>
                            <th>Delivery</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Freepot</td>
                                    <td>123124</td>
                                    <td>LM234859</td>
                                    <td>123456</td>
                                    <td>213123</td>
                                    <td>213123</td>
                                    <td>
                                        <a href="<?= base_url('packing/edit') ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="" class="btn btn-danger btn-sm btn-delete ml-2" onclick="return false"><i class="fa fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>