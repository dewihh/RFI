<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <title>Laporan Kegiatan - Lintech</title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- CSS Files -->
    <!-- <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" media="screen" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="<?= base_url('assets/css/light-bootstrap-dashboard.css?v=2.0.1') ?>" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url('assets/css/demo.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/test.css') ?>" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>


    <!-- <link href="<?= base_url('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet" media="screen" /> -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css">

    <script>
        var BASEURL = '<?= base_url() ?>';
    </script>
    <?php check_absen_harian() ?>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg" data-color="red">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
            -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="<?= base_url() ?>" class="simple-text">
                        <img src="<?= base_url('assets/img/Logo_LDP.png') ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-white">
                            <h2 class="my-0 text-center"><label id="hours"><?= date('H') ?></label>:<label id="minutes"><?= date('i') ?></label>:<label id="seconds"><?= date('s') ?></label></h2>
                        </a>
                    </li>
                    <li class="nav-item <?= @$_active ?>">
                        <a class="nav-link" href="<?= base_url() ?>">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?= @$_active ?>">
                        <a class="nav-link" href="<?= base_url('user') ?>">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Profil</p>
                        </a>
                    </li>
                    <?php if (is_level('Manager')) : ?>
                        <!-- <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('jam') ?>">
                                <i class="nc-icon nc-time-alarm"></i>
                                <p>Jam Kerja</p>
                            </a>
                        </li> -->
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('divisi') ?>">
                                <i class="nc-icon nc-bag"></i>
                                <p>Divisi</p>
                            </a>
                        </li>
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('role') ?>">
                                <i class="nc-icon nc-notes"></i>
                                <p>Role</p>
                            </a>
                        </li>
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('karyawan') ?>">
                                <i class="nc-icon nc-tag-content"></i>
                                <p>Karyawan</p>
                            </a>
                        </li>
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('desc') ?>">
                                <i class="nc-icon nc-single-copy-04"></i>
                                <p>Description</p>
                            </a>
                        </li>
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('fabrication') ?>">
                                <i class="nc-icon nc-paper-2"></i>
                                <p>Fabrication</p>
                            </a>
                        </li>
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('painting') ?>">
                                <i class="nc-icon nc-single-copy-04"></i>
                                <p>Painting</p>
                            </a>
                        </li>
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('packing') ?>">
                                <i class="nc-icon nc-single-copy-04"></i>
                                <p>Packing</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('absensi') ?>">
                                <i class="nc-icon nc-notes"></i>
                                <p>Absensi</p>
                            </a>
                        </li> -->
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('laporan') ?>">
                                <i class="nc-icon nc-notes"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('laporan/all_laporan') ?>">
                                <i class="nc-icon nc-paper-2"></i>
                                <p>Laporan Tanggal</p>
                            </a>
                        </li>
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('laporan/range_laporan') ?>">
                                <i class="nc-icon nc-single-copy-04"></i>
                                <p>Laporan Range</p>
                            </a>
                        </li> -->
                        
                    <?php else : ?>
                        <!-- <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('absensi/check_absen') ?>">
                                <i class="nc-icon nc-tag-content"></i>
                                <p class="d-inline">
                                    Absen
                                    <?php if ($this->session->absen_warning == 'true') : ?>
                                        <span class="float-right ml-auto notification p-0 badge badge-danger"><i class="fa fa-exclamation"></i></span>
                                    <?php endif; ?>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('absensi/detail_absensi') ?>">
                                <i class="nc-icon nc-notes"></i>
                                <p>Absensi Ku</p>
                            </a>
                        </li> -->
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('laporan/check_laporan') ?>">
                                <i class="nc-icon nc-tag-content"></i>
                                <p class="d-inline">
                                    Lapor
                                    <!-- <?php if ($this->session->absen_warning == 'true') : ?>
                                        <span class="float-right ml-auto notification p-0 badge badge-danger"><i class="fa fa-exclamation"></i></span>
                                    <?php endif; ?> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item <?= @$_active ?>">
                            <a class="nav-link" href="<?= base_url('laporan/detail_laporan') ?>">
                                <i class="nc-icon nc-notes"></i>
                                <p>Laporan Ku</p>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard/logout') ?>">
                            <span>Log out <i class="nc-icon nc-button-power"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid">
                    <a class="navbar-brand" href="#"> Kegiatan </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div id="alert">
                        <?php if (@$this->session->response) : ?>
                            <div class="alert alert-<?= $this->session->response['status'] == 'error' ? 'danger' : $this->session->response['status'] ?> alert-dismissable fade show" role="alert">
                                <button class="close" aria-dismissable="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p><?= $this->session->response['message'] ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?= $content ?>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <p class="copyright text-center">
                            &copy; 2019 <a href="http://indoexpress.co.id">Indoexpress</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<!-- <script src="<?= base_url('assets/js/core/jquery.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/core/popper.min.js') ?>" type="text/javascript"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?= base_url('assets/js/plugins/bootstrap-switch.js') ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url('assets/js/plugins/bootstrap-notify.js') ?>"></script>
<!-- SweetAlert -->
<script src="<?= base_url('assets/js/plugins/sweetalert.min.js') ?>"></script>

<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?= base_url('assets/js/light-bootstrap-dashboard.js?v=2.0.1') ?>" type="text/javascript"></script>


<!-- Main Js -->
<script src="<?= base_url('assets/js/main.js') ?>"></script>



<!-- Custom Script -->
<script>
    var hoursLabel = document.getElementById("hours");
    var minutesLabel = document.getElementById("minutes");
    var secondsLabel = document.getElementById("seconds");
    setInterval(setTime, 1000);

    function setTime() {
        secondsLabel.innerHTML = pad(Math.floor(new Date().getSeconds()));
        minutesLabel.innerHTML = pad(Math.floor(new Date().getMinutes()));
        hoursLabel.innerHTML = pad(Math.floor(new Date().getHours()));
    }

    function pad(val) {
        var valString = val + "";
        if (valString.length < 2) {
            return "0" + valString;
        } else {
            return valString;
        }
    }

    <?php if (@$this->session->absen_needed) : ?>
        var absenNeeded = '<?= json_encode($this->session->absen_needed) ?>';
        <?php $this->session->sess_unset('absen_needed') ?>
    <?php endif; ?>
</script>
<!-- Fungsi datepickier yang digunakan -->
<script type="text/javascript">
    $(function() {
        $('#tanggal').datepicker({
            format: 'yyyy-mm-dd',
            orientation: "bottom",
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());
    });


    $(function() {
        $('#awal').datepicker({
            format: 'yyyy-mm-dd',
            orientation: "bottom",
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());
    });

    $(function() {
        $('#akhir').datepicker({
            format: 'yyyy-mm-dd',
            orientation: "bottom",
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date(
            new Date().getFullYear(),
            new Date().getMonth(),
            new Date().getDate() + 1
        ));
    });
</script>
<script type="text/javascript">
    $(function() {
        $('#tglin').datepicker({
            format: 'yyyy-mm-dd',
            orientation: "bottom",
            autoclose: true,
            useCurrent: false
        }).datepicker('update', new Date(<? $laporan->tanggal ?>);
    });
</script>
<script>
    var x = document.getElementById("lat");
    var y = document.getElementById("lon");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = position.coords.latitude;
        y.innerHTML = position.coords.longitude;
        lat = position.coords.latitude;
        lon = position.coords.longitude;
        latlon = new google.maps.LatLng(lat, lon)
        mapholder = document.getElementById('mapholder')
        mapholder.style.height = '40vh';
        mapholder.style.width = '100%';
        // I added a border and margin to the map
        mapholder.style.border = '2px solid orange';
        mapholder.style.margin = '10px';

        var myOptions = {
            center: latlon,
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            enableHighAccuracy: true,
            mapTypeControl: false,
            navigationControlOptions: {
                style: google.maps.NavigationControlStyle.SMALL
            }
        }

        var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
        var marker = new google.maps.Marker({
            position: latlon,
            map: map,
            title: "You are here!"
        });

    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                x.innerHTML = "User denied the request for Geolocation."
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                x.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML = "An unknown error occurred."
                break;
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script>
    // import ImageInsert from '@ckeditor/ckeditor5-image/src/imageinsert';
    // editor.plugins.get('ClipboardPipeline');
    // ClassicEditor
    //     .create(document.querySelector('#ckeditor'), {
    //             plugins: [Essentials, Paragraph, Bold, Italic, Image, ImageInsert, ImageCaption],
    //             toolbar: [ 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote', 'insertImage', 'link', 'undo', 'redo' ],
    //             })
    //         .catch(error => {
    //             console.error(error);
    //         });
    CKEDITOR.replace('deskripsi', {
        height: '100%',


        // Configure your file manager integration. This example uses CKFinder 3 for PHP.
        filebrowserBrowseUrl: '<?= base_url('assets/vendor/file_manajer/dialog.php') ?>',
        filebrowserUploadUrl: '<?= base_url('assets/vendor/file_manajer/dialog.php') ?>?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl: '<?= base_url('assets/vendor/file_manajer/dialog.php') ?>?type=1&editor=ckeditor&fldr='

        // filebrowserBrowseUrl: '<?= base_url('assets/vendor/file_manajer/dialog.php') ?>',
        // filebrowserImageBrowseUrl: '<?= base_url('assets/vendor/file_manajer/dialog.php') ?>?type=Images',
        // filebrowserUploadUrl: '<?= base_url('assets/vendor/file_manajer/dialog.php') ?>?command=QuickUpload&type=Files',
        // filebrowserImageUploadUrl: '<?= base_url('assets/vendor/file_manajer/dialog.php') ?>?command=QuickUpload&type=Images'
    });
</script>



</html>