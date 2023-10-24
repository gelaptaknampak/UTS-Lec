<?php
  require "koneksi.php";
  $query = "SELECT * FROM userregister WHERE ID_user";
  if (isset($_SESSION['ID_user'])) {
      $ID_user = $_SESSION['ID_user'];
  } 
?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salero Padang</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
        .aboutus{
        padding: 70px 0;
        justify-content: center;
        align-items: center; 
        background: #4a4a4a;
        }

        .team-item {
        background: #222222;
        text-align: center;
        margin: 20px 0;
        padding: 50px 20px 40px 20px;
        border-radius: 8px 8px;
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        -ms-transition: all 0.25s ease-in-out;
        -o-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-in-out;
        }

        .team-item:hover {
        background: #d21f3c;
        color: white;
        }

        .team-item h3 {
        margin: 20px 0 1px 0 !important;
        color: #454545;
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
        transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        -webkit-transition: all 0.25s ease-in-out;
        }

        .section-title {
        color: white;
        }

        .section-subtitle {
        white-space: pre-line;
        color: white;
        }

        .team-item:hover h3 {
        color: #ddd;
        }

        .team-info {
        display: block;
        margin-bottom: 0;
        }

        .team-info p {
        color: #acacac;
        font-style: italic;
        }

        .team-info::after {
        background: #008aff;
        background: -webkit-linear-gradient(135deg, #6b02ff 0%, #985bef 100%);
        background: -o-linear-gradient(bottom right, #6b02ff, #985bef);
        background: -moz-linear-gradient(bottom right, #008aff, #1ad2fd);
        background: linear-gradient(135deg, #6b02ff 0%, #985bef 100%);
        display: inline-block;
        vertical-align: middle;
        content: "";
        width: 50px;
        height: 3px;
        }

        .team-img {
        max-width: 300px;
        width: 100%;
        height: 100%;
        max-height: 300px;
        padding: 6px 6px;
        border-radius: 50%;
        margin-left: 20px;
        }

        @media screen and (max-width: 720px) {
          .team-img {
            max-width: 100px;
            width: 80px;
            height: 80px;
            max-height: 100px;
            padding: 6px 6px;
            border-radius: 50%;
            }
        }
        
        @media screen and (min-width: 740px) and (max-width: 1024px) {
          .team-img {
            max-width: 100px;
            width: 90px;
            height: 90px;
            max-height: 100px;
            padding: 6px 6px;
            border-radius: 50%;
            }
        }

        ul.team-icon {
        margin-top: 25px;
        }

        ul.team-icon li {
        display: inline-block;
        margin: 0 3px;
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        -ms-transition: all 0.25s ease-in-out;
        -o-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-in-out;
        }

        ul.team-icon li a {
        margin: 0;
        display: inline-block;
        padding: 8px 8px;
        width: 34px;
        height: 34px;
        font-size: 18px;
        line-height: 18px;
        background-color: #fff;
        border-radius: 50%;
        color: #fff;
        }

        .team-icon li a:hover {
        color: #dedede;
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        -ms-transition: all 0.25s ease-in-out;
        -o-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-inout;
        }

        .team-item {
        display: inline-block;
}
  </style>
</head>

<body>
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
          <a href="portal.php" class="logo">
            <img src="./img/Logo restoran.png" alt="Logo Kita" style="max-width: 29%;">
          </a>
          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>
        <ul class="navbar-list">
          <li>
          <a href="<?php if (isset($_SESSION['ID_user'])) {
                  echo './index.php?ID_user=' . $_SESSION['ID_user'];
              } else { echo './index.php';}?>" class="navbar-link">Home</a>
          </li>
          <li>
              <a href="<?php if (isset($_SESSION['ID_user'])) {
                  echo 'User/menu.php?ID_user=' . $_SESSION['ID_user'];
              } else { echo './User/menu.php';}?>" class="navbar-link">Menu</a>
          </li>
          <li>
            <a href="#" class="navbar-link">About Us</a>
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

  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <section class="aboutus" data-aos="fade-up">
    <div class="container">
      <div class="row">
      <div class="container">
        <div class="col-md-12 text-center">
          <h2 class="section-title"><strong>Our Team</strong></h2>
          <p class="section-subtitle">This is our Team who've been working on "Salero Padang".</p>
        </div>
      </div>
        
        <div class="col-sm-4 text-center">
          <div class="team-item">
          <img src="./assets/images/kucing.jpg" class="team-img img-fluid" alt="Vincent" />
            <h3 style="color: white;">Vincent Kurniawan</h3>
            <div class="team-info">
              <p style="color: white;">Frontend-Dev</p>
            </div>
            <p style="color: white;">Vincent is working as a frontend-dev in this project.</p>
          </div>
        </div>

        <div class="col-sm-4 text-center">
          <div class="team-item">
          <img src="./assets/images/inikucing.jpeg" class="team-img img-fluid" alt="Ari" />
            <h3 style="color: white;">Ari Maulana Hadijaya</h3>
            <div class="team-info">
              <p style="color: white;">Project Manager</p>
            </div>
            <p style="color: white;">Ari is working as a Project Manager in this project.</p>
          </div>
        </div>
        <div class="col-sm-4 text-center">
          <div class="team-item">
          <img src="./assets/images/oyen.jpg" class="team-img img-fluid" alt="Alvin" />
            <h3 style="color: white;"> Faturachman Al-Kahfi</h3>
            <div class="team-info">
              <p style="color: white;">Frontend-Dev</p>
            </div>
            <p style="color: white;">Kahfi is working as a frontend-dev in this project.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <footer class="footer">

<div class="footer-top">
  <div class="container">

    <div class="footer-brand-wrapper">

      <a href="./index.php" class="logo">
        <img src="./img/Logo restoran.png" alt="Nama Web" style="max-width: 29%;">
      </a>

      <ul class="footer-list">

      <li>
          <a href="<?php if (isset($_SESSION['ID_user'])) {
                  echo './index.php?ID_user=' . $_SESSION['ID_user'];
              } else { echo './index.php';}?>" class="navbar-link">Home</a>
          </li>

        <li>
          <a href="#" class="footer-link">Menu</a>
        </li>

        <li>
          <a href="#" class="footer-link">About Us</a>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
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
