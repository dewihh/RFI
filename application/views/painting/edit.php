<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="<?= base_url('') ?>" method="post">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data Painting</h4>
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
                    <h4 class="text-muted my-3">Painting</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">WEIGHT : </label>
                                <!-- <input type="hidden" name="id_laporan" value="<?= $this->uri->segment(3) ?>"> -->
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan WEIGHT" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">SAND SA 2,5 : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan SAND SA 2,5" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">PRIMER (75 M) : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan PRIMER (75 M)" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">FINISH (150 M) : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan FINISH (150 M)" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">OTHER : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana OTHER" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">FINAL : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan FINAL" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">% : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan %" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">WEIGHT : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan WEIGHT" required="reuqired" />
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