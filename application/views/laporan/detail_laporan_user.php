<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <table class="table border-0">
                            <tr>
                                <th class="border-0 py-0">Nama KomandanTe</th>
                                <th class="border-0 py-0">:</th>
                                <th class="border-0 py-0"><?= $laporan->nama ?></th>
                            </tr>
                            <tr>
                                <th class="border-0 py-0">Tanggal Kegiatan</th>
                                <th class="border-0 py-0">:</th>
                                <th class="border-0 py-0"><?= $laporan->tanggal ?></th>
                            </tr>
                            <tr>
                                <th class="border-0 py-0">Waktu Kegiatan</th>
                                <th class="border-0 py-0">:</th>
                                <th class="border-0 py-0"><?= $laporan->waktu ?></th>
                            </tr>
                            <tr>
                                <th class="border-0 py-0">Tempat Kegiatan</th>
                                <th class="border-0 py-0">:</th>
                                <th class="border-0 py-0"><?= $laporan->tempat ?></th>
                            </tr>
                            <tr>
                                <th class="border-0 py-0">Jenis Kegiatan</th>
                                <th class="border-0 py-0">:</th>
                                <th class="border-0 py-0"><?= $laporan->jenis ?></th>
                            </tr>
                            <tr>
                                <th class="border-0 py-0">Nama Kegiatan</th>
                                <th class="border-0 py-0">:</th>
                                <th class="border-0 py-0"><?= $laporan->kegiatan ?></th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-xs-12 col-sm-6" style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?= $laporan->lat ?>,<?= $laporan->lon ?>&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">swimming watch</a></iframe></div>
                </div>
                <br>
                <div class="edit">
                    <?= $laporan->deskripsi ?>
                </div>
                <div class="edit">
                    <?= $laporan->deskripsi ?>
                </div>
            </div>
        </div>
    </div>