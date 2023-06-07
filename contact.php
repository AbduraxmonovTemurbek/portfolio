<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // <!-- Script shaxsan @WebKoderUz ga tegishli va @SupperCoderUz tg kanalida tarqatildi manba bilan olamiz -->
    $API_KEY = "5577640808:AAHMWf8Y-lvJ5ZkioEzAvF1HSqPv-CE48io"; // habar yuboriladigan bot tokeni
    $admin = 998588038; // xabarni qabul qiladigan admin ID si

    $text = urlencode("Xabar keldi.\n\nIsmi: $name\n\nEmail: $email\n\nMavzu: $subject\n\nXabari: $message");
    $url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
    file_get_contents($url);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <title>Temur coder</title>

  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><img src="assets/img/logo.png" class="img-fluid" alt=""> <a href="index.html">CODERS</a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Asosiy</a></li>
          <li><a class="nav-link scrollto" href="#about">Men haqimda</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Narxlar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Xurmatli '<?php echo $name; ?>'. Xabaringiz yuborildi</h2>
          <p class="animate__animated fanimate__adeInUp">Siz biron narsani orzu qildingizmi? Demak bu endi orzu emas, unutmang inson ishongan narsasiga albatta erishadi!</p>
          <a href="https://suppercoders.uz" target="_blank" class="btn-get-started animate__animated animate__fadeInUp scrollto">Asosiy sahifa</a>
        </div>
      </div>
    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>
  </section>
  <main id="main">
    <section id="about" class="about">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Men Haqimda</h2>
          <p>Ismim Temurbek</p>
        </div>
        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              Men 2006-yil 18-noyabr kuni Qashqadaryo viloyatida tug'ilganman. Hozirda men IT sohasini chuqur o'rganib kelmoqdaman.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Logotip,</li>
              <li><i class="ri-check-double-line"></i> Web-Sayt va</li>
              <li><i class="ri-check-double-line"></i> Telegram Bot yarata olaman</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Men IT sohasini bundan 3 yil oldin umuman nima ekanligini bilmas edim.
              Keyinchalik men internetdan onlayn darslarni o'rgana boshladim.
              Va hozirda esa men dasturlashni chuqur o'rganish uchun o'quv markalarda o'qimoqdaman.</p>
            <a href="https://t.me/The_Temurbek" class="btn-learn-more">Telegram</a>
          </div>
        </div>
      </div>
    </section>

    <section id="cta" class="cta">
      <div class="container">
        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Xizmatlarga Buyurtma Berish</h3>
            <p>Siz menga biron loyiha buyurtma bersangiz men uni juda oz fursatda va sifatli qilib yaratib beraman. Hozirda men faqat mukammal telegram bot, web-sayt va biznesingiz uchun logotip yaratib bera olaman.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://t.me/The_Temurbek" target="_blank">Telegram orqali bog'lanish</a>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Portfolio</h2>
          <p>Kichik galereya</p>
        </div>
        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
        <div class="row portfolio-container" data-aos="fade-up">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/design.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/design.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/web-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/web-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/images.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/images.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section id="pricing" class="pricing">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Narxlar</h2>
          <p>Loyihalarimiz narxlari bilan tanishing</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in">
              <h3>Logotip</h3>
              <h4><sup>so'm</sup>15 000<span></span></h4>
              <ul>
                <li>Turini farqi yo'q</li>
                <li>Yuqori darajadagi sifat</li>
                <li>Asl va yagona nusxasi</li>
                <li class="na">Mualliflik xuquqi</li>
                <li class="na">Va yana boshqa materiallar</li>
              </ul>
              <div class="btn-wrap">
                <a href="https://t.me/WebKoderUz" class="btn-buy">Buyurtma Berish</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Web-Sayt</h3>
              <h4><sup>so'm</sup>150 000<span></span></h4>
              <ul>
                <li>Frontend qismi</li>
                <li>0 dan yoziladi</li>
                <li>Moslashish tizimi</li>
                <li>Domen nomi</li>
                <li class="na">Qidiruv tizimiga joylash</li>
              </ul>
              <div class="btn-wrap">
                <a href="https://t.me/WebKoderUz" class="btn-buy">Buyurtma Berish</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Telegram Bot</h3>
              <h4><sup>so'm</sup>100 000<span></span></h4>
              <ul>
                <li>PHP tili yordamida</li>
                <li>Mukammal tizim</li>
                <li>Hosting</li>
                <li>Ishga tushuriberish</li>
                <li>Mukammal admin panel</li>
              </ul>
              <div class="btn-wrap">
                <a href="https://t.me/WebKoderUz" class="btn-buy">Buyurtma Berish</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span class="advanced">Web-Sayt</span>
              <h3>SEO</h3>
              <h4><sup>so'm</sup>30 000<span></span></h4>
              <ul>
                <li>Web-Saytni google qidiruv tizimida chiqishini ta'minlash</li>
                <li>Qidiruvda to'gri ma'lumotlarni chiqarish</li>
                <li>Qo'shimcha sozlamalar</li>
                <li>Va yana boshqa muammolar</li>
              </ul>
              <div class="btn-wrap">
                <a href="https://t.me/WebKoderUz" class="btn-buy">Buyurtma Berish</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section id="faq" class="faq">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>T.S.S</h2>
          <p>TEZ-TEZ SO'RALADIGAN SAVOLLAR</p>
        </div>
        <ul class="faq-list">
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Buyurtma berish qanday shaklda bo'ladi?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Albatta. Buyurtma berish web-sayti yoki <a href="https://t.me/The_Temurbek">adminstratoriga</a> murojaat qilasiz buyurma haqida ma'lumot berasiz va ma'lum muddat ichida buyurtma bajariladi.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Berilgan buyurtmadan pul ishlasa bo'ladimi?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Albatta. Buyurtma bajarilgan sizga buyurtmaning to'liq holatdagi fayllari beriladi. Ishga tushurilganda esa reklama orqali yoki shu web-sayt fayllarini boshqalarga sotib daromad ko'rishingiz mumkin.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <footer id="footer">
    <div class="container">
      <h3>Temur coder</h3>
      <p>Portfolio va pullik xizmatlar haqidagi web-sayt.</p>
      <!-- <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
      <div class="copyright">
        &copy; Loyiha <strong><span>Temur coder</span></strong>. Barcha Huquqlar ximoya ostida.
      </div>
      <div class="credits">
        Yaratuvchi <a href="https://t.me/The_Temurbek">Egamov Azizbek</a>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>