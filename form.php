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
<!--                    <a href='#' class='button button-blue'><i class="fa fa-thumb-tack"></i> Tambah Data</a>-->
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
                        </div>
                        <div class='panel-body code-default-form'>
<form>
    <div class='input-row'>
        <h5>Teks :</h5><p class='helper'>tampilan standar untuk input-field dengan tipe 'text'</p>
        <input type='text' placeholder='placeholder'/>
    </div>
    <div class='input-row'>
        <h5>Password :</h5><p class='helper'>tampilan password</p>
        <input type='password' value='password'/>
    </div>
    <div class='input-row'>
        <h5>Read Only :</h5><p class='helper'>input-field yang hanya bisa dibaca dan tidak bisa diedit</p>
        <input type='text' value='read only' readonly/>
    </div>
    <div class='input-row'>
        <h5>Disabled :</h5><p class='helper'>input-field yang terdisabled</p>
        <input type='text' value='disabled' disabled/>
    </div>
    <div class='input-row'>
        <h5>Textarea :</h5>
        <textarea spellcheck="false">textarea value</textarea>
        <p class='helper'>alternatif peletakan helper</p>
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
    <div class='input-row submit'>
        <input type='reset' value='Reset' class='button button-white'/>
        <input type='submit' value='Submit' class='button button-blue'/>
    </div>
</form>
                        </div>
                    </div>
                </div>
                <div class='col-2'>
<!--                    <div class='panel'>-->
                        <div class='panel-head'>
                            <h5>Default Form</h5>
                            <p>Penjelasan</p>  
                        </div>
                        <div class='panel-body'>
                            <p>setiap input-field harus dibungkus tag <code>&lt;div class="input-row">..&lt;/div></code></p>
                            <p>label untuk input-field gunakan tag <code>&lt;h5>..&lt;/h5></code></p>
                            <p>untuk helper, gunakan tag <code>&lt;p class="helper">..&lt;/p></code></p>
                            <p>untuk tombol submit, tambahkan class <code>submit</code> pada tag <code>&lt;div class="input-row">..&lt;/div></code></p>
                        </div>
                        <div class='panel-footer'>
                            <p>untuk lebih detailnya, klik:</p> <a class='button button-red open-code' data-target='code-default-form'>lihat source-code</a>
                            <pre class='show-code'><code></code></pre>
                        </div>
<!--                    </div>-->
                </div>
            </div>
            <div class='divider'></div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Inline Form</h4>
                        </div>
                        <div class='panel-body'>
                            <form>
                                <div class='input-row inline'>
                                    <h5>Teks :</h5>
                                    <input type='text' placeholder='placeholder'/>
                                    <p class='helper'>helper harus berada dibawah form</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class='col-2'>
<!--                    <div class='panel'>-->
                        <div class='panel-head'>
                            <h5>Inline Form</h5>
                            <p>Penjelasan</p>  
                        </div>
                        <div class='panel-body'>
                            <p>tambahkan class <code>inline</code> pada tag <code>&lt;div class="input-row">..&lt;/div></code></p>
                        </div>
<!--                    </div>-->
                </div>
            </div>
            <div class='divider'></div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Radio &amp; Checkbox</h4>
                        </div>
                        <div class='panel-body code-radio-checkbox'>
<form>
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
</form>
                        </div>
                    </div>
                </div>
                <div class='col-2'>
<!--                    <div class='panel'>-->
                        <div class='panel-head'>
                            <h5>Radio &amp; Checkbox</h5>
                            <p>Penjelasan</p>  
                        </div>
                        <div class='panel-body'>
                            <p>setiap item radio/checkbox harus dibungkus dengan tag <code>&lt;div class="radio">..&lt;/div></code> atau <code>&lt;div class="checkbox">..&lt;/div></code>, dengan aturan harus menyertakan tag <code>label</code> setelah tag <code>input</code>.</p>
                            <p>untuk membuat inline, cukup bungkus semua item radio/checkbox kedalam satu bungkus <code>&lt;div class="radio">..&lt;/div></code> atau <code>&lt;div class="checkbox">..&lt;/div></code></p>
                        </div>
                        <div class='panel-footer'>
                            <p>untuk lebih detailnya, klik:</p> <a class='button button-red open-code' data-target='code-radio-checkbox'>lihat source-code</a>
                            <pre class='show-code'><code></code></pre>
                        </div>
<!--                    </div>-->
                </div>
            </div>
            <div class='row'>
                <div class='col-1'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Switch</h4>
                        </div>
                        <div class='panel-body code-switch'>
<form>
    <div class='input-row inline'>
        <h5>Radio 1 :</h5>
        <div class='switch'>
            <input type="radio" name='switch' id='switch1'/>
            <label for="switch1"></label>
        </div>
    </div>
    <div class='input-row inline'>
        <h5>Radio 2 :</h5>
        <div class='switch'>
            <input type="radio" name='switch' id='switch2'/>
            <label for="switch2"></label>
        </div>
    </div>
    <div class='input-row inline'>
        <h5>Radio 4 :</h5>
        <div class='switch'>
            <input type="radio" name='switch' id='switch3'/>
            <label for="switch3"></label>
        </div>
    </div>
    <div class='input-row inline'>
        <h5>Checkbox 1 :</h5>
        <div class='switch'>
            <input type="checkbox" name='switch' id='switch1b'/>
            <label for="switch1b"></label>
        </div>
    </div>
    <div class='input-row inline'>
        <h5>Checkbox 2 :</h5>
        <div class='switch'>
            <input type="checkbox" name='switch' id='switch2b'/>
            <label for="switch2b"></label>
        </div>
    </div>
    <div class='input-row inline'>
        <h5>Checkbox 3 :</h5>
        <div class='switch'>
            <input type="checkbox" name='switch' id='switch3b'/>
            <label for="switch3b"></label>
        </div>
    </div>
</form>
                        </div>
                    </div>
                </div>
                <div class='col-3'>
<!--                    <div class='panel'>-->
                        <div class='panel-head'>
                            <h5>Switch</h5>
                            <p>Penjelasan</p>  
                        </div>
                        <div class='panel-body'>
                            <p>Memiliki 2 tipe, yaitu: radio based dan checkbox based. Jika radio, maka hanya ada 1 yang bisa dipilih/dinyalakan. Sedangkan checkbox bisa beberapa.</p>
                            <p>Setiap item radio/checkbox harus dibungkus dengan tag <code>&lt;div class="switch">..&lt;/div></code>, dengan aturan harus menyertakan tag <code>label</code> setelah tag <code>input</code>.</p>
                        </div>
                        <div class='panel-footer'>
                            <p>untuk lebih detailnya, klik:</p> <a class='button button-red open-code' data-target='code-switch'>lihat source-code</a>
                            <pre class='show-code'><code></code></pre>
                        </div>
<!--                    </div>-->
                </div>
            </div>
            <div class='divider'></div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>File Input</h4>
                        </div>
                        <div class='panel-body'>
                            <form>
                                <div class='input-row inline'>
                                    <h5>Upload File :</h5>
                                    <div class='input-file'>
                                        <input type='text'/>
                                        <h4 class='button button-blue'>Browse</h4>
                                        <input type="file" multiple/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class='col-2'>
<!--                    <div class='panel'>-->
                        <div class='panel-head'>
                            <h5>File Input</h5>
                            <p>Format pemakaian</p>  
                        </div>
                        <div class='panel-body'>
                            <pre><code>&lt;div class='input-row inline'>
    &lt;h5>Upload File :&lt;/h5>
    &lt;div class='input-file'>
        &lt;input type='text'/>
        &lt;h4 class='button button-blue'>Browse&lt;/h4>
        &lt;input type="file" multiple/>
    &lt;/div>
&lt;/div></code></pre>
                        </div>
<!--                    </div>-->
                </div>
            </div>
            <div class='divider'></div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Existing File Input</h4>
                        </div>
                        <div class='panel-body'>
                            <form>
                                <div class='input-row inline file-exist'>
                                    <h5>Upload File :</h5>
                                    <div class='input-file'>
                                        <input type='text'/>
                                        <h4 class='button button-blue'>Browse</h4>
                                        <input type="file" multiple/>
                                    </div>
                                    <div class='input-file-exist'>
                                        <a href='#' target='_blank' style='background-image:url("assets/images/bg1.jpg");'></a>
                                        <h4><i class="fa fa-retweet"></i> Change Image</h4>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class='col-2'>
<!--                    <div class='panel'>-->
                        <div class='panel-head'>
                            <h5>Existing File Input</h5>
                            <p>Format pemakaian</p>  
                        </div>
                        <div class='panel-body'>
                            <pre><code>&lt;div class='input-row inline file-exist'>
    &lt;h5>Upload File :&lt;/h5>
    &lt;div class='input-file'>
        &lt;input type='text'/>
        &lt;h4 class='button button-blue'>Browse&lt;/h4>
        &lt;input type="file" multiple/>
    &lt;/div>
    &lt;div class='input-file-exist'>
        &lt;a href='#' target='_blank' style='background-image:url();'>&lt;/a>
        &lt;h4>&lt;i class="fa fa-retweet">&lt;/i> Change Image&lt;/h4>
    &lt;/div>
&lt;/div></code></pre>
                        </div>
<!--                    </div>-->
                </div>
            </div>
            <div class='divider'></div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Date Picker</h4>
                        </div>
                        <div class='panel-body'>
                            <form>
                                <div class='input-row inline'>
                                    <h5>Pilih tanggal :</h5>
                                    <input type='text' class='datepicker'/>
                                    <p class='helper'>klik pada form</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class='col-2'>
<!--                    <div class='panel'>-->
                        <div class='panel-head'>
                            <h5>Date Picker</h5>
                            <p>Format penulisan</p>  
                        </div>
                        <div class='panel-body'>
                            <p><code>&lt;input type='text' class='datepicker'/></code></p>
                        </div>
<!--                    </div>-->
                </div>
            </div>
            <div class='divider'></div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>Input With Error</h4>
                        </div>
                        <div class='panel-body'>
                            <form>
                                <div class='input-row inline'>
                                    <h5>Teks :</h5>
                                    <input type='text' class='form-error' title='form ini tidak boleh kosong'/>
                                    <p class='helper'>hover pada form</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class='col-2'>
<!--                    <div class='panel'>-->
                        <div class='panel-head'>
                            <h5>Input With Error</h5>
                            <p>Format penulisan</p>  
                        </div>
                        <div class='panel-body'>
                            <p><code>&lt;input type='text' class='form-error' title='form ini tidak boleh kosong'/></code></p>
                        </div>
<!--                    </div>-->
                </div>
            </div>
            
        </main>
    </div>
</body>
</html>