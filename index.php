<?php
  require "koneksi.php";
  $query = "SELECT * FROM userregister WHERE ID_user";
  if (isset($_SESSION['ID_user'])) {
      $ID_user = $_SESSION['ID_user'];
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salero Padang</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body id="top" style="background-color: cream;">

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="./" class="logo">
        <img src="img/Logo restoran.png" alt="Logo Kito" style="max-width: 28%;">
      </a>

      <div class="header-actions">

        <?php
          if (isset($_SESSION['ID_user'])) {
              $userID = $_SESSION['ID_user'];
              echo '<a href="logout.php"><button class="btn btn-primary" data-aos="fade-down">Logout</button></a>';
          } else {
              // Pengguna belum login
              echo '<a href="login.php"><button class="btn btn-primary" data-aos="fade-down">Login</button></a>';
          }
        ?>

      </div>
      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="./img/Logo restoran.png" alt="Logo Kita" style="max-width: 29%;">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li>
              <a href="<?php if (isset($_SESSION['ID_user'])) {
                  echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
              } else { echo './User/menu.php';}?>" class="navbar-link">Menu</a>
          </li>

          <li>
          <a href="<?php if (isset($_SESSION['ID_user'])) {
                  echo './aboutus.php?ID_user=' . $_SESSION['ID_user'];
              } else { echo './aboutus.php';}?>" class="navbar-link">About Us</a>
          </li>

          <li>
            <a href="./User/pesanan.php" class="navbar-link">Order</a>
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

            <a href="<?php if (isset($_SESSION['ID_user'])) {
                  echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
              } else { echo './User/menu.php';}?>" class="navbar-link"><button class="btn btn-primary" data-aos="fade-up">
              <span>Beli Sekarang!</span>
            </button></a>

          </div>

        </div>
      </section>
      
    
          <section class="upcoming" data-aos="fade-up" style="background-image: url('./assets/images/darkred.jpg');">
            <div class="container" data-aos="fade-up">
              <div class="flex-wrapper" data-aos="fade-up">
                <div class="title-wrapper" data-aos="fade-up">
                  <p class="section-subtitle" data-aos="fade-up"><strong>Menu Pemesanan</strong></p>
                  <h2 class="h2 section-title" data-aos="fade-up"><strong>Menu Makanan Hits!!</strong></h2>
                </div>
                <ul class="filter-list" data-aos="fade-up">
                  <li data-aos="fade-up">
                    <button class="filter-btn" data-aos="fade-up">Rating Tertinggi</button>
                  </li>
                  <li data-aos="fade-up">
                    <button class="filter-btn" data-aos="fade-up">Favorit</button>
                  </li>
                </ul>
              </div>
          
              <ul class="foods-list" data-aos="fade-up">
                <li data-aos="zoom-in">
                    <div class="food-card">
                        <figure class="card-banner">
                          <img src="./assets/images/Rendang.jpeg" alt="Foto Rendang">
                        </figure>
                        <div class="title-wrapper">
                          <h3 style="cursor: pointer;" class="card-title" data-toggle="description">Rendang</h3>
                        </div>
                        <div class="card-meta">
                          <p class="food-description" style="display: none;">
                            This is a delicious Indonesian dish known for its rich and tender coconut beef stew.
                            <br />
                        <strong>Harga</strong>: Rp. 18.000
                
                          <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                          </p>
                        </div>
                      </div>
                      
                </li>
                <li data-aos="zoom-in">
                  <div class="food-card">
                    <figure class="card-banner">
                      <img src="./assets/images/Dendeng.jpg" alt="Food">
                    </figure>
                    <div class="title-wrapper">
                      <h3 style="cursor: pointer;" class="card-title" data-toggle="description">Dendeng</h3>
                    </div>
                    <div class="card-meta">
                      <p class="food-description" style="display: none;">
                        Dendeng is a sweet and savory dried beef jerky from Indonesia.
                        <br />
                        <strong>Harga</strong>: Rp. 17.500
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                      </p>
                    </div>
                  </div>
                </li>
                
                
                <li data-aos="zoom-in">
                  <div class="food-card">
                    <figure class="card-banner">
                      <img src="./assets/images/Sate.jpg.crdownload" alt="Foods">
                    </figure>
                    <div class="title-wrapper">
                      <h3 style="cursor: pointer;" class="card-title" data-toggle="description">Sate Padang</h3>
                    </div>
                    <div class="card-meta">
                      <p class="food-description" style="display: none;">
                        Sate Padang is a famous Indonesian dish consisting of skewered and grilled meat.
                        <br />
                        <strong>Harga</strong>: Rp. 21.000
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                      </p>
                    </div>
                  </div>
                </li>
          
                <li data-aos="zoom-in">
                  <div class="food-card">
                    <figure class="card-banner">
                      <img src="./assets/images/gulai tunjang.webp" alt="Foods">
                    </figure>
                    <div class="title-wrapper">
                      <h3 style="cursor: pointer;" class="card-title" data-toggle="description">Gulai tunjang</h3>
                    </div>
                    <div class="card-meta">
                      <p class="food-description" style="display: none;">
                      "Gulai Tunjang" is a flavorful and spicy beef tendon curry, often cooked with a rich and aromatic coconut milk-based sauce.
                        <br />
                        <strong>Harga</strong>: Rp. 15.000
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                      </p>                     
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          
          
          <section class="upcoming" data-aos="fade-up" style="background-image: url('./assets/images/black.webp');">
            <div class="container" data-aos="fade-up">
              <div class="flex-wrapper" data-aos="fade-up">
                <div class="title-wrapper" data-aos="fade-up">
                  <p class="section-subtitle" data-aos="fade-up"><strong>Menu Pemesanan</strong></p>
                  <h2 class="h2 section-title" data-aos="fade-up"><strong>Hemat Akhir Bulan</strong></h2>
                </div>
                <ul class="filter-list" data-aos="fade-up">
                  <li data-aos="fade-up">
                    <button class="filter-btn" data-aos="fade-up">Rating Tertinggi</button>
                  </li>
                  <li data-aos="fade-up">
                    <button class="filter-btn" data-aos="fade-up">Favorit</button>
                  </li>
                </ul>
              </div>
          
              <ul class="foods-list" data-aos="fade-up">
                <li data-aos="zoom-in">
                  <div class="food-card">
                    <figure class="card-banner">
                      <img src="./assets/images/Soto.jpg" alt="">
                    </figure>
                    <div class="title-wrapper">
                      <h3 style="cursor: pointer;" class="card-title" data-toggle="description">Soto Padang</h3>
                    </div>
                    <div class="card-meta">
                      <p class="food-description" style="display: none;">
                        Soto Padang is a traditional Indonesian soup from Padang, West Sumatra.
                        <br />
                        <strong>Harga</strong>: Rp. 15.000
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                      </p>
                     
                    </div>
                  </div>
                </li>
                <li data-aos="zoom-in">
                  <div class="food-card">
                    <figure class="card-banner">
                      <img src="./assets/images/telur dadar padang.png" alt="Foods">
                    </figure>
                    <div class="title-wrapper">
                      <h3 style="cursor: pointer;" class="card-title" data-toggle="description">Telur krispi</h3>
                    </div>
                    <div class="card-meta">
                      <p class="food-description" style="display: none;">
                      Telur Padang" is a classic Indonesian dish that translates to "Padang-style eggs." It features hard-boiled eggs that are typically deep-fried until the outer layer is crispy, and then served with a rich and flavorful Padang-style sauce.
                        <br />
                        <strong>Harga</strong>: Rp. 10.000
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                      </p>
                     
                    </div>
                  </div>
                </li>
          
                <li data-aos="zoom-in">
                  <div class="food-card">
                    <figure class="card-banner">
                      <img src="./assets/images/teri sambal hijau.jpg" alt="Foods">
                    </figure>
                    <div class="title-wrapper">
                      <h3 style="cursor: pointer;" class="card-title" data-toggle="description">Teri Sambal Hijau</h3>
                    </div>
                    <div class="card-meta">
                      <p class="food-description" style="display: none;">
                      "Teri Sambal Hijau Padang" is a delectable Indonesian dish consisting of green chili sambal (spicy sauce) paired with anchovies. 
                        <br />
                        <strong>Harga</strong>: Rp. 10.000
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                      </p>
                     
                    </div>
                  </div>
                </li>
          
                <li data-aos="zoom-in">
                  <div class="food-card">
                    <figure class="card-banner">
                      <img src="./assets/images/gulai daun singkong.jpg" alt="Foods">
                    </figure>
                    <div class="title-wrapper">
                      <h3 style="cursor: pointer;" class="card-title" data-toggle="description">Gulai Daun Singkong</h3>
                    </div>
                    <div class="card-meta">
                      <p class="food-description" style="display: none;">
                      This dish features cassava leaves cooked in a rich and aromatic coconut milk-based curry.
                        <br />
                        <strong>Harga</strong>: Rp. 5.000
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                      </p>
                      
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          
          <section class="upcoming" data-aos="fade-up" style="background-image: url('./assets/images/darkred.jpg');">
            <div class="container" data-aos="fade-up">
              <div class="flex-wrapper" data-aos="fade-up">
                <div class="title-wrapper" data-aos="fade-up">
                  <p class="section-subtitle" data-aos="fade-up"><strong>Menu Pemesanan</strong></p>
                  <h2 class="h2 section-title" data-aos="fade-up"><strong>Sweet Section</strong></h2>
                </div>
                <ul class="filter-list" data-aos="fade-up">
                  <li data-aos="fade-up">
                    <button class="filter-btn" data-aos="fade-up">Rating Tertinggi</button>
                  </li>
                  <li data-aos="fade-up">
                    <button class="filter-btn" data-aos="fade-up">Favorit</button>
                  </li>
                </ul>
              </div>
          
              <ul class="foods-list" data-aos="fade-up">
                
                <li data-aos="zoom-in">
                  <div class="food-card">
                    <figure class="card-banner">
                      <img src="./assets/images/Ampiang dadiah.jpg" alt="">
                    </figure>
                    <div class="title-wrapper">
                      <h3 style="cursor: pointer;" class="card-title" data-toggle="description">Ampiang Dadiah</h3>
                    </div>
                    <div class="card-meta">
                      <p class="food-description" style="display: none;">
                      "Ampiang Dadiah" is a traditional Indonesian dessert with a delightful and creamy character. It consists of freshly made, smooth and slightly tangy yogurt."
                        <br />
                        <strong>Harga</strong>: Rp. 15.000
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                      </p>
                      
                    </div>
                  </div>
                </li>
          
                <li data-aos="zoom-in">
                  <div class="food-card">
                    <figure class="card-banner">
                      <img src="./assets/images/kopyot.webp" alt="Es Kopyor">
                    </figure>
                    <div class="title-wrapper">
                      <h3 style="cursor: pointer;" class="card-title" data-toggle="description">Es Kopyor</h3>
                    </div>
                    <div class="card-meta">
                      <p class="food-description" style="display: none;">
                        "Es kopyor, a tropical delight, features refreshing coconut water with tender coconut flesh."
                        <br />
                        <strong>Harga</strong>: Rp. 9.000
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                      </p>
                     
                    </div>
                  </div>
                </li>
                
                <li data-aos="zoom-in">
                  <div class="food-card">
                    <figure class="card-banner">
                      <img src="./assets/images/baum.jpg" alt="BaumKuchen">
                    </figure>
                    <div class="title-wrapper">
                      <h3 style="cursor: pointer;" class="card-title" data-toggle="description">BaumKuchen</h3>
                    </div>
                    <div class="card-meta">
                      <p class="food-description" style="display: none;">
                        "Baumkuchen, a German tree cake, boasts layers of sweet, golden-brown perfection."
                        <br />
                        <strong>Harga</strong>: Rp. 12.000
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                     </p>
                      
                    </div>
                  </div>
                </li>
                
                <li data-aos="zoom-in">
                <div class="food-card">
                    <figure class="card-banner">
                      <img src="./assets/images/campur.jpg" alt="BaumKuchen">
                    </figure>
                    <div class="title-wrapper">
                      <h3 style="cursor: pointer;" class="card-title" data-toggle="description">Es Campur</h3>
                    </div>
                    <div class="card-meta">
                      <p class="food-description" style="display: none;">
                        "Es campur, an Indonesian mixed ice dessert, is a delightful blend of flavors and textures."
                        <br />
                        <strong>Harga</strong>: Rp. 10.000
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                              echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                          } else { echo './User/menu.php';}?>" class="navbar-link">Beli Sekarang!</a>
                      </p>
                      
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </section>

          <footer class="footer">

            <div class="footer-top">
              <div class="container">
        
                <div class="footer-brand-wrapper">
        
                <a href="#" class="logo">
                  <img src="./img/Logo restoran.png" alt="Logo" style="max-width: 28%;">
                </a>
        
                  <ul class="footer-list">
        
                    <li>
                      <a href="#" class="footer-link">Home</a>
                    </li>
        
                    <li>
                        <a href="<?php if (isset($_SESSION['ID_user'])) {
                            echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
                        } else { echo './User/menu.php';}?>" class="navbar-link">Menu</a>
                    </li>
        
                    <li>
                    <a href="<?php if (isset($_SESSION['ID_user'])) {
                            echo './aboutus.php?ID_user=' . $_SESSION['ID_user'];
                        } else { echo './aboutus.php';}?>" class="navbar-link">About Us</a>
                    </li>
                  
                  </ul>
        
                </div>
        
                <div class="divider"></div>
        
                <div class="quicklink-wrapper">
        
                  <ul class="quicklink-list">
        
                    <li>
                      <a href="helpdesk.php" class="quicklink-link">Help center</a>
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
        
    
    
          <script src="./assets/js/script.js" data-aos="fade-up"></script>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" data-aos="fade-up"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" data-aos="fade-up"></script>
    
          <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" data-aos="fade-up"></script>
          <script>
            AOS.init();
          </script>
    </article>
  </main>

  <script src="./assets/js/script.js" data-aos="fade-up"></script>
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
