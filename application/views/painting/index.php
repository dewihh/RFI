<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-block">
                <h4 class="card-title float-left">Data painting</h4>
                <div class="d-inline ml-auto float-right">
                    <a href="<?= base_url('painting/create') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped datatable">
                        <thead>
                            <th>No</th>
                            <th>PC</th>
                            <th>Head Mask</th>
                            <th>SAND SA.2,5</th>
                            <th>PRIMER (75 M)</th>
                            <th>FINISH (150 M)</th>
                            <th>Inspect</th>
                            <th>Total</th>
                            <th>Aksi</th>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>123124</td>
                                <td>LM23</td>
                                <td>
                                    <address>
                                        F : 1 <br>
                                        Q : ''
                                    </address>
                                </td>
                                <td>
                                    <address>
                                        F : 1 <br>
                                        Q : ''
                                    </address>
                                </td>
                                <td>
                                    <address>
                                        F : 1 <br>
                                        Q : ''
                                    </address>
                                </td>
                                <td>
                                    <address>
                                        F : 1 <br>
                                        Q : ''
                                    </address>
                                </td>
                                <td>
                                    <address>
                                        % : 1 <br>
                                        W : ''
                                    </address>
                                </td>
                                <td>
                                    <a href="<?= base_url('painting/edit') ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
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