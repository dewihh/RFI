<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="<?= base_url('') ?>" method="post">
                <div class="card-header">
                    <h4 class="card-title">Edit Data Description</h4>
                </div>
                <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Profil</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">Nama Client : </label>
                                <!-- <input type="hidden" name="id_laporan" value="<?= $this->uri->segment(3) ?>"> -->
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
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">Description : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Description" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">Drawing Number : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana Drawing Number" required="reuqired" />
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

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">Post Mark : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan Post Mark" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">Material A : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan Material A" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">Material B : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan Material B" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">Material C: </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan Material C" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">Material D : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan Material D" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kegiatan">Material E : </label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Masukan Material E" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">Spec : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Spec" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">QTY : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana QTY" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">Set : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Set" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">Total : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana Total" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">Weight (Kg) : </label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Weight (Kg)" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">Total Weight (Kg) : </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukana Total Weight (Kg)" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="telp">Area (M2) : </label>
                                <input type="tel" name="telp" id="telp" class="form-control" placeholder="Masukan Area (M2)" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="email">Total Area (M2) : </label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Total Area (M2)" required="reuqired" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Akun</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="********" required="reuqired" />
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>