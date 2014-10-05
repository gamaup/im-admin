<!DOCTYPE html>
<html>
<head>
	<title>IM Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/fa/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css"/>
    <link rel='stylesheet' type='text/css' href='assets/plugins/datatables/css/jquery.dataTables.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/imadmin.css'/>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
    <div id='wrapper'>
        <?php include 'nav.php'; ?>
        <?php include 'sidebar.php'; ?>
        <main>
            <div class='page-header'>
                <div class='page-info'>
                    <h3>DataTables</h3>
                    <h5>Contoh tampilan table menggunakan plugin DataTables</h5>
                </div>
                <div class='page-action'>
                    <a href='#' class='button button-blue'><i class="fa fa-thumb-tack"></i> Tambah Data</a>
                </div>
            </div>
            <div class='breadcrumb'>
                <a href='#'>Dashboard</a><i class="fa fa-angle-right"></i><a href='#'>Table</a><i class="fa fa-angle-right"></i>DataTable
            </div>
            <div class='row'>
                <div class='col-4'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Table With Action</h5>
                            <div class='panel-action'>
                                <a href='#'><i class="fa panel-expand"></i></a>
                            </div>
                        </div>
                        <div class='panel-body'>
                            <table id='datatables' class='bordered'>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jon Snow</td>
                                        <td>11523999</td>
                                        <td>Jogja</td>
                                        <td class='action'>
                                            <div class='action-set'>
                                            <a href='#'><i class="fa fa-eye"></i>View</a>
                                            <a href='#'><i class="fa fa-download"></i>Download</a>
                                            <a href='#'><i class="fa fa-trash-o"></i>Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Daenerys Targaryen</td>
                                        <td>11523888</td>
                                        <td>Sleman</td>
                                        <td class='action'>
                                            <a href='#'><i class="fa fa-eye"></i>View</a>
                                            <a href='#'><i class="fa fa-download"></i>Download</a>
                                            <a href='#'><i class="fa fa-trash-o"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Tyrion Lannister</td>
                                        <td>11523777</td>
                                        <td>Ngemplak</td>
                                        <td class='action'>
                                            <a href='#'><i class="fa fa-eye"></i>View</a>
                                            <a href='#'><i class="fa fa-download"></i>Download</a>
                                            <a href='#'><i class="fa fa-trash-o"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Hodor</td>
                                        <td>11523666</td>
                                        <td>Pamungkas</td>
                                        <td class='action'>
                                            <a href='#'><i class="fa fa-eye"></i>View</a>
                                            <a href='#'><i class="fa fa-download"></i>Download</a>
                                            <a href='#'><i class="fa fa-trash-o"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>White Walker</td>
                                        <td>11523555</td>
                                        <td>Harjobinangun</td>
                                        <td class='action'>
                                            <a href='#'><i class="fa fa-eye"></i>View</a>
                                            <a href='#'><i class="fa fa-download"></i>Download</a>
                                            <a href='#'><i class="fa fa-trash-o"></i>Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <script>
                                $(document).ready(function() {
                                    S('table#datatables').DataTable();
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class='col-4'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Table With Action (Icon)</h5>
                            <div class='panel-action'>
                                <a href='#'><i class="fa panel-expand"></i></a>
                            </div>
                        </div>
                        <div class='panel-body'>
                            <table class='table-red bordered'>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Jon Snow</td>
                                    <td>11523999</td>
                                    <td>Jogja</td>
                                    <td class='action'>
                                        <a href='#'><i class="fa fa-eye"></i></a>
                                        <a href='#'><i class="fa fa-download"></i></a>
                                        <a href='#'><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Daenerys Targaryen</td>
                                    <td>11523888</td>
                                    <td>Sleman</td>
                                    <td class='action'>
                                        <a href='#'><i class="fa fa-eye"></i></a>
                                        <a href='#'><i class="fa fa-download"></i></a>
                                        <a href='#'><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tyrion Lannister</td>
                                    <td>11523777</td>
                                    <td>Ngemplak</td>
                                    <td class='action'>
                                        <a href='#'><i class="fa fa-eye"></i></a>
                                        <a href='#'><i class="fa fa-download"></i></a>
                                        <a href='#'><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Hodor</td>
                                    <td>11523666</td>
                                    <td>Pamungkas</td>
                                    <td class='action'>
                                        <a href='#'><i class="fa fa-eye"></i></a>
                                        <a href='#'><i class="fa fa-download"></i></a>
                                        <a href='#'><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>White Walker</td>
                                    <td>11523555</td>
                                    <td>Harjobinangun</td>
                                    <td class='action'>
                                        <a href='#'><i class="fa fa-eye"></i></a>
                                        <a href='#'><i class="fa fa-download"></i></a>
                                        <a href='#'><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>