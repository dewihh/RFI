<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan <?= $karyawan->nama ?> bulan <?= $awal . ', ' . $akhir ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        .edit p {
            opacity: 1;
            margin: 0 !important;
        }

        .edit p img {
            width: 100px !important;
            height: 100px !important;
        }

        .edits p {
            opacity: 0;
            margin: 0 !important;
        }

        .edits p img {
            width: 100px !important;
            height: 100px !important;
        }


        @media print {
            .firstrow {
                page-break-after: always;
            }
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
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered wdth">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Tanggal</th>
                                                            <th>Waktu</th>
                                                            <th>Tempat</th>
                                                            <th>Jenis</th>
                                                            <th>Kegiatan</th>
                                                            <th>Deskripsi</th>
                                                            <th>Lampiran</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if ($lapor) : ?>
                                                            <?php foreach ($lapor as $i => $h) : ?>
                                                                <?php
                                                                $lapor_harian = array_search($h['tanggal'], array_column($lapor, 'tanggal')) !== false ? $lapor[array_search($h['tanggal'], array_column($lapor, 'tanggal'))] : '';
                                                                ?>
                                                                <tr <?= ($lapor_harian == '') ? 'class="bg-danger text-white"' : '' ?>>
                                                                    <td><?= ($i + 1) ?></td>
                                                                    <td><?= $h['tanggal'] ?></td>
                                                                    <td><?= $h['waktu'] ?></td>
                                                                    <td><?= $h['tempat'] ?></td>
                                                                    <td><?= $h['jenis'] ?></td>
                                                                    <td><?= $h['kegiatan'] ?></td>
                                                                    <td class="edits"><?= $h['deskripsi'] ?></td>
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
                    </div>
                    <div class="row mt-2">
                        <div class="mt-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered wdth">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Kegiatan</th>
                                                            <th>Kegiatan</th>
                                                            <th>Total</th>
                                                            <th>Persentase</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $i = 1;
                                                            $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                                                            $uri_segments = explode('/', $uri_path);
                                                            $conn = mysqli_connect("localhost", "root", "", "absensi");
                                                            $jenis_kegiatan = "";
                                                            $jumlah = null;
                                                            $sql = "select jenis,COUNT(*) as 'total' from laporan WHERE id_user='$uri_segments[4]' AND tanggal between '$awal' AND '$akhir' GROUP by jenis";
                                                            $hasil = mysqli_query($conn, $sql);
                                                            $sqls = "select * from laporan WHERE id_user='$uri_segments[4]' AND tanggal between '$awal' AND '$akhir'";
                                                            $total = mysqli_query($conn, $sqls);
                                                            $jumlah_data = mysqli_num_rows($total);

                                                            while ($data = mysqli_fetch_array($hasil)) {
                                                                $kegiatan = $data['jenis'];
                                                                $jenis_kegiatan .= "$kegiatan" . ", ";

                                                                $jum = $data['total'];
                                                                $jumlah .= "$jum" . ", ";
                                                                $lap[] = $jum;
                                                                $count = array_sum($lap);
                                                                $persentase = ($jum / $jumlah_data);

                                                        ?>

                                                            <tr>
                                                                <td><?php echo $i++; ?></td>
                                                                <td><?php echo $kegiatan; ?></td>
                                                                <td><?php echo $jum; ?></td>
                                                                <td><?php echo $jumlah_data; ?></td>
                                                                <td><?php echo $persentase; ?>%</td>
                                                            </tr>

                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div>
                        <p class="bg-light">Tidak ada data Laporan</p>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                <?php
                if (count($lapor) > 0) {
                    foreach ($lapor as $data) {
                        echo "'" . $data['kegiatan'] . "',";
                    }
                }
                ?>
            ],
            datasets: [{
                label: 'Jumlah Kegiatan',
                backgroundColor: '#ADD8E6',
                borderColor: '##93C3D2',
                data: [
                    <?php
                    if (count($lapor) > 0) {
                        foreach ($lapor as $data) {
                            echo $data['tanggal'] . ", ";
                        }
                    }
                    ?>
                ]
            }]
        },
    });
</script> -->

</html>