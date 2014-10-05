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
                    <h3>Inbox</h3>
                    <h5>From: Daenerys Targaryen</h5>
                </div>
                <div class='page-action'>
                    <a href='#' class='button button-blue'><i class="fa fa-thumb-tack"></i> Tambah Data</a>
                </div>
            </div>
            <div class='breadcrumb'>
                <a href='#'>Dashboard</a><i class="fa fa-angle-right"></i><a href='#'>Mailbox</a><i class="fa fa-angle-right"></i>Inbox
            </div>
            <div class='col-1'>
                <div class='row'>
                    <div class='panel'>
                        <div class='search'>
                            <i class="fa fa-search"></i>
                            <input type='search' placeholder='Search mail...'/>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='panel'>
                        <ul class='list list-link red'>
                            <li><a href='#'><i class="fa fa-inbox"></i>All Messages<span>123</span></a></li>
                            <li><a href='#'><i class="fa fa-eye"></i>Read<span>100</span></a></li>
                            <li><a href='#'><i class="fa fa-eye-slash"></i>Unread<span>23</span></a></li>
                            <li><a href='#'><i class="fa fa-trash-o"></i>Trash<span>0</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='col-3'>
                <div class='row'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Dracarys! Burn 'em all!</h5>
                            <div class='panel-links'>
                                <h5>25/07/2014 15:44</h5>
                            </div>
                        </div>
                        <div class='panel-body'>
                            <div class='mail'>
                                <div class='head'>
                                    <div class='from'>
                                        <h4>Daenerys Targaryen</h4>
                                        <h5>daenerys@targaryen.org</h5>
                                        <h5>085742247442</h5>
                                    </div>
                                    <div class='action'>
                                        <div class='button-group'>
                                            <a href='#' class='button'><i class='fa fa-trash-o'></i> Delete</a>
                                            <a href='#' class='button'><i class='fa fa-times'></i> Close</a>
                                        </div>
                                    </div>
                                </div>
                                <p>She woke with a gasp, not knowing who she was, or where. The smell of blood was heavy in her nostrils... or was that her nightmare, lingering? She had dreamed of wolves again, of running through some dark pine forest with a great pack at her hells, hard on the scent of prey. Half-light filled the room, grey and gloomy. Shivering, she sat up in bed and ran a hand across her scalp. Stubble bristled against her palm. I need to shave before Izembaro sees. Mercy, I'm Mercy, and tonight I'll be raped and murdered. Her true name was Mercedene, but Mercy was all anyone ever called her...</p>
                            </div>
                        </div>
                        <div class='panel-footer' style="text-align: right;">
                            <h5 style="display:inline-block;margin-right: 10px; line-height: 30px;">Message ID: 5</h5>
                            <div class='button-group'>
                                <a href='#' class='button button-icon tipb' title='Previous Message'><i class="fa fa-caret-left"></i></a>
                                <a href='#' class='button button-icon tipb' title='Next Message'><i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>