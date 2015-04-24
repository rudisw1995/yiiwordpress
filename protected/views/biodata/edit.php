<html>
<link href="css/bootstrap.css" rel="stylesheet" media="all">
<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $query = $dbh->query("SELECT * FROM tabel_biodata WHERE id = '$_GET[id]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "ID tidak tersedia!
<a href='index.php'>Kembali</a>";
    exit();
}

if ($data === false) {
    echo "Data tidak ditemukan!
<a href='index.php'>Kembali</a>";
    exit();
}
?>
<h1 align="center">Edit Biodata</h1>
<fieldset style="width: 50%; margin: auto;">
    <legend>Form Input Biodata</legend>
     
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
        <p>
            <font color = "red"> Nama Lengkap</font>

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Nama Lengkap" aria-describedby="sizing-addon1">
            </div>         
        <p>
            Jenis Kelamin

            <?php if ($data['jenis_kelamin'] === "Laki-Laki") : ?>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" checked /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
            <?php else : ?>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" checked /><label for="perempuan">Perempuan</label>
            <?php endif; ?>
        </p>
         
        <p>
            Alamat Lengkap

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Alamat Lengkap" aria-describedby="sizing-addon1">
            </div>
        </p>
         
        <p>
            Nomor Handphone

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Nomor Handphone" aria-describedby="sizing-addon1">
            </div>
        </p>
         
        <p>
            <input class="btn btn-default" type="submit" value="Simpan" />
            <input class="btn btn-default" type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
        </p>
    </form>
</fieldset>


<center><a href="index.php">Kembali Tabel Biodata <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></center> 
</html>