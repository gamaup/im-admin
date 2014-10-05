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
                <div class='col-4'>
                    <div class='panel'>
                        <div class='panel-body padding'>
                            Cukup tambahkan class <span class='code'>.button</span> pada setiap element yang ingin dijadikan sebagai button.
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Buttons Color</h4>
                            <p>Warna-warna button yang bisa digunakan</p>
                        </div>
                        <div class='panel-body padding'>
                            <h5 class='button'>Default</h5>
                            <h5 class='button button-blue'>Biru</h5>
                            <h5 class='button button-red'>Merah</h5>
                            <h5 class='button button-green'>Hijau</h5>
                            <h5 class='button button-yellow'>Kuning</h5>
                        </div>
                        <div class='panel-footer'>
                            Tambahkan class <span class='code'>.button-blue</span>, <span class='code'>.button-red</span>, <span class='code'>.button-green</span> ataupun <span class='code'>.button-yellow</span>.
                        </div>
                    </div>
                </div>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Button Block</h4>
                            <p>Tombol dengan lebar 100%</p>
                        </div>
                        <div class='panel-body padding'>
                            <h5 class='button button-blue button-block'>Button Block</h5>
                        </div>
                        <div class='panel-footer'>
                            Tambahkan class <span class='code'>.button-block</span>.
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-4'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Button Dropdown Single</h4>
                            <p>Tombol dengan dropdown</p>
                        </div>
                        <div class='panel-body padding'>
                            <h5 class='button button-dropdown button-blue'>
                                <a>Dropdown Button</a><i class="fa fa-caret-down"></i>
                                <ul>
                                    <li class='head'><a>Dropdown Header</a></li>
                                    <li><a href='#'>Link 1</a></li>
                                    <li><a href='#'>Link 2</a></li>
                                    <li class='sparator'></li>
                                    <li><a href='#'>Link 3</a></li>
                                </ul>
                            </h5>
                        </div>
                        <div class='panel-footer'>
                            Tambahkan class <span class='code'>&lt;h5 class='button button-dropdown'>
                                &lt;a>Dropdown Button&lt;/a>&lt;i class="fa fa-caret-down">&lt;/i>
                                &lt;ul>
                                    &lt;li class='head'>&lt;a>Dropdown Header&lt;/a>&lt;/li>
                                    &lt;li>&lt;a href='#'>Link 1&lt;/a>&lt;/li>
                                    &lt;li class='sparator'>&lt;/li>
                                &lt;/ul>
                            &lt;/h5></span>.
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Button Disabled</h4>
                            <p>Tombol yang tidak bisa di-klik</p>
                        </div>
                        <div class='panel-body padding'>
                            <h5 class='button button-red button-disabled'>Disabled Button</h5>
                        </div>
                        <div class='panel-footer'>
                            Tambahkan class <span class='code'>.button-disabled</span>.
                        </div>
                    </div>
                </div>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Buttons Group</h4>
                            <p>Tombol-tombol yang dikelompokkan</p>
                        </div>
                        <div class='panel-body padding'>
                            <div class='button-group'>
                                <h5 class='button'>Satu</h5>
                                <h5 class='button'>Dua</h5>
                                <h5 class='button'>Tiga</h5>
                            </div>
                        </div>
                        <div class='panel-footer'>
                            Tambahkan element dengan class <span class='code'>.button-group</span> untuk membungkus buttons.
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>