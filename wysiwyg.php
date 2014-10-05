<!DOCTYPE html>
<html>
<head>
	<title>IM Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/fa/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css"/>
    <link rel='stylesheet' type='text/css' href='assets/css/imadmin.css'/>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/plugins/ckeditor/ckeditor.js"></script>
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
                    <a href='#' class='button button-blue'><i class="fa fa-thumb-tack"></i> Tambah Data</a>
                </div>
            </div>
            <div class='breadcrumb'>
                <a href='#'>Dashboard</a><i class="fa fa-angle-right"></i><a href='#'>Form</a><i class="fa fa-angle-right"></i>Form Elements
            </div>
            <div class='row'>
                <div class='col-4'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h4>New Post</h4>
                            <p>Contoh form dengan wysiwyg editor</p>
                            <div class='panel-action'>
                                <i class="fa panel-minimize"></i>
                                <i class="fa panel-close"></i>
                            </div>
                        </div>
                        <div class='panel-body'>
                            <form>
                            <div class='input-row inline'>
                                <h5>Judul :</h5>
                                <input type='text'/>
                            </div>
                            <div class='input-row inline'>
                                <h5>Tanggal :</h5>
                                <input type="text" class='datepicker'/>
                            </div>
                            <div class='input-row inline'>
                                <h5>Isi Berita :</h5>
                                <textarea spellcheck="false" id='wysiwyg'>sdfsfsdfsdfsdf</textarea>
                            </div>
                            <script>
                                CKEDITOR.replace( 'wysiwyg' );
                            </script>
                            <div class='input-row submit'>
                                <input type="reset" value='Reset' class='button button-white'/>
                                <input type="submit" value='Submit' class='button button-blue'/>
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