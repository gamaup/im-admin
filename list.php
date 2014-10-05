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
                    <h3>List</h3>
                    <h5>Berbagai macam tamplian list</h5>
                </div>
                <div class='page-action'>
                    <a href='#' class='button button-blue'><i class="fa fa-thumb-tack"></i> Tambah Data</a>
                </div>
            </div>
            <div class='breadcrumb'>
                <a href='#'>Dashboard</a><i class="fa fa-angle-right"></i><a href='#'>UI Elements</a><i class="fa fa-angle-right"></i>List
            </div>
            <div class='row'>
                <div class='col-1'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Default List</h4>
                            <p>Tampilan list secara default</p>
                        </div>
                        <div class='panel-body'>
                            <ul class='list'>
                                <li>Ini Adalah Baris Pertama</li>
                                <li>Ini Adalah Baris Kedua</li>
                                <li>Ini Adalah Baris Ketiga</li>
                                <li>Ini Adalah Baris Keempat</li>
                                <li>Ini Adalah Baris Kelima</li>
                            </ul>
                        </div>
                        <div class='panel-footer'>
                            Gunakan class <span class='code'>.list</span> pada html <span class='code'>ul</span>.
                        </div>
                    </div>
                </div>
                <div class='col-1'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>List with Padding</h4>
                            <p>Tampilan list secara default</p>
                        </div>
                        <div class='panel-body padding'>
                            <ul class='list'>
                                <li>Ini Adalah Baris Pertama</li>
                                <li>Ini Adalah Baris Kedua</li>
                                <li>Ini Adalah Baris Ketiga</li>
                                <li>Ini Adalah Baris Keempat</li>
                                <li>Ini Adalah Baris Kelima</li>
                            </ul>
                        </div>
                        <div class='panel-footer'>
                            Tambahkan class <span class='code'>.padding</span> pada class <span class='code'>.panel-body</span>.
                        </div>
                    </div>
                </div>
                <div class='col-1'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>List with Links</h4>
                            <p>Tampilan list dengan link</p>
                        </div>
                        <div class='panel-body'>
                            <ul class='list list-link'>
                                <li><a href='#'>Ini Adalah Baris Pertama</a></li>
                                <li class='active'><a href='#'>Ini Adalah Baris Kedua</a></li>
                                <li><a href='#'>Ini Adalah Baris Ketiga</a></li>
                                <li><a href='#'>Ini Adalah Baris Keempat</a></li>
                                <li><a href='#'>Ini Adalah Baris Kelima</a></li>
                            </ul>
                        </div>
                        <div class='panel-footer'>
                            Tambahkan class <span class='code'>.list-link</span> pada html <span class='code'>ul</span>. Dan tambahkan class <span class='code'>.red</span>, <span class='code'>.green</span> atau <span class='code'>.yellow</span> untuk opsi warna.
                        </div>
                    </div>
                </div>
                <div class='col-1'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>List with Badges</h4>
                            <p>Tampilan list dengan badges</p>
                        </div>
                        <div class='panel-body padding'>
                            <ul class='list list-link red'>
                                <li><a href='#'>Ini Adalah Baris Pertama<span>93</span></a></li>
                                <li class='active'><a href='#'>Ini Adalah Baris Kedua<span>9</span></a></li>
                                <li><a href='#'>Ini Adalah Baris Ketiga<span>5</span></a></li>
                                <li><a href='#'>Ini Adalah Baris Keempat<span>19</span></a></li>
                                <li><a href='#'>Ini Adalah Baris Kelima<span>93</span></a></li>
                            </ul>
                        </div>
                        <div class='panel-footer'>
                            Tambahkan <span class='code'>&lt;span></span> ke dalam <span class='code'>li</span>.
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>