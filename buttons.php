<!DOCTYPE html>
<html>
<head>
	<title>IM Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/fa/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css"/>
    <link rel='stylesheet' type='text/css' href='assets/css/imadmin.css'/>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
    <div id='wrapper'>
        <?php include 'nav.php'; ?>
        <?php include 'sidebar.php'; ?>
        <main>
            <div class='page-header'>
                <div class='page-info'>
                    <h3>Buttons</h3>
                    <h5>Berbagai macam tombol (button)</h5>
                </div>
                <div class='page-action'>
                    <a href='#' class='button'><i class="fa fa-thumb-tack"></i> Tambah Data</a>
                </div>
            </div>
            <div class='breadcrumb'>
                <a href='#'>Dashboard</a><i class="fa fa-angle-right"></i><a href='#'>UI Elements</a><i class="fa fa-angle-right"></i>Button
            </div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel-head'>
                        <h4>Buttons</h4>
                    </div>
                    <div class='panel-body'>
                        <p>Cukup tambahkan class <span class='code'>.button</span> pada setiap element yang ingin dijadikan sebagai button.</p>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Button Colors</h5>
                            <p>Warna-warna button yang bisa digunakan</p>
                        </div>
                        <div class='panel-body padding'>
                            <h5 class='button'>Default</h5>
                            <h5 class='button button-blue'>Biru</h5>
                            <h5 class='button button-red'>Merah</h5>
                            <h5 class='button button-green'>Hijau</h5>
                            <h5 class='button button-yellow'>Kuning</h5>
                        </div>
                    </div>
                </div>
                <div class='col-2'>
                    <div class='panel-head'>
                        <h5>Button Color</h5>
                    </div>
                    <div class='panel-body'>
                        <p>Tambahkan class <span class='code'>.button-blue</span>, <span class='code'>.button-red</span>, <span class='code'>.button-green</span> ataupun <span class='code'>.button-yellow</span>.</p>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Button Block</h5>
                            <p>Tombol dengan lebar 100%</p>
                        </div>
                        <div class='panel-body padding'>
                            <h5 class='button button-blue button-block'>Button Block</h5>
                        </div>
                    </div>
                </div>
                <div class='col-2'>
                    <div class='panel-head'>
                        <h5>Button Block</h5>
                    </div>
                    <div class='panel-body'>
                        <p>Tambahkan class <span class='code'>.button-block</span>.</p>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Button Group</h5>
                            <p>Menghilangkan margin antar tombol</p>
                        </div>
                        <div class='panel-body padding'>
                            <div class='button-group'>
                                <h5 class='button'>Satu</h5>
                                <h5 class='button'>Dua</h5>
                                <h5 class='button'>Tiga</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-2'>
                    <div class='panel-head'>
                        <h5>Button Group</h5>
                    </div>
                    <div class='panel-body'>
                        <p>Tambahkan element dengan class <span class='code'>.button-group</span> untuk membungkus buttons.</p>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Disabled Button</h5>
                        </div>
                        <div class='panel-body padding'>
                            <h5 class='button button-red button-disabled'>Disabled Button</h5>
                        </div>
                    </div>
                </div>
                <div class='col-2'>
                    <div class='panel-head'>
                        <h5>Disabled Button</h5>
                    </div>
                    <div class='panel-body'>
                        <p>Tambahkan class <span class='code'>.button-disabled</span>.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>