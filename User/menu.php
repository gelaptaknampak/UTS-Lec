<?php
    require "../koneksi.php";
    $query = "SELECT * FROM userregister WHERE ID_user";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $userData = mysqli_fetch_assoc($result);
        // Sekarang, Anda memiliki data pengguna di $userData
        // Anda dapat menggunakan data ini untuk menampilkan informasi pengguna di halaman
    } else {
        echo "Query gagal: " . mysqli_error($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salero Padang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body{
      overflow-x: hidden;
    }
  </style>
</head>
<body id="top" style="background-color: cream;">

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="../img/Logo restoran.png" alt="Logo Kito" style="max-width: 28%;">
      </a>

      <div class="header-actions">

        <?php
          if (isset($_SESSION['ID_user'])) {
              $userID = $_SESSION['ID_user'];
              echo '<a href="../logout.php"><button class="btn btn-primary" data-aos="fade-down">Logout</button></a>';
          } else {
              // Pengguna belum login
              echo '<a href="../login.php"><button class="btn btn-primary" data-aos="fade-down">Login</button></a>';
          }
        ?>
      </div>
      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="./index.php" class="logo">
            <img src="../img/Logo restoran.png" alt="Logo Kita" style="max-width: 29%;">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
          <a href="<?php if (isset($_SESSION['ID_user'])) {
                  echo '../index.php?ID_user=' . $_SESSION['ID_user'];
              } else { echo '../index.php';}?>" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Menu</a>
          </li>
          
          <li>
          <a href="<?php if (isset($_SESSION['ID_user'])) {
                  echo '../aboutus.php?ID_user=' . $_SESSION['ID_user'];
              } else { echo '../aboutus.php';}?>" class="navbar-link">About Us</a>
          </li>

          <li>
            <a href="../User/pesanan.php" class="navbar-link">Order</a>
          </li>

        <div>
          
        <?php
            if (isset($_SESSION['ID_user'])) {
                $userID = $_SESSION['ID_user'];
                echo '<a href="logout.php" class="btn-container"><button class="btn btn-primary" data-aos="fade-down">Logout</button></a>';
            } else {
                // Pengguna belum login
                echo '<a href="login.php" class="btn-container"><button class="btn btn-primary" data-aos="fade-down">Login</button></a>';
            }
            ?>
            <style>
            @media screen and (min-width: 1025px) {
                .btn-container {
                    display: none;
                }
            }
            </style>

          </div>

        </ul>

        <ul class="navbar-social-list">

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>

  <main>
    <article>
    <section class="Banner" data-aos="fade-up">
        
        <div class="container" data-aos="fade-up">

          <div class="Banner-content" data-aos="fade-up">

            <p class="Banner-subtitle" data-aos="fade-up">Salero Padang</p>

            <h1 class="h1 Banner-title" data-aos="fade-up">
              Sajian <strong>Istimewa</strong> Dengan cita rasa tak terlupakan.
            </h1>

            <button class="btn btn-primary" data-aos="fade-up">
              <span>Cek Dibawah gak sih?? jangan lupa (Free nasi)</span>
            </button>

          </div>
    </section>
    
    <section class="upcoming" data-aos="fade-up" style="background-image: url('../assets/images/darkred.jpg');">
      <div class="container" data-aos="fade-up">
      <div class="title-wrapper" data-aos="fade-up">
        <h2 class="h2 section-title" data-aos="fade-up"><strong>Menu Makanan</strong></h2>
        <br/>
      </div>
      <ul class="foods-list" data-aos="fade-up">
        <?php
        $recoquery = mysqli_query($conn, "SELECT * FROM `menu reccomended`");

        while ($reco = mysqli_fetch_assoc($recoquery)) {
        ?>
        <div class="card" style="width: 17rem;">
            <img src="../img/<?php echo $reco['Gambar'] ?>" style="max-height: 150px;" alt="Gambar Menu" class="card-img-top">
            <div class="card-body">
                <!-- HTML -->
                <form action="prosespesanan.php" method="POST">
                <h5 class="card-title"><?php echo $reco['Nama_menu'] ?></h5>
                <p style="display: none;"><?php echo $cardId = $reco['ID_reccomended']; ?></p>
                <button type="button" class="btn btn-primary" onclick="toggleDescription(<?php echo $cardId ?>)">Deskripsi</button>
                <p id="description<?php echo $cardId ?>" style="display: none;" class="card-text" ><?php echo $reco['Deskripsi'] ?></p>
                <p id="harga<?php echo $cardId ?>" style="display: none;" class="card-text" >Harga : Rp.<?php echo $reco['Harga'] ?></p>
                <label style="display: none;" for="quantity<?php echo $cardId ?>">Jumlah:</label>
                <input style="display: none;" type="number" id="quantity<?php echo $cardId ?>" name="quantity" value="1">
                <br/>

                <?php
                if (isset($_SESSION['ID_user'])) {
                // Hanya jika pengguna sudah login, tampilkan tombol "Order"
                echo '<button type="submit" style="display: none;" id="order' . $cardId . '" formaction="prosespesanan.php?id=' . $cardId . '" class="btn btn-primary">Order</button>';
                } else {
                    // Jika pengguna belum login, berikan pesan atau tautan untuk login dengan id yang unik
                    echo '<a style="display: none;" id="order' . $cardId . '" href="../login.php" class="btn btn-primary">Order</a>';
                }
                ?>
            </form>
            </div>
        </div>
        <?php 
        }
        ?>

      <?php
        $promoquery = mysqli_query($conn, "SELECT * FROM `menu promo`");

        while ($promo = mysqli_fetch_assoc($promoquery)) {
            $cardId = $promo['ID_promo']; // Menggunakan ID kartu sebagai basis untuk elemen yang unik
        ?>
        <div class="card" style="width: 17rem;">
            <img src="../img/<?php echo $promo['Gambar'] ?>" style="max-height: 150px;" alt="Gambar Menu" class="card-img-top">
            <div class="card-body">
                <!-- HTML -->
                <form action="prosespesanan.php" method="POST">
                <h5 class="card-title"><?php echo $promo['Nama_menu'] ?></h5>
                <button class="btn btn-primary" type="button" onclick="toggleDescription(<?php echo $cardId ?>)">Deskripsi</button>
                <p id="description<?php echo $cardId ?>" style="display: none;" class="card-text" ><?php echo $promo['Deskripsi'] ?></p>
                <p id="harga<?php echo $cardId ?>" style="display: none;" class="card-text" >Harga : Rp.<?php echo $promo['Harga'] ?></p>
                <label style="display: none;" for="quantity<?php echo $cardId ?>">Jumlah:</label>
                <input style="display: none;" type="number" id="quantity<?php echo $cardId ?>" name="quantity" value="1">
                <br/>

                <?php
                if (isset($_SESSION['ID_user'])) {
                // Hanya jika pengguna sudah login, tampilkan tombol "Order"
                echo '<button type="submit" style="display: none;" id="order' . $cardId . '" formaction="prosespesanan.php?id=' . $cardId . '" class="btn btn-primary">Order</button>';
                } else {
                    // Jika pengguna belum login, berikan pesan atau tautan untuk login dengan id yang unik
                    echo '<a style="display: none;" id="order' . $cardId . '" href="../login.php" class="btn btn-primary">Order</a>';
                }
                ?>
            </form>
            </div>
        </div>
        <?php 
        }
        ?>
      </ul>
      </div>
    </section>

    <section class="upcoming" data-aos="fade-up" style="background-image: url('../assets/images/black.webp');">
      <div class="container" data-aos="fade-up">
        <div class="flex-wrapper" data-aos="fade-up">
          <div class="title-wrapper" data-aos="fade-up">
          <h2 class="h2 section-title" data-aos="fade-up"><strong>Minuman dan Dessert</strong></h2>
          </div>
      </div>
      <br/>

      <ul class="foods-list" data-aos="fade-up">        
        <?php
        $minumanquery = mysqli_query($conn, "SELECT * FROM `menu minuman`");
        while ($minuman = mysqli_fetch_assoc($minumanquery)) {
            $cardId = $minuman['ID_minuman']; // Menggunakan ID kartu sebagai basis untuk elemen yang unik
        ?>
        <div class="card" style="width: 17rem;">
            <img src="../img/<?php echo $minuman['Gambar'] ?>" style="max-height: 150px;" alt="Gambar Menu" class="card-img-top">
            <div class="card-body">
                <!-- HTML -->
                <form action="prosespesanan.php" method="POST">
                <h5 class="card-title"><?php echo $minuman['Nama_menu'] ?></h5>
                <button class="btn btn-primary" type="button" onclick="toggleDescription(<?php echo $cardId ?>)">Deskripsi</button>
                <p id="description<?php echo $cardId ?>" style="display: none;" class="card-text" ><?php echo $minuman['Deskripsi'] ?></p>
                <p id="harga<?php echo $cardId ?>" style="display: none;" class="card-text" >Harga : Rp.<?php echo $minuman['Harga'] ?></p>
                <label style="display: none;" for="quantity<?php echo $cardId ?>">Jumlah:</label>
                <input style="display: none;" type="number" id="quantity<?php echo $cardId ?>" name="quantity" value="1">
                <br/>

                <?php
                if (isset($_SESSION['ID_user'])) {
                // Hanya jika pengguna sudah login, tampilkan tombol "Order"
                echo '<button type="submit" style="display: none;" id="order' . $cardId . '" formaction="prosespesanan.php?id=' . $cardId . '" class="btn btn-primary">Order</button>';
                } else {
                    // Jika pengguna belum login, berikan pesan atau tautan untuk login dengan id yang unik
                    echo '<a style="display: none;" id="order' . $cardId . '" href="../login.php" class="btn btn-primary">Order</a>';
                }
                ?>
            </form>
            </div>
        </div>
        <?php 
        }
        ?>

        <script>
        function toggleDescription(cardId) {
            var description = document.getElementById("description" + cardId);
            var harga = document.getElementById("harga" + cardId);
            var order = document.getElementById("order" + cardId);

            var quantityInput = document.getElementById("quantity" + cardId);
            var quantity = quantityInput.previousElementSibling;

            if (description.style.display === "none") {
                description.style.display = "block";
                harga.style.display = "block";
                order.style.display = "block";
                quantity.style.display = "block";
                quantityInput.style.display = "block";

            } else {
                description.style.display = "none";
                harga.style.display = "none";
                order.style.display = "none";
                cart.style.display = "none";
                quantityInput.style.display = "none";
            }
        }
        </script>

      </ul>
      </div>
    </section>

          <footer class="footer">

            <div class="footer-top">
              <div class="container">
        
                <div class="footer-brand-wrapper">
        
                <a href="#" class="logo">
                  <img src="../img/Logo restoran.png" alt="Logo Kito" style="max-width: 28%;">
                </a>
        
                  <ul class="footer-list">
        
                  <li>
                  <a href="<?php if (isset($_SESSION['ID_user'])) {
                          echo '../index.php?ID_user=' . $_SESSION['ID_user'];
                      } else { echo '../index.php';}?>" class="navbar-link">Home</a>
                  </li>
        
                    <li>
                      <a href="#" class="footer-link">Menu</a>
                    </li>
        
                    <li>
                    <a href="<?php if (isset($_SESSION['ID_user'])) {
                            echo '../aboutus.php?ID_user=' . $_SESSION['ID_user'];
                        } else { echo '../aboutus.php';}?>" class="navbar-link">About Us</a>
                    </li>
        
                  </ul>
        
                </div>
        
                <div class="divider"></div>
        
                <div class="quicklink-wrapper">
        
                  <ul class="quicklink-list">
        
                    <li>
                      <a href="../helpdesk.php" class="quicklink-link">Help center</a>
                    </li>
        
                  </ul>
        
                  <ul class="social-list">
        
                    <li>
                      <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                      </a>
                    </li>
        
                    <li>
                      <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                      </a>
                    </li>
        
                    <li>
                      <a href="#" class="social-link">
                        <ion-icon name="logo-pinterest"></ion-icon>
                      </a>
                    </li>
        
                    <li>
                      <a href="#" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                      </a>
                    </li>
        
                  </ul>
        
                </div>
        
              </div>
            </div>
        
            <div class="footer-bottom">
              <div class="container">
        
                <p class="copyright">
                  &copy; Salero Padang. All Rights Reserved
                </p>
        
                
              </div>
            </div>
        
          </footer>
        
    
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" data-aos="fade-up"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" data-aos="fade-up"></script>
    
          <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" data-aos="fade-up"></script>
          <script>
            AOS.init();
          </script>
    </article>
  </main>

  <script src="../assets/js/script.js" data-aos="fade-up"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" data-aos="fade-up"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" data-aos="fade-up"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" data-aos="fade-up"></script>
  <script>
    AOS.init();
    document.addEventListener("DOMContentLoaded", function () {
      const toggleButton = document.getElementById("toggle-nav");
      const navbar = document.querySelector(".navbar");
      const navIcon = document.getElementById("nav-icon");

      toggleButton.addEventListener("click", function () {
        navbar.classList.toggle("hidden");
        if (navbar.classList.contains("hidden")) {
          navIcon.setAttribute("name", "reorder-two");
        } else {
          navIcon.setAttribute("name", "close-outline");
        }
      });
    });

    document.addEventListener('DOMContentLoaded', function() {
      window.AOS.init();
      const toggleDescriptions = document.querySelectorAll('[data-toggle="description"]');
      toggleDescriptions.forEach((foodTitle) => {
        foodTitle.addEventListener('click', () => {
          const description = foodTitle.parentElement.nextElementSibling.querySelector('.food-description');
          if (description.style.display === 'none' || description.style.display === '') {
            description.style.display = 'block';
          } else {
            description.style.display = 'none';
          }
        });
      });

      const menuOpenBtn = document.querySelector('[data-menu-open-btn]');
      const navbar = document.querySelector('[data-navbar]');

      menuOpenBtn.addEventListener('click', () => {
        if (navbar.style.display === 'none' || navbar.style.display === '') {
          navbar.style.display = 'block';
        } else {
          navbar.style.display = 'none';
        }
      });
    });

    document.addEventListener("DOMContentLoaded", function () {
    const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");

    
    function addToCart() {
      const foodCard = this.parentElement.parentElement; 
      const foodName = foodCard.querySelector(".card-title").textContent; 
      console.log("Added to cart:", foodName);
    }
    addToCartButtons.forEach(function (button) {
      button.addEventListener("click", addToCart);
    });

  });
  
  </script>
</body>
</html>
