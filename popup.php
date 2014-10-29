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
                    <h3>Alert and Pop-Up</h3>
                    <h5>Contoh alert dan pop-up</h5>
                </div>
                <div class='page-action'>
                    <a href='#' class='button button-blue'><i class="fa fa-thumb-tack"></i> Tambah Data</a>
                </div>
            </div>
            <div class='breadcrumb'>
                <a href='#'>Dashboard</a><i class="fa fa-angle-right"></i><a href='#'>UI Elements</a><i class="fa fa-angle-right"></i>Alert and Pop-Up
            </div>
            <div class='alert alert-success'>
                <p><b>Success!</b> You successfully read this important alert message.<i class="fa fa-times"></i></p>
            </div>
            <div class='alert alert-notice'>
                <p><b>Notice!</b> This alert needs your attention, but it's not super important. <i class="fa fa-times"></i></p>
            </div>
            <div class='alert alert-warning'>
                <p><b>Warning!</b> Best check yo self, you're not looking too good. <i class="fa fa-times"></i></p>
            </div>
            <div class='alert alert-error'>
                <p><b>Error!</b> Change a few things up and try submitting again. <i class="fa fa-times"></i></p>
            </div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Alert on Inside</h5>
                        </div>
                        <div class='panel-body'>
                            <div class='alert alert-notice'>
                                <p><b>Notice!</b> Alertnya ada didalam panel lho. <i class="fa fa-times"></i></p>
                            </div>
                            <div class='alert alert-warning'>
                                <p><b>Warning!</b> Alertnya ada didalam panel lho. <i class="fa fa-times"></i></p>
                            </div>
                        </div>
                        <div class='panel-footer'>
                            Cukup masukkan <span class='code'>.alert</span> ke dalam <span class='code'>.panel-body</span>.
                        </div>
                    </div>
                </div>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Tooltip</h5>
                        </div>
                        <div class='panel-body padding'>
                            <a href='#' class='button tipt' title='this is tooltip'>Top</a>
                            <a href='#' class='button tipr' title='this is tooltip'>Right</a>
                            <a href='#' class='button tipb' title='this is tooltip'>Bottom</a>
                            <a href='#' class='button tipl' title='this is tooltip'>Left</a>
                        </div>
                        <div class='panel-footer'>
                            Cukup tambahkah <span class='code'>.tipt</span>, <span class='code'>.tipr</span>, <span class='code'>.tipb</span> atau <span class='code'>.tipl</span>.
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-body padding'>
                            <a href='tes' class='button button-confirm'>Tes</a>
                            <a href='tes2' class='button button-confirm'>Tes</a>
                            tes
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>