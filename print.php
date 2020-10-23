<?php ob_start();
    session_start();
       include 'koneksi.php';
      $i=0;    
      $id_pembeli=$_SESSION['id_pembeli']; 
      $link = mysqli_query($connect,"SELECT *FROM struk JOIN barang ON struk.kode_barang=barang.kode_barang JOIN pembeli ON struk.id_pembeli= pembeli.id_pembeli WHERE struk.id_pembeli='$id_pembeli'");
      $row= mysqli_fetch_object($link);
?> 
<html>
<head>
  <title>Cetak PDF</title>
   </html><link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style type="text/css">
    .invoice {
    position: relative;
    background: #fff;
    border: 1px solid #f4f4f4;
    padding: 20px;
    margin: 10px 25px;
}
.page-header {
    margin: 10px 0 20px 0;
    font-size: 22px;
}
    </style>
     <style>
    table {border-collapse:collapse; table-layout:fixed;width: 630px;}
    table td {word-wrap:break-word;width: 20%;}
   </style>

<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<section class="content content_content" style="width: 70%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-globe"></i> Jual Spertpart Laptop
                                    <?php date_default_timezone_set("Asia/Jakarta");  ?>
                                    <small class="pull-right"><?= date('m/d/Y h:i:s a');?></small>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <address>
                                    
                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                To : 
                                <strong><?=$row->nama?></strong>
                                <address>
                                    <br>
                                    Alamat :<?=$row->alamat?><br>
                                    Phone   :<?=$row->no_telepon?><br>
                                    Email   :<?=$row->email?>                                
                                </address>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Produk</th>
                                             <th>Harga</th>
                                             <th>Diskon</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                    <?php
                                    $totalsub=0;
                                    $link2= mysqli_query($connect,"SELECT *FROM struk JOIN barang ON struk.kode_barang=barang.kode_barang JOIN pembeli ON struk.id_pembeli= pembeli.id_pembeli WHERE struk.id_pembeli='$id_pembeli'");
                            
                                    while($row2=mysqli_fetch_object($link2)){
                                        ?>
                                        <tr>
                                            <td><?=$row2->nama_barang?></td>
                                            <td><?=$row2->harga?></td>
                                            <td><?=$row2->diskon?></td>
                                            <td><?=$totalbiaya=$row2->harga-$row2->diskon?></td>
                                        </tr>
                                        <?php
                                        $totalsub=$totalsub+$totalbiaya;
                                    }
                                    ?> 

                                                                            </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            
                                            
                                            <tr>
                                                <th>Total:</th>
                                                <td><?=$totalsub?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- this row will not appear when printing -->
                    </section>
                </section>
  <script>
    window.print();
  </script>
</body>




