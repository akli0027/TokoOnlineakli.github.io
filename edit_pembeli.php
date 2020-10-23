
<!DOCTYPE html>
<html>
<head>
    <title>Edit Pembeli</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fluid">
      <div class="jumbotron">
      <h1>Edit Pembeli</h1>
       <?php 
         include 'koneksi.php';
        $id_pembeli = $_GET['id_pembeli'];
        $query = mysqli_query($connect, "SELECT *FROM pembeli WHERE id_pembeli='$id_pembeli'");
        $row = mysqli_fetch_array($query);
        ?>
      <form action="edit_proses_pembeli.php?id_pembeli=<?=$row['id_pembeli']?>" method="POST">
          <label>Nama</label><br>
            <input class="form-control col-sm-3" type="text" name="nama" value="<?= $row['nama'] ?>" >
          <label>No Telepon</label><br>
            <input class="form-control col-sm-3" type="text" name="no_telepon" value="<?= $row['no_telepon'] ?>" >
          <label>No Alamat</label><br>
            <input class="form-control col-sm-3" type="text" name="alamat" value="<?= $row['alamat'] ?>" >
          <label>Email</label><br>
            <input class="form-control col-sm-3" type="text" name="email" value="<?= $row['email'] ?>" >

          <button type="submit" class="btn btn-primary">save </button>
          <a href="pembeli.php" class="btn btn-danger">Kembali</a>
      </form>
      </div>
  </div>
</body>
</html>