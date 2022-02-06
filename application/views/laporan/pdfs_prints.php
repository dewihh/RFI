<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>

    <style>
        .edit p {
            opacity: 1;
            margin: 0 !important;
        }

        .edit p img {
            width: 50px !important;
            height: 50px !important;
        }

        .edits p {
            opacity: 0;
            margin: 0 !important;
        }

        .edits p img {
            width: 50px !important;
            height: 50px !important;
        }

        .table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        .table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        .table tr .text {
            text-align: center;
            font-size: 13px;
        }

        .table tr td {
            font-size: 13px;
        }

        .wdth {
            width: 92%;
        }
    </style>
</head>

<body>
<center>
        <table class="table">
            <tr>
                <td><img src="LOGO.jpg" width="90" height="90"></td>
                <td>
                    <center>
                        <font size="4">LEMBAGA PERATIKUM 2019</font><br>
                        <font size="5"><b>SMK BAITUL HIKAH</b></font><br>
                        <font size="2">Bidang Keahlian : Bisnis dan Menejemen - Teknologi informasi dan Komunikasi</font><br>
                        <font size="2"><i>Jln Cut Nya'Dien No. 02 Kode Pos : 68173 Telp./Fax (0331)758005 Tempurejo Jember Jawa Timur</i></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                </td>
            </tr>
        </table>
    </center>
    <div class="row mt-2">
        <div class="mt-2">
            <div class="row">
                <div class="col-12">
                    <div class="row mt-2">
                        <div class="mt-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="asdas">
                                            <table class="table table-striped table-bordered wdth">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Tanggal</th>
                                                        <th>Waktu</th>
                                                        <th>Tempat</th>
                                                        <th>Jenis</th>
                                                        <th>Kegiatan</th>
                                                        <th>Deskripsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($range) : ?>
                                                        <?php foreach ($range as $i => $h) : ?>
                                                            <?php
                                                            $range_harian = array_search($h['tanggal'], array_column($range, 'tanggal')) !== false ? $range[array_search($h['tanggal'], array_column($range, 'tanggal'))] : '';
                                                            ?>
                                                            <tr <?= ($range_harian == '') ? 'class="bg-danger text-white"' : '' ?>>
                                                                <td><?= ($i + 1) ?></td>
                                                                <td><?= $h['nama'] ?></td>
                                                                <td><?= $h['tanggal'] ?></td>
                                                                <td><?= $h['waktu'] ?></td>
                                                                <td><?= $h['tempat'] ?></td>
                                                                <td><?= $h['jenis'] ?></td>
                                                                <td><?= $h['kegiatan'] ?></td>
                                                                <td class="edit"><?= $h['deskripsi'] ?></td>
                                                            </tr>

                                                        <?php endforeach; ?>

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <h4><span>Tidak ada data laporan</span></h4>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>