<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="<?= base_url('') ?>" method="post">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data Packing</h4>
                </div>
                <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Description</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="jenis">Description : </label>
                                <select name="jenis" id="jenis" class="form-control">
                                    <option value="" disabled selected>-- Pilih Description --</option>
                                    <option value="Edukasi Politik">0</option>
                                    <option value="Sosial Kultur">1</option>
                                    <option value="Kegiatan Internal">2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">Nama Client : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Nama Client" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">PC : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana Nama PC" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="tanggal">Tanggal : </label>
                                <input type="text" name="tanggal" id="tanggal" class="form-control" placeholder="Masukan Tanggal Kegiatan" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="jenis">Rev : </label>
                                <select name="jenis" id="jenis" class="form-control">
                                    <option value="" disabled selected>-- Pilih Jenis Rev --</option>
                                    <option value="Edukasi Politik">0</option>
                                    <option value="Sosial Kultur">1</option>
                                    <option value="Kegiatan Internal">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">Head Mark : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan Head Mark" required="reuqired" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Packing</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">Total) : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Total" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">Delivery : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana Delivery" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">Status : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Status" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">M/C : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana M/C" required="reuqired" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>