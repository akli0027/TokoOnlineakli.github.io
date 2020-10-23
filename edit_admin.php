
<!DOCTYPE html>
<html>
<head>
    <title>Edit Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fluid">
      <div class="jumbotron">
      <h1>Edit Admin</h1>
       <?php 
        include 'koneksi.php';
        $id_admin = $_GET['id_admin'];
        $query = mysqli_query($connect, "SELECT *FROM admin WHERE id_admin='$id_admin'");
        $row = mysqli_fetch_array($query);
        ?>
      <form action="edit_proses_admin.php?id_admin=<?=$row['id_admin']?>" method="POST">
          <label>Nama</label><br>
            <input class="form-control col-sm-3" type="text" name="nama_admin" value="<?= $row['nama_admin'] ?>" >
          <label>Password</label><br>
            <input class="form-control col-sm-3" type="text" name="password_admin" value="<?= $row['password_admin'] ?>" >
          <label>Email</label><br>
            <input class="form-control col-sm-3" type="text" name="email_admin" value="<?= $row['email_admin'] ?>" >

          <button type="submit" class="btn btn-primary">save </button>
          <a href="admin.php" class="btn btn-danger">Kembali</a>
      </form>
      </div>
  </div>
</body>
</html>

