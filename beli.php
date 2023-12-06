<?php 
    include "header.php";
    include "../koneksi.php";
    $qry_detail_produk=mysqli_query($koneksi,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<?php 
    include "../koneksi.php";
    $qry_detail_produk=mysqli_query($koneksi,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
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

  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="fw-normal mb-0 text-black">Buy</h2>
        </div>
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="img/<?=$dt_produk['foto']?>" class="card-img-top">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
              <form action="tambah_keranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
                <p class="lead fw-normal mb-2"><?=$dt_produk['nama_produk']?></p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                </button>

                <input id="form1" min="0" name="jumlah_beli" value="1" type="number"
                  class="form-control form-control-sm" />

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                </button>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">Harga: <?=$dt_produk['harga']?></h5>
              </div>
            </div>
          </div>
          </div>
        <form action="tambah_keranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
          <div class="card">
            <div class="card-body">
              <button type="submit" class="btn btn-primary btn-block btn-lg">Add to cart</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


<!-- <h2>Beli</h2>
<div class="row">
    <div class="col-md-4">
        <img src="img/<?=$dt_produk['foto']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="tambah_keranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama</td><td><?=$dt_produk['nama_produk']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_produk['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Add to cart"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div> -->