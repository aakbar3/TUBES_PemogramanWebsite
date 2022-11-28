<?php

include('conection.php');
$sql = "SELECT * FROM tabel_item";

$result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Database Harga Laptop</title>
    <link rel="icon" type="image/x-icon" href="image/ikon.ico">

  </head>
  <body>
    <header class="p-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <img src="image/ikon.png" class="bd-placeholder-img card-img-top" preserveAspectRatio="xMidYMid slice" style="width="40"; height="40";" "alt="...">
          </a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="master.php" class="nav-link px-2 text-white">Master Data</a></li>
            <li><a href="about.php" class="nav-link px-2 text-white">About</a></li>
          </ul>
          
        </div>
      </div>
    </header>

    <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php  while ($row = mysqli_fetch_assoc($result)){ ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" src="baka.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"></svg> -->
                    <img src="<?php echo $row["img"];?>" class="bd-placeholder-img card-img-top" preserveAspectRatio="xMidYMid slice" alt="...">
                    <div class="card-body">
                      <p class="card-text"><?php echo $row["nama"];?> </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="detail.php?id=<?php echo $row["id"];?>">
                              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                          </a>
                          <!-- <button type="button" href="detail.php" class="btn btn-sm btn-outline-secondary">View</button> -->
                        </div>
                        <small class="text-muted"><?php echo $row["price"];?> </small>
                      </div>
                    </div>
                  </div>
                </div>
            <?php } ?>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>