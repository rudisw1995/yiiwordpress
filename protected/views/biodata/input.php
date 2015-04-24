<h1 align="center">Input Biodata</h1>
<link href="css/bootstrap.css" rel="stylesheet" media="all">
<fieldset style="width: 50%; margin: auto;">
    <legend>Form Input Biodata</legend>
     
    <form action="simpan.php" method="post">
        <p>
            Nama Lengkap

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Nama Lengkap" aria-describedby="sizing-addon1">
            </div>
        </p>
         
        <p>
            Jenis Kelamin

            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" required /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" required/><label for="perempuan">Perempuan</label>
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


<center>[<a href="index.php">Kembali ke Tabel Biodata</a>]</center> 
