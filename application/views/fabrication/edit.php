<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="<?= base_url('') ?>" method="post">
                <div class="card-header">
                    <h4 class="card-title">Edit Data Fabrication</h4>
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
                    <h4 class="text-muted my-3">Fabrication</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">MI/CUT : </label>
                                <!-- <input type="hidden" name="id_laporan" value="<?= $this->uri->segment(3) ?>"> -->
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan MI/CUT" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">DRILL/BLEND : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan DRILL/BLEND" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">SEGMENT (FITUP & WELD) : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan SEGMENT (FITUP & WELD)" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">ASSEMBLY (FITUP & WELD) : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan ASSEMBLY (FITUP & WELD)" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">FINISHING (FITUP & WELD) : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana FINISHING (FITUP & WELD)" required="reuqired" />
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