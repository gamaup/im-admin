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
                    <h3>Dropdown</h3>
                    <h5>Dropdown menu</h5>
                </div>
                <div class='page-action'>
                </div>
            </div>
            <div class='breadcrumb'>
                <a href='#'>Dashboard</a><i class="fa fa-angle-right"></i><a href='#'>UI Elements</a><i class="fa fa-angle-right"></i>Dropdown
            </div>
            <div class='row'>
                <div class='col-1'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Contoh</h5>
                        </div>
                        <div class='panel-body padding'>
                            <div class='button-group'>
                                <h5 class='button button-blue dropdown-toggle'>Click Here</h5>
                                <ul class='dropdown-menu'>
                                    <li><a href='#'>Link 1</a></li>
                                    <li><a href='#'>Link 2</a></li>
                                    <li><a href='#'>Link 3</a></li>
                                </ul>
                            </div>
                            <div class='button-group'>
                                <h5 class='button button-blue dropdown-toggle'><i class="fa fa-caret-down"></i></h5>
                                <ul class='dropdown-menu'>
                                    <li><a href='#'>Link 1</a></li>
                                    <li><a href='#'>Link 2</a></li>
                                    <li><a href='#'>Link 3</a></li>
                                </ul>
                            </div>
                            <div class='button-group'>
                                <h5 class='button button-blue dropdown-toggle'>With Icon <i class="fa fa-caret-down"></i></h5>
                                <ul class='dropdown-menu'>
                                    <li><a href='#'>Link 1</a></li>
                                    <li><a href='#'>Link 2</a></li>
                                    <li><a href='#'>Link 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-3'>
                    <div class='panel-head'>
                        <h5>Penggunaan</h5>
                    </div>
                    <div class='panel-body'>
                        <p>Tambahkan class <code>.dorpdown-toggle</code> pada element/button yang ingin dijadikan sebagai tombol toggle untuk memunculkan menu dropdown</p>
                        <p>Lalu buat element Unsorted List (<code>&lt;ul></code>) dengan class <code>.dropdown-menu</code> tepat setelah element/button toggle.</p>
                        <p>Bungkus dropdown-toggle dan dropdown-menu dengan <code>div</code> dengan class <code>.button-group</code>.</p>
                        <p>Contoh markup:</p>
                        <pre><code>&lt;div class='button-group'>
    &lt;h5 class='button button-blue dropdown-toggle'>Click Here&lt;/h5>
    &lt;ul class='dropdown-menu'>
        &lt;li>&lt;a href='#'>Link 1&lt;/a>&lt;/li>
        &lt;li>&lt;a href='#'>Link 2&lt;/a>&lt;/li>
        &lt;li>&lt;a href='#'>Link 3&lt;/a>&lt;/li>
    &lt;/ul>
&lt;/div></code></pre>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-1'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Split Buttons Dropdown</h5>
                        </div>
                        <div class='panel-body padding'>
                            <div class='button-group'>
                                <h4 class='button button-blue'>Splitted</h4>
                                <div class='button-group'>
                                    <h5 class='button button-blue dropdown-toggle'><i class="fa fa-caret-down"></i></h5>
                                    <ul class='dropdown-menu'>
                                        <li class='head'><a>Dropdown Header</a></li>
                                        <li><a href='#'>Link 1</a></li>
                                        <li><a href='#'>Link 2</a></li>
                                        <li><a href='#'>Link 3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-3'>
                    <div class='panel-head'>
                        <h5>Penjelasan</h5>
                    </div>
                    <div class='panel-body'>
                        <p>Sama seperti penggunaan button group, cukup gabungkan markup dropdown dengan button, lalu dibungkus dengan <code>.button-group</code>.</p>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-1'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Dropdown Menu Options</h5>
                        </div>
                        <div class='panel-body padding'>
                            <div class='button-group'>
                                <h4 class='button button-blue'>Right Position</h4>
                                <div class='button-group'>
                                    <h5 class='button button-blue dropdown-toggle'><i class="fa fa-caret-down"></i></h5>
                                    <ul class='dropdown-menu right-pos'>
                                        <li class='head'>Dropdown Header</li>
                                        <li><a href='#'>Link 1</a></li>
                                        <li><a href='#'>Link 2</a></li>
                                        <li class='sparator'></li>
                                        <li><a href='#'>Link 3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-3'>
                    <div class='panel-head'>
                        <h5>Opsi</h5>
                    </div>
                    <div class='panel-body'>
                        <p>Tambahkan class <code>.right-pos</code> pada <code>.dropdown-menu</code> untuk mendapatkan dropdown-menu yang rata-kanan</p>
                        <p>Pada <code>li</code> di <code>dropdown-menu</code> juga bisa ditambahkan class-class. Seperti: <code>.head</code> untuk menjadikannya menu header, dan <code>.sparator</code> untuk membuat sparator.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>