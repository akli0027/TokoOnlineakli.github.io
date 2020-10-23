<?php
    session_start();
     include 'koneksi.php';
    $id_pembeli= $_SESSION['id_pembeli'];

    if(isset($_POST['bayar'])){
        if(!empty($_POST['pilihan'])){
            foreach ($_POST['pilihan'] as $selected) {
                $data[]=$selected;
            }
        }
    }
    $banyak= count($data);
    for($i=0; $i<$banyak; $i++){
        $result= mysqli_query($connect,"INSERT INTO struk VALUES ('$id_pembeli','$data[$i]')");
    }
    header('Location: invoice.php');
?>