<!DOCTYPE HTML>
<html>
<head>
    <title>SG3</title>
    <link href="css/bootstrap.css" rel="stylesheet" media="all">
    </head>
    <body>
        <br><br>
<div class="container">
<div class="jumbotron">

  <h1>Hello, world!</h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
</div>
<?php
include 'connect.php';
?>
<style>
    tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #ededed;
    }
    table{
        width: 70%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: blue 3px;
    }
    thead tr {
        background-color: #80FFFE;
    }
</style>
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Biodata</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="input.php">Input Biodata Kamu</a></li>
        <li class="dropdown">
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
<h1 align="center">Index CRUD | Rudi Sapto Wicaksana</h1>

<center><img src ="download-yahoo-messenger-terbaru.png"></center>
<center>[<a href="input.php">Input Biodata Kamu <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>]</center>
 <br>
<div class="alert alert-success" role="alert">...</div>
<div class="alert alert-info" role="alert">...</div>
<div class="alert alert-warning" role="alert">...</div>
<div class="alert alert-danger" role="alert">...</div>
<div class="container">
    <ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="http://tasrifan-smkmsawangan.blogspot.com/2013/01/best-first-search.html">Profile</a></li>
  <li role="presentation"><a href="">Messages</a></li>
</ul>
<table class="table table-hover" border="1" >
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Hp</td>
            <td>Pilihan</td>
        </tr>
    </thead>
     
    <tbody>
    <?php
    $sql = "SELECT * FROM tabel_biodata ORDER BY jenis_kelamin";
    $no  = 1;
    foreach ($dbh->query($sql) as $data) :
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['jenis_kelamin'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['no_hp'] ?></td>
            <td align="center">
                <a href="edit.php?id=<?php echo $data['id'] ?>">Edit |</a>
                   
                <a href="hapus.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Biodata Ini?')">Hapus</a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
</div>
</body> 
</html>
