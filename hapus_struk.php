<?php
    include 'koneksi.php';

    $query = mysqli_query($connect, "DELETE FROM struk");
        header('Location: home.php');
    
    
?>