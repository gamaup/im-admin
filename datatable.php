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
                    <h3>DataTable</h3>
                    <h5>Contoh tampilan table menggunakan plugin DataTable</h5>
                </div>
            </div>
            <div class='breadcrumb'>
                <a href='#'>Dashboard</a><i class="fa fa-angle-right"></i><a href='#'>Table</a><i class="fa fa-angle-right"></i>DataTable
            </div>
            <div class='row'>
                <div class='col-3'>
                    <div class='panel'>
                        <div class='panel-head'>
                            <h5>DataTable</h5>
                        </div>
                        <div class='panel-body'>
                            <table class='datatable bordered table-green'>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>House</th>
                                        <th>Fort</th>
                                        <th class='nosort'>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='#'>Jon Snow</a></td>
                                        <td>Night Watch</td>
                                        <td>The Wall</td>
                                        <td>Alive</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Daenerys Targaryen</td>
                                        <td>Targaryen</td>
                                        <td>-</td>
                                        <td>Alive</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Tyrion Lannister</td>
                                        <td>Lannister</td>
                                        <td>Kings Landing</td>
                                        <td>Alive</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Arya Stark</td>
                                        <td>Stark</td>
                                        <td>Winterfell</td>
                                        <td>Alive</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Robb Stark</td>
                                        <td>Stark</td>
                                        <td>Winterfell</td>
                                        <td>Dead</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Eddard Stark</td>
                                        <td>Stark</td>
                                        <td>Winterfell</td>
                                        <td>Dead</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Catelyn Stark</td>
                                        <td>Tully</td>
                                        <td>Winterfell</td>
                                        <td>Dead</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Rickon Stark</td>
                                        <td>Stark</td>
                                        <td>Winterfell</td>
                                        <td>Unknown</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Brandon Stark</td>
                                        <td>Stark</td>
                                        <td>Winterfell</td>
                                        <td>Alive</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Hodor</td>
                                        <td>-</td>
                                        <td>Winterfell</td>
                                        <td>Alive</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Tywin Lannister</td>
                                        <td>Lannister</td>
                                        <td>Castelry Rock</td>
                                        <td>Dead</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Jaime Lannister</td>
                                        <td>Lannister</td>
                                        <td>Kings Landing</td>
                                        <td>Alive</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Theon Greyjoy</td>
                                        <td>Greyjoy</td>
                                        <td>Winterfell</td>
                                        <td>Alive</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Joffrey Baratheon</td>
                                        <td>Lannister</td>
                                        <td>Kings Landing</td>
                                        <td>Dead</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Margaery Tyrell</td>
                                        <td>Tyrell</td>
                                        <td>Kings Landing</td>
                                        <td>Alive</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class='col-1'>
                    <div class='panel-head'>
                        <h5>Datatable Plugin</h5>
                        <p>Penjelasan</p>
                    </div>
                    <div class='panel-body'>
                        <p>Datatable adalah sebuah plugin jQuery yang digunakan untuk mengoptimalisasikan tabel standar html. Dimana tabel yang menggunakan plugin ini dapat melakukan sorting, searching, dan lain-lain.</p>
                        <p>Cara menggunakannya adalah dengan memanggil file-file yang dibutuhkan (.js &amp; .css) dari folder plugin. Lalu tambahkan class <code>datatable</code> pada <code>table</code>.</p>
                        <p>Format penulisan table juga harus benar. Contoh:</p>
<pre><code>&lt;table class='datatable'>
    &lt;thead>
        &lt;tr>
            &lt;th>..&lt;/th>
            &lt;th>..&lt;/th>
        &lt;/tr>
    &lt;/thead>
    &lt;tbody>
        &lt;tr>
            &lt;td>..&lt;/td>
            &lt;td>..&lt;/td>
        &lt;/tr>
    &lt;/tbody>
&lt;/table></code></pre>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-2'>
                    <div class='panel-head'>
                        <h5>Opsi &amp; Pengaturan</h5>
                    </div>
                    <div class='panel-body'>
                        <p>Untuk men-disable fungsi sorting pada salah satu kolom tertentu, cukup tambahkan class <code>nosort</code> pada <code>th</code> (header kolom).</p>
                        <p>Untuk men-disable fungsi sorting pada semua kolom, cukup ganti class <code>datatable</code> menjadi <code>datatable-nosort</code> pada <code>table</code>.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>