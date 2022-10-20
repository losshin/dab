<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Simpan Data</title>
    </head>
    <body>
        <div class="bldy">
            <center><h2> Simpan Data </h2>
            <table>
                <form action="connectdb.php" method="post">
                    <tr><td></td><td><input type="text" name="no.unit" placeholder="no.unit" style="width:300px"></td></tr>
                    <tr><td></td><td><input type="text" name="nama_lokomotif" placeholder="nama lokomotif" style="width:300px"></td></tr>
                    <tr><td></td><td><input type="text" name="jenis" placeholder="jenis" style="width:300px"></td></tr>
                    <tr><td></td><td><input type="number" name="tahun_beroperasi" placeholder="tahun beroperasi" style="width:300px"></td></tr>
                    <tr><td></td><td><input type="float" name="cc" placeholder="cc" style="width:300px"></td></tr>
                    <tr><td></td><td><input type="submit" name="submit" value="Simpan"></td></tr>
                </form>
            </table>
            </center>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['ok'])){
        if(empty($_POST['no. unit']) || empty($_POST['nama_lokomotif'])){
            print "Lengkapi form";
        }else{
            $no_unit = $_POST['no.unit'];
            $nama_lokomotif = $_POST['nama_lokomotif'];
            $jenis = $_POST['jenis'];
            $tahun_beroperasi = $_POST['tahun_beroperasi'];
            $cc = $_POST['cc'];

            mysql_query("INSERT INTO unit VALUES('','$no_unit','$nama_lokomotif','$jenis','$tahun_beroperasi','$cc')");
            header("location: index.php");
        }
    }
?>