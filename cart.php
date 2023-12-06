<?php
    include "header.php";
    session_start();
    ?>
<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">

<style>
    body{
margin-top:20px;
background:#eee;
}
.ui-w-40 {
width: 40px !important;
height: auto;
}

.card{
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);    
}

.ui-product-color {
    display: inline-block;
    overflow: hidden;
    margin: .144em;
    width: .875rem;
    height: .875rem;
    border-radius: 10rem;
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    vertical-align: middle;
}
    </style>

<div class="container px-3 my-5 clearfix"></div>
    <div class="card">
        <div class="card-header">
            <h2>Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
    <thead>
            <tr>     
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 400px;">Product</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Jumlah</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Ubah</th>
            </tr>
                </thead>
    <tbody>
    <?php
         
        foreach ($_SESSION['cart'] as $key_produk => $val_produk): ?>
        <tr>
                <td><?=$val_produk['nama_produk']?></td>
                <td><?=$val_produk['qty']?></td>
                <td><?=$val_produk['harga']?></td>
                <td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
        </tr>
    </td>
    </tr>
        
        <?php endforeach ;
       
        ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>