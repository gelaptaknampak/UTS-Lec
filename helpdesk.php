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
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
        .aboutus{
        padding: 70px 0;
        justify-content: center;
        align-items: center; 
        background: #253da1;
        }

        .team-item {
        background: #acacac ;
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
        background: rgba(212, 212, 255, 0.5); 
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
        margin-left: 15px;
        margin-right: 15px;
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

        .Banner {
        background: url("./assets/images/help.jpg") no-repeat;
        background-size: cover;
        background-position: center;
        min-height: 750px;
        height: 100vh;
        max-height: 1000px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding-block: var(--section-padding);
        }

        .Banner-content { margin-top: 60px; }

        .Banner-subtitle {
        color: #253da1;
        font-size: var(--fs-4);
        font-weight: var(--fw-700);
        margin-bottom: 10px;
        }

        .Banner-title { margin-bottom: 30px; }

        .Banner-title > strong {
        color: #253da1;
        }

        .food-card .card-banner:hover { box-shadow: 0 1px 2px hsla(236, 92%, 59%, 0.5); }

        .food-card .card-banner:hover::after { background: hsla(244, 94%, 55%, 0.05); }
  </style>
</head>
<header class="header" data-header>
    <div class="container">
      <div class="overlay" data-overlay></div>
      <a href="aboutus.php" class="logo">
        <img src="./img/Logo restoran.png" alt="Logo Kito" style="max-width: 28%;">
      </a>
      <div class="header-actions">
      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>
      <nav class="navbar" data-navbar>
        <div class="navbar-top">
          <a href="portal.php" class="logo">
            <img src="./assets/images/....." alt="Logo Kita">
          </a>
          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>
        <ul class="navbar-list">
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
            <a href="aboutus.php" class="navbar-link">About Us</a>
          </li>
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
<body>
<section class="Banner" data-aos="fade-up">
        
        <div class="container" data-aos="fade-up">

          <div class="Banner-content" data-aos="fade-up">

            <p class="Banner-subtitle" data-aos="fade-up">Salero Padang</p>

            <h1 class="h1 Banner-title" data-aos="fade-up">
              Butuh <strong>Bantuan</strong> Cek Contact Person kami dibawah ini
            </h1>
            
          </div>

        </div>
      </section>

      <section class="aboutus" data-aos="fade-up">
        <div class="container">
          <div class="row">
          <div class="container">
            <div class="col-md-12 text-center">
              <h2 class="section-title"><strong>Help Desk</strong></h2>
              <p class="section-subtitle">This is our Team who've been working on "Nama Website".</p>
            </div>
          </div>
            

            <div class="col-sm-4 text-center">
              <a href="https://api.whatsapp.com/send?phone=6281249376122" target="_blank">
                <div class="team-item">
                  <img src="./assets/images/getss.jpg" class="team-img img-fluid" alt="Started" />
                  <h3 style="color: white;">Getting Started</h3>
                  <div class="team-info">
                    <p style="color: white;">Get your account set-up</p>
                    <p style="color: white;">Contact Person: Vincent</p>
                  </div>
                </div>
              </a>
            </div>

    
            <div class="col-sm-4 text-center">
              <a href="https://api.whatsapp.com/send?phone=6282261906588" target="_blank">
              <div class="team-item">
                <img src="./assets/images/acc.png" class="team-img img-fluid" alt="Management" />
                <h3 style="color: white;">Account Management</h3>
                <div class="team-info">
                  <p style="color: white;">All info you need to manage your account</p>
                  <p style="color: white;">Contact Person: Ari</p>
                </div>

              </div>
              </a>
            </div>
            <div class="col-sm-4 text-center">
              <a href="https://api.whatsapp.com/send?phone=6281280838004" target="_blank">
              <div class="team-item">
                <img src="./assets/images/trob.png" class="team-img img-fluid" alt="Alvin" />
                <h3 style="color: white;"> Report Troubles</h3>
                <div class="team-info">
                  <p style="color: white;">Reports your Troubleshooting here</p>
                  <p style="color: white;">Contact Person: Alvin</p>
                </div>
               
              </div>
              </a>
            </div>
          </div>
        </div>
      </section>
  
  <footer class="footer">

<div class="footer-top">
  <div class="container">

    <div class="footer-brand-wrapper">

      <a href="./index.php" class="logo">
        <img src="./img/Logo restoran.png" alt="Nama Web" style="max-width: 28%
        ;">
      </a>

    </div>

    <div class="divider"></div>

    <div class="quicklink-wrapper">

      <ul class="quicklink-list">

        <li>
          <a href="#" class="quicklink-link">Help center</a>
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
