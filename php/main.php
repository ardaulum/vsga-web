<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- main css -->
  <link rel="stylesheet" href="css/main.css">
  <!-- font awesome  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!--google font-->
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

  <title>Pelatihan</title>
</head>

<body>
  <!--header-->
  <header id="header"></header>
  <!--end header-->

  <!--navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <a class="navbar-brand" href="#"></a>
        <img src="img/lamap.png" style="height: 40px;" class="margin-l1 margin-r1" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="#"> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#"> Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#"> Packages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#"> Document</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#"> Screenshots</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#"> Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#"> Extra</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#"> Videos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#"> Download</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!--end navbar-->

  <!--jumbotron-->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <img src="img/lamap_logo.png" class="margin-t1 margin-l2 margin-b1" alt="">
      <h1 class="display-4 c1 text-center">Selamat datang di Website Kami</h1>
      <br>
      <p class="lead c1 text-center">Tangguh dan Kreatif</p>
    </div>
  </div>
  <!--end jumbotron-->

  <!--Features-->
  <div class="container-fluid b1">
    <div class="row max-height" id="features">
      <div class="col-10 mx-auto banner text-center">
        <h1 class="text-capitalize"><strong class="banner-title text-light"> features</strong></h1><br>
      </div>
    </div>
  </div>
  <!--end features-->

  <!--table-->
  <div class="container-fluid">
    <div class="row">
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col"> No.</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row"> 3 </th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
      </table>
    </div>
  </div>
  <!--end table-->

  <!--packages-->
  <div class="container-fluid">
    <div class="row max-height" id="packages">
      <h1 class="text-capitalize"><strong class="banner-title text-light"> packages</strong></h1><br>
      <?php
        Printf("tgl sekarang : %s <br>" ,date ("D F Y"));
        $warna= "merah";
        echo  "rumahku warna"." " .$warna."<br>";
        echo  "rumahku warna"." " .$warna."<br>";
        echo  "rumahku warna"." " .$warna."<br>";
        ?>
    </div>
  </div>
  <!--end packages-->

  <br>

  <div class="container">
    <div class="row">
      <form method="POST" action="proses.php">
        <input type="text" name="nama" placeholder="tulis nama anda">
        <input type="submit" name="submit" value="simpan">
      </form>
    </div>

  </div>
  <br>
  <br>
  <br>

  <!-- form -->
  <div class="container">
    <div class="row">
      <form action="" method="">
        <label>nama</label>
        <input type="text" name="nama" placeholder="tulis nama anda"><br><br>
        <label>jenis kelamin</label><br>
        <input type="radio" name="kelamin" value="laki laki">laki laki <br>
        <input type="radio" name="kelamin" value="perempuan">perempuan <br>
        <input type="radio" name="kelamin" value="lainnya">lainnya <br> <br>
        <label>alamat</label>
        <input type="text" name="alamat" placeholder="tulis alamat anda"><br>
        <input type="submit" name="submit">
      </form>
    </div>
  </div>
  <!-- end form -->
  <br>


  <!-- function -->
  <div class="container">
    <div class="row">
      <?php

    // function
   function faktorial ($angka) {
     if ($angka < 2) {
       return 1;
     } else {
      //  memanggil dirinya sendiri
      return ($angka * faktorial($angka-1));
     }
   }

      //  memanggil fungsi
    echo "faktorial 5 adalah " . faktorial (5);

    // end function

    ?>
    </div>
  </div>

  <br>

  <!-- tugas 1-->
  <div class="container">
    <div class="row">

      <?php
    function persegipanjang($panjang , $lebar){
      $hasil = $panjang * $lebar;
      return $hasil;
    }

    echo "Luas Persegi Panjang dengan panjang 10 dan lebar 6.5 adalah " .persegipanjang(10 , 6.5);
    ?>


    </div>
  </div>

  <!-- end tugas 1-->

  <br>

  <!-- tugas 2 -->
  <div class="container">
    <div class="row">

      <?php
    function setlingkaran($set , $p , $r){
      $hasil =$set * $p * $r * $r;
      return $hasil;
    }
    echo "Luas Setengah lingkaran yang berdiameter 10 cm adalah " .setlingkaran(1/2 , 3.14 , 5);
    ?>

    </div>
  </div>
  <!--end tugas 2 -->
  <br>

  <!-- prosedur -->
    <div class="container">
    <div class="row">
    
    <?php
    // contoh prosedur 
    function do_print() {
      // mencetak informasi timestap
      echo time();
    }

    // memangil prosedur 

    do_print ();
    echo '<br />';

    // contoh fungsi penjumlahan 
    function jumlah ($a , $b){
      return ($a + $b);
    }
    echo jumlah (2 , 3);
    // output: 5
    ?>

    </div>
    </div>
  <!-- end prosedur -->

  <!--Optional JavaScript-->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src=""></script>
</body>

</html>