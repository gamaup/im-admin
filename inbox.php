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
                    <h5>Total messages: 387 (unread: 8)</h5>
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
                            <li class='active'><a href='#'><i class="fa fa-inbox"></i>All Messages<span>123</span></a></li>
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
                            <a href='#' class='button button-icon tipb' title='Refresh'><i class="fa fa-refresh"></i></a>
                            <div class='button-group'>
                                <a href='#' class='button button-icon tipb' title='Mark as Read'><i class="fa fa-eye"></i></a>
                                <a href='#' class='button button-icon tipb' title='Mark as Unread'><i class="fa fa-eye-slash"></i></a>
                                <a href='#' class='button button-icon tipb' title='Move to Trash'><i class="fa fa-trash-o"></i></a>
                            </div>
                            <div class='panel-links-10'>
                                <h5>Showing 1-10 of 234</h5>
                                <div class='button-group'>
                                    <a href='#' class='button button-icon tipb button-disabled' title='Previous'><i class="fa fa-caret-left"></i></a>
                                    <a href='#' class='button button-icon tipb' title='Next'><i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class='panel-body'>
                            <table class='mail'>
                                <tr>
                                    <th><input type='checkbox'/></th>
                                    <th>From</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                </tr>
                                <tr class='unread'>
                                    <td><input type='checkbox'/></td>
                                    <td><a href='#'>Daenerys Targaryen</a></td>
                                    <td><a href='#'>Dracarys! Burn 'em all!</a></td>
                                    <td>Yesterday</td>
                                </tr>
                                <tr class='unread'>
                                    <td><input type='checkbox'/></td>
                                    <td><a href='#'>Jon Snow</a></td>
                                    <td><a href='#'>We Are The Watchers on The Wall</a></td>
                                    <td>5min ago</td>
                                </tr>
                                <tr>
                                    <td><input type='checkbox'/></td>
                                    <td><a href='#'>Arya Stark</a></td>
                                    <td><a href='#'>Joffrey, Cersei, Illyn Payne, The Hound</a></td>
                                    <td>2hrs ago</td>
                                </tr>
                                <tr>
                                    <td><input type='checkbox'/></td>
                                    <td><a href='#'>Hodor</a></td>
                                    <td><a href='#'>Hodor, hodor, hodor. Hodor!</a></td>
                                    <td>Yesterday</td>
                                </tr>
                                <tr>
                                    <td><input type='checkbox'/></td>
                                    <td><a href='#'>Tyrion Lannister</a></td>
                                    <td><a href='#'>I'm guilty of being a dwarf!</a></td>
                                    <td>a sec ago</td>
                                </tr>
                            </table>
                        </div>
                        <div class='panel-footer' style="text-align: right;">
                            <h5 style="display:inline-block;margin-right: 10px; line-height: 30px;">Showing 1-10 of 234</h5>
                            <div class='button-group'>
                                <a href='#' class='button button-icon tipb button-disabled' title='Previous'><i class="fa fa-caret-left"></i></a>
                                <a href='#' class='button button-icon tipb' title='Next'><i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>