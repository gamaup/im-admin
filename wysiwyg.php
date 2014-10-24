<!DOCTYPE html>
<html>
<head>
	<title>IM Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/fa/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css"/>
    <link rel='stylesheet' type='text/css' href='assets/css/imadmin.css'/>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/plugins/ckeditor-simple/ckeditor.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
    <div id='wrapper'>
        <?php include 'nav.php'; ?>
        <?php include 'sidebar.php'; ?>
        <main>
            <div class='page-header'>
                <div class='page-info'>
                    <h3>WYSIWYG Editor</h3>
                    <h5>Form dengan menerapkan wysiwyg editor</h5>
                </div>
                <div class='page-action'>
                    
                </div>
            </div>
            <div class='breadcrumb'>
                <a href='#'>Dashboard</a><i class="fa fa-angle-right"></i><a href='#'>Form</a><i class="fa fa-angle-right"></i>WYSIWYG Editor
            </div>
            <div class='row'>
                <div class='col-3'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>CKEditor</h4>
                            <p>WYSIWYG Editor menggunakan plugin CKEditor</p>
                        </div>
                        <div class='panel-body'>
                            <form>
                            <div class='input-row'>
                                <h5>Isi Berita :</h5>
                                <textarea spellcheck="false" id='wysiwyg'>Editor value</textarea>
                                <script>CKEDITOR.replace( 'wysiwyg' );</script>
                            </div>
                            <div class='input-row submit'>
                                <input type="reset" value='Reset' class='button button-white'/>
                                <input type="submit" value='Submit' class='button button-blue'/>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class='col-1'>
                        <div class='panel-head'>
                            <h5>CKEditor</h5>
                            <p>Penjelasan &amp; Penggunaan</p>
                        </div>
                        <div class='panel-body'>
                            <p>Gunakan dengan cara menambahkan ID <code>wysiwyg</code> pada tag <code>textarea</code>.</p>
                            <p>Lalu tambahkan script berikut: </p><pre><code>&lt;script>
CKEDITOR.replace('wysiwyg');
&lt;/script></code></pre> <p>dibawah tag <code>textarea</code></p>
                            <p>Untuk menggunakan editor yang lebih simple, ganti url script <code>ckeditor</code> dengan <code>ckeditor-simple</code></p>
                        </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>