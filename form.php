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
                    <h3>Form Elements</h3>
                    <h5>Contoh Elemen-elemen input pada form</h5>
                </div>
                <div class='page-action'>
                    <a href='#' class='button button-blue'><i class="fa fa-thumb-tack"></i> Tambah Data</a>
                </div>
            </div>
            <div class='breadcrumb'>
                <a href='#'>Dashboard</a><i class="fa fa-angle-right"></i><a href='#'>Form</a><i class="fa fa-angle-right"></i>Form Elements
            </div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Default Form</h4>
                            <p>Form dengan bentuk default</p>
                            <div class='panel-action'>
                                <i class="fa panel-minimize"></i>
                                <i class="fa panel-close"></i>
                            </div>
                        </div>
                        <form>
                        <div class='panel-body'>
                            <div class='input-row'>
                                <h5>Teks :</h5>
                                <input type='text'/>
                                <p class='error'>lorem ipsum dolor sit amet</p>
                            </div>
                            <div class='input-row'>
                                <h5>Teks :</h5>
                                <input type='text' value='disabled' disabled/>
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
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Inline Form</h4>
                            <p>Form dengan bentuk inline</p>
                            <div class='panel-action'>
                                <i class="fa panel-minimize"></i>
                                <i class="fa panel-close"></i>
                            </div>
                        </div>
                        <div class='panel-body'>
                            <div class='input-row inline'>
                                <h5>Teks :</h5>
                                <input type='text'/>
                                <p class='error'>lorem ipsum dolor sit amet</p>
                            </div>
                            <div class='input-row inline'>
                                <h5>Teks :</h5>
                                <input type='text' value='disabled' disabled/>
                            </div>
                            <div class='input-row inline'>
                                <h5>Password :</h5>
                                <input type='password'/>
                            </div>
                            <div class='input-row inline'>
                                <h5>Textarea :</h5>
                                <textarea spellcheck="false"></textarea>
                            </div>
                            <div class='input-row inline'>
                                <h5>Dropdown :</h5>
                                <select>
                                    <option>Pilihan 1</option>
                                    <option>Pilihan 2</option>
                                    <option>Pilihan 3</option>
                                    <option>Pilihan 4</option>
                                </select>
                            </div>
                            <div class='input-row inline'>
                                <h5>Multiple :</h5>
                                <select multiple>
                                    <option>Pilihan 1</option>
                                    <option>Pilihan 2</option>
                                    <option>Pilihan 3</option>
                                    <option>Pilihan 4</option>
                                </select>
                            </div>
                            <div class='input-row inline'>
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
                            <div class='input-row inline'>
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
                            <div class='input-row inline'>
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
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>