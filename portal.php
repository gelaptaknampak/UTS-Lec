<!DOCTYPE html>
<html lang="en">
<head>
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
    .hidden {
      display: none;
    }

    .service {
    background: #1c1c1c;
    background-size: cover;
    background-position: center;
    padding-block: var(--section-padding);
}
  .service-banner {
    position: relative;
    margin-bottom: 50px;
    max-width: max-content;
  }
  
  .service-banner img { width: 100%; }
  
  .service-btn {
    position: absolute;
    bottom: 0;
    right: 86px;
    background: var(--citrine);
    color: var(--rich-black-fogra-29);
    font-size: var(--fs-11);
    text-transform: uppercase;
    font-weight: var(--fw-500);
    letter-spacing: 5px;
    display: flex;
    align-items: center;
    gap: 5px;
    transform: rotate(0.25turn);
    transform-origin: bottom right;
    padding: 28px 35px;
    border-radius: 6px;
  }
  
  .service-btn ion-icon {
    font-size: 30px;
    transform: rotate(-0.25turn);
  }
  
  .service-subtitle {
    position: relative;
    color: var(--gainsboro);
    font-size: var(--fs-11);
    font-weight: var(--fw-500);
    text-transform: uppercase;
    letter-spacing: 1px;
    padding-left: 50px;
    margin-bottom: 10px;
  }
  
  .service-subtitle::before {
    content: "";
    position: absolute;
    top: 7px;
    left: 0;
    width: 40px;
    height: 3px;
    background: var(--citrine);
  }
  
  .service-title { margin-bottom: 20px; }
  
  .service-text,
  .service-card .card-text {
    color: var(--gray-x);
    font-size: var(--fs-9);
    font-weight: var(--fw-500);
    line-height: 1.8;
  }
  
  .service-text { margin-bottom: 40px; }
  
  .service-list > li:first-child {
    padding-bottom: 20px;
    border-bottom: 1px dashed hsla(0, 0%, 100%, 0.1);
    margin-bottom: 30px;
  }
  
  .service-card .card-icon {
    color: var(--white);
    width: 85px;
    height: 85px;
    display: grid;
    place-items: center;
    font-size: 40px;
    border-radius: 50%;
    outline: 1px dashed var(--citrine);
    outline-offset: 5px;
    margin: 5px;
    margin-bottom: 20px;
    transition: var(--transition-2);
  }
  
  .service-card:hover .card-icon { background: var(--citrine); }
  
  .service-card .card-title { margin-bottom: 10px; }
  
  .service-list > li:first-child { padding-bottom: 30px; }

  .service-card {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .service-card .card-icon { margin-bottom: 0; }

  .service-card .card-content { width: calc(100% - 115px); }
  .service-btn {
    right: -20px;
    padding: 40px 50px;
  }  

  .service-content { padding-inline: 40px; }

  .service .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 70px;
  }

  .service-content {
    padding-inline: 0;
    width: calc(100% - 470px);
  }

  .service-banner { margin-bottom: 0; }

  .service-btn { right: 111px; }
  .service-content { width: calc(100% - 700px); }

  .service-btn { right: -20px; }

  .service-list,
  .service-title { max-width: 480px; }

  </style>
</head>
<body id="top" style="background-color: cream;">

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="portal.php" class="logo">
        <img src="./assets/images/logo.svg" alt="Logo Kito">
      </a>

      <div class="header-actions">

        <button class="search-btn">
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <div class="lang-wrapper">
          <label for="language">
            <ion-icon name="globe-outline"></ion-icon>
          </label>

          <select name="language" id="language">
            <option value="en">EN</option>
            <option value="au">AU</option>
            <option value="ar">AR</option>
            <option value="tu">TU</option>
          </select>
        </div>

        <button class="btn btn-primary">Sign in</button>

      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="./index.html" class="logo">
            <img src="./assets/images/logo.svg" alt="Logo Kita">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="portal.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="menu.php" class="navbar-link">Menu</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Cart</a>
          </li>

          <li>
            <a href="aboutus.php" class="navbar-link">About Us</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Recomended</a>
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

  <main>
    <article>
        <section class="Banner" data-aos="fade-up">
        
            <div class="container" data-aos="fade-up">
    
              <div class="Banner-content" data-aos="fade-up">
    
                <p class="Banner-subtitle" data-aos="fade-up">Nama Website</p>
    
                <h1 class="h1 Banner-title" data-aos="fade-up">
                  Sajian <strong>Istimewa</strong> Dengan cita rasa tak terlupakan.
                </h1>
                <a href="menu.php">
                <button class="btn btn-primary" data-aos="fade-up">
                  <span>Beli Sekarang!</span>
                </button>
                </a>
              </div>
    
            </div>
          </section>
    
          <  <section class="service">
        <div class="container">
          <div class="service-banner">
            <figure data-aos="fade-up">
              <img src="./assets/images/service.png" alt="HD 4k resolution! only $3.99">
            </figure>
          </div>
          <div class="service-content">
            <p class="service-subtitle" data-aos="fade-up">Our Services</p>
            <h2 class="h2 service-title" data-aos="fade-up">Buy Your Favorite Padangnese Food</h2>
            <p class="service-text" data-aos="fade-up">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. There are many variations of
              passages of lorem Ipsum available, but the majority have suffered alteration in some injected humor.
            </p>
                <ul class="service-list">
    
                  <li>
                    <div class="service-card" data-aos="fade-up">
    
                      <div class="card-icon" data-aos="fade-up">
                        <ion-icon name="home"></ion-icon>
                      </div>
    
                      <div class="card-content" data-aos="fade-up">
                        <h3 class="h3 card-title">"Buy food from the comfort of your home</h3>
    
                        <p class="card-text" data-aos="fade-up">
                          Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                      </div>
    
                    </div>
                  </li>
    
                  <li>
                    <div class="service-card" data-aos="fade-up">
    
                      <div class="card-icon" data-aos="fade-up">
                        <ion-icon name="mail-open"></ion-icon>
                      </div>
    
                      <div class="card-content" data-aos="fade-up">
                        <h3 class="h3 card-title">Free Deliveries</h3>
    
                        <p class="card-text" data-aos="fade-up">
                          Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                      </div>
    
                    </div>
                  </li>
    
                </ul>
    
              </div>
    
            </div>
          </section>

          <footer class="footer">

            <div class="footer-top">
              <div class="container">
            
                <div class="footer-brand-wrapper">
            
                  <a href="./index.php" class="logo">
                    <img src="./assets/images/...." alt="Nama Web">
                  </a>
            
                  <ul class="footer-list">
            
                    <li>
                      <a href="./index.php" class="footer-link">Home</a>
                    </li>
            
                    <li>
                      <a href="#" class="footer-link">Menu</a>
                    </li>
            
                    <li>
                      <a href="#" class="footer-link">Cart</a>
                    </li>
            
                    <li>
                      <a href="#" class="footer-link">About Us</a>
                    </li>
            
                    <li>
                      <a href="#" class="footer-link">Recomended</a>
                    </li>
            
                  </ul>
            
                </div>
            
                <div class="divider"></div>
            
                <div class="quicklink-wrapper">
            
                  <ul class="quicklink-list">
            
                    <li>
                      <a href="#" class="quicklink-link">Faq</a>
                    </li>
            
                    <li>
                      <a href="#" class="quicklink-link">Help center</a>
                    </li>
            
                    <li>
                      <a href="#" class="quicklink-link">Terms of use</a>
                    </li>
            
                    <li>
                      <a href="#" class="quicklink-link">Privacy</a>
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
                  &copy; Nama web <a href="index.php">Nama Web</a>. All Rights Reserved
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
  </script>
</body>
</html>
