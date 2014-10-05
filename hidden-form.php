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
                    <h3>Standard Table</h3>
                    <h5>Contoh tampilan table secara default</h5>
                </div>
                <div class='page-action'>
                    <a class='button button-blue reveal' data-id='#tambah' data-pushed='col-3'><i class="fa fa-thumb-tack"></i> Tambah Data</a>
                </div>
            </div>
            <div class='breadcrumb'>
                <a href='#'>Dashboard</a><i class="fa fa-angle-right"></i><a href='#'>Table</a><i class="fa fa-angle-right"></i>Standard Table
            </div>
            <div class='row hidden-col' id='tambah'>
                <div class='col-4 pushed'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>Table With Action</h5>
                            <div class='panel-action'>
                                <a href='#'><i class="fa panel-expand tipl" title="View All"></i></a>
                            </div>
                        </div>
                        <div class='panel-body'>
                            <table class='bordered table-yellow'>
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
                            </table>
                        </div>
                    </div>
                </div>
                <div class='col-1 hide'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Default Form</h4>
                            <p>Form dengan bentuk default</p>
                            <div class='panel-action'>
                            </div>
                        </div>
                        <form>
                        <div class='panel-body'>
                            <div class='input-row'>
                                <h5>Teks :</h5>
                                <input type='text'/>
                            </div>
                            <div class='input-row'>
                                <h5>Password :</h5>
                                <input type='password'/>
                            </div>
                            <div class='input-row'>
                                <h5>Textarea :</h5>
                                <textarea spellcheck="false"></textarea>
                            </div>
                            <div class='input-row'>
                                <h5>Dropdown :</h5>
                                <select>
                                    <option>Pilihan 1</option>
                                    <option>Pilihan 2</option>
                                    <option>Pilihan 3</option>
                                    <option>Pilihan 4</option>
                                </select>
                            </div>
                            <div class='input-row'>
                                <h5>Multiple :</h5>
                                <select multiple>
                                    <option>Pilihan 1</option>
                                    <option>Pilihan 2</option>
                                    <option>Pilihan 3</option>
                                    <option>Pilihan 4</option>
                                </select>
                            </div>
                            <div class='input-row'>
                                <h5>Checkbox :</h5>
                                <div class='checkbox'>
                                    <input type="checkbox" name='cek' id='cek1'/>
                                    <label for="cek1">Checkbox 1</label>
                                </div>
                                <div class='checkbox'>
                                    <input type="checkbox" name='cek' id='cek2'/>
                                    <label for="cek2">Checkbox 2</label>
                                </div>
                            </div>
                            <div class='input-row'>
                                <h5>Checkbox(inline) :</h5>
                                <div class='checkbox'>
                                    <input type="checkbox" name='cek' id='cek1'/>
                                    <label for="cek1">Checkbox 1</label>
                                    <input type="checkbox" name='cek' id='cek2'/>
                                    <label for="cek2">Checkbox 2</label>
                                    <input type="checkbox" name='cek' id='cek3'/>
                                    <label for="cek3">Checkbox 3</label>
                                </div>
                            </div>
                            <div class='input-row'>
                                <h5>Radio :</h5>
                                <div class='radio'>
                                    <input type="radio" name='cek' id='rad1'/>
                                    <label for="rad1">Radio 1</label>
                                </div>
                                <div class='radio'>
                                    <input type="radio" name='cek' id='rad2'/>
                                    <label for="rad2">Radio 2</label>
                                </div>
                            </div>
                            <div class='input-row'>
                                <h5>File :</h5>
                                <div class='input-file'>
                                    <input type='text'/>
                                    <h4 class='button button-blue'>Browse</h4>
                                    <input type="file" multiple/>
                                </div>
                            </div>
                            <div class='input-row'>
                                <h5>Datepicker :</h5>
                                <input type="text" class='datepicker'/>
                            </div>
                            <div class='input-row'>
                                <h5>Spinner :</h5>
                                <input type="text" class='spinner'/>
                            </div>
                            <div class='input-row submit'>
                                <input type='reset' value='Reset' class='button button-white'/>
                                <input type='submit' value='Submit' class='button button-blue'/>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>