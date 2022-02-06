<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="<?= base_url('') ?>" method="post">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data Fabrication</h4>
                </div>
                <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Description</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="jenis">Head Mask : </label>
                                <select name="jenis" id="jenis" class="form-control">
                                    <option value="" disabled selected>-- Pilih Head Mask --</option>
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
                                <label for="kegiatan">Description : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan Description" required="reuqired" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Fabrication</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="kegiatan">MI/CUT Fab : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan MI/CUT Fab" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="kegiatan">MI/CUT QC : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan MI/CUT QC" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="kegiatan">DRILL/BLEND Fab : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan DRILL/BLEND Fab" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="kegiatan">DRILL/BLEND QC : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan DRILL/BLEND QC" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">ASSEMBLY FITUP Fab : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan ASSEMBLY FITUP Fab" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">ASSEMBLY FITUP QC : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana ASSEMBLY FITUP QC" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">SEGMENT FITUP Fab : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan FINISHING FITUP Fab" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">SEGMENT FITUP QC : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana FINISHING FITUP QC" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">ASSEMBLY WELD Fab : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan ASSEMBLY WELD Fab " required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">ASSEMBLY WELD QC : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana ASSEMBLY WELD QC " required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">FINISHING Fab : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan FINISHING WELD Fab" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">FINISHING QC : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana FINISHING WELD QC" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="tanggal">Tanggal Selesai Pengisian Fab : </label>
                                <input type="text" name="tanggal" id="awal" class="form-control" placeholder="Tanggal Selesai Pengisian Fab" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="nik">Remarks : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Remarks" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="nama">%: </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Otomatis" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="nama">Weight : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Otomatis" required="reuqired" />
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