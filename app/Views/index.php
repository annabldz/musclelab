<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muscle Lab</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

  <style>
  body {font-family: 'Poppins', sans-serif;margin: 0;padding: 0;background: #190019;}

    #facility {background: linear-gradient(135deg, #000000 0%, #1A1A1A 40%, #A000FF 100%); }
    #facility h2 {font-weight: 700; color: #fff;}
    #facility p.text-muted {font-size: 1.5rem; color: #fff !important;}

    #why-choose {background: linear-gradient(135deg, #000000 0%, #1A1A1A 40%);}
    #why-choose .ye {padding: 80px 20px; max-width: 1200px; margin: auto; }
    #why-choose h2 {font-weight: 700; font-size: 3rem; margin-bottom: 15px; position: relative; color: #fff;}
    #why-choose h2::after {content: ''; display: block;width: 200px; height: 4px; background: linear-gradient(135deg, #A000FF 40%, #fff 40%); animation: gradientShift 12s ease infinite; margin: 12px auto 0; border-radius: 2px;}
    #why-choose .why-text p {font-size: 1.2rem; color: #fff;max-width: 700px; margin: auto;}
    #why-choose .why-cards {display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;}
    #why-choose .why-card {background: #fff; border-radius: 1rem; padding: 30px 20px; box-shadow: 0 6px 15px rgba(0,0,0,0.1); text-align: center; transition: all 0.4s ease; opacity: 0; transform: translateY(30px); max-width: 350px; flex: 1;}
    #why-choose .why-card.show {opacity: 1; transform: translateY(0);}
    #why-choose .why-card:hover {transform: translateY(-10px); box-shadow: 0 10px 20px rgba(0,0,0,0.15);}
    #why-choose .why-card h5 {font-weight: 600; margin-bottom: 10px; font-size: 1.5rem;}
    #why-choose .why-card p {font-size: 1.2rem; color: #666;}
    @media (max-width: 900px) {
    #why-choose .why-cards {grid-template-columns: 1fr;}}

    .swiperMain { width: 100%; max-width: 900px; margin: 0 auto; border-radius: 1rem; overflow: hidden; }
    .swiperMain .swiper-slide { display: flex; align-items: center; justify-content: center; }
    .swiperMain .swiper-slide .card { border-radius: 1rem; overflow: hidden; width: 100%; }
    .swiperMain .swiper-slide img { width: 100%; height: 500px; object-fit: cover; border-radius: 1rem; }

    .swiperThumbs { width: 100%; max-width: 900px; margin: 0 auto; padding: 10px 0; }
    .swiperThumbs .swiper-slide { width: 110px; height: 85px; opacity: 0.5; cursor: pointer; transition: all 0.3s ease; border-radius: 0.6rem; overflow: hidden; border: 2px solid transparent; }
    .swiperThumbs .swiper-slide img { width: 100%; height: 100%; object-fit: cover; border-radius: 0.5rem; }
    .swiperThumbs .swiper-slide-thumb-active { opacity: 1; border-color: #A000FF; transform: scale(1.08); box-shadow: 0 4px 15px rgba(160, 0, 255, 0.5); }

    @media (max-width: 900px) {
        .swiperMain .swiper-slide img { height: 350px; }
        .swiperThumbs .swiper-slide { width: 90px; height: 70px; }
    }

    @media (max-width: 480px) {
        .swiperMain .swiper-slide img { height: 280px; }
        .swiperThumbs .swiper-slide { width: 70px; height: 55px; }
    }

    .app-section {background: linear-gradient(135deg, #000000 0%, #1A1A1A 40%);}
    .app-section .ye {padding: 80px 20px; max-width: 1200px; margin: auto; }
    .app-section .app-container {display: flex; align-items: center; justify-content: space-between; max-width: 1100px; margin: auto; gap: 20px; flex-wrap: wrap;}
    .app-section .app-text {flex: 1; min-width: 280px; text-align: left; padding-left: 100px; padding-right: 30px;}
    .app-section .app-text h2 {font-size: 2.4rem; margin-bottom: 20px; font-weight: 700; color: #fff;}
    .app-section .app-text ul {list-style: none; padding: 0; margin-bottom: 30px;}
    .app-section .app-text ul li {margin-bottom: 14px; font-size: 1.2rem; color: #fff;}
    .app-section .download-buttons {display: flex; gap: 15px; flex-wrap: wrap;}
    .app-section .download-buttons a img {height: 60px; transition: transform 0.3s;}
    .app-section .download-buttons a img:hover {transform: scale(1.08);}
    .app-section .app-image {flex: 1; display: flex; justify-content: center;}
    .app-section .app-image img {max-width: 280px; max-height: 400px; border-radius: 20px; box-shadow: 0 6px 20px rgba(0,0,0,0.15);}
    .app-section .app-text ul li {margin-bottom: 14px; font-size: 1.2rem; display: flex; align-items: center; gap: 10px; color: #fff}
    .app-section .app-text ul li i {font-size: 1.3rem; color: #A000FF;}
    @media (max-width: 768px) {
    .app-section .app-container {flex-direction: column; text-align: center;}
    .app-section .app-text {text-align: center; padding-left: 0; padding-right: 0; margin-bottom: 30px;}
    .app-section .app-text ul {text-align: left; display: inline-block;}
    .app-section .app-text ul li {font-size: 1.1rem; justify-content: flex-start;}
    .app-section .download-buttons {justify-content: center; width: 100%; max-width: 400px; margin: 0 auto;}
    .app-section .download-buttons a img {height: 60px; width: auto; }
    .app-section .app-text h2 {font-size: 2rem;}}

    .section-solusi-retail {width:100%;min-height:550px;background:url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=1200') no-repeat center center/cover;background-attachment:fixed;display:flex;justify-content:center;align-items:center;text-align:center;color:#fff;position:relative;padding:60px 20px;overflow:hidden;}
    .section-solusi-retail::before {content:"";position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.55);z-index:1;}
    .section-solusi-retail .solusi-container {display:flex;justify-content:center;align-items:center;flex-wrap:wrap;max-width:1200px;margin:0 auto;padding:40px 20px;position:relative;z-index:2;text-align:center;}
    .section-solusi-retail .left-content {position:relative;z-index:2;max-width:800px;margin:0 auto;padding:20px;}
    .section-solusi-retail h1 {font-size:3.5rem;margin-bottom:20px;font-weight:bold;}
    .section-solusi-retail p {font-size:1.25rem;margin-bottom:30px;}
    .section-solusi-retail .btn-primary {background:#ffb3ff;color:#330033;padding:12px 30px;border-radius:50px;font-size:1rem;font-weight:800;text-decoration:none;transition:0.3s;}
    .section-solusi-retail .primary {background-color:#003366;color:#fff;border:none;}
    .section-solusi-retail .primary:hover {background:#800080;box-shadow:0 4px 15px rgba(0,0,0,0.3);}
    @media(max-width:768px){.section-solusi-retail{background-attachment:scroll;background-size:cover;background-position:center center;background-repeat:no-repeat;}.section-solusi-retail .solusi-container{flex-direction:column;text-align:center;padding:40px 20px;}.section-solusi-retail .left-content{max-width:100%;}.section-solusi-retail h1{font-size:30px;}.section-solusi-retail .button-group{flex-direction:column;align-items:center;}.section-solusi-retail .btn{width:100%;max-width:300px;}}
    
    .container {width:100%;max-width:1200px;margin:0 auto;padding:0 20px;}
    .section .facilities,.section .packages {max-width:1200px;margin:0 auto;}
    
    nav {position:fixed;top:0;left:0;width:100%;padding:20px 40px;display:flex;justify-content:space-between;align-items:center;background:rgba(25,0,25,0.7);backdrop-filter:blur(10px);z-index:10;box-sizing:border-box;}
    nav .logo {font-size:1.6rem;font-weight:800;background:linear-gradient(90deg,#ff00ff,#990099);-webkit-background-clip:text;-webkit-text-fill-color:transparent;}
    nav ul {list-style:none;display:flex;gap:40px;margin:0;padding:0;}
    nav ul li a {text-decoration:none;color:#fff;font-weight:600;transition:0.3s;}
    nav ul li a:hover {color:#ff00ff;}
    
    .menu-toggle {display: none;background: none;border: none;cursor: pointer;padding: 5px;z-index: 11;}
    .menu-toggle span {display: block;width: 25px;height: 3px;background: #fff;margin: 5px 0;transition: 0.3s;}
    .menu-toggle.active span:nth-child(1) {transform: rotate(45deg) translate(7px, 7px);}
    .menu-toggle.active span:nth-child(2) {opacity: 0;}
    .menu-toggle.active span:nth-child(3) {transform: rotate(-45deg) translate(7px, -7px);}
    
    @media (max-width: 768px) {
      nav {padding: 15px 20px;}
      .menu-toggle {display: block;}
      nav ul {position: fixed;top: 0;right: -100%;width: 70%;max-width: 300px;height: 100vh;background: rgba(25,0,25,0.98);backdrop-filter: blur(15px);flex-direction: column;gap: 0;padding: 80px 20px 20px;transition: right 0.3s ease;box-shadow: -5px 0 15px rgba(0,0,0,0.3);}
      nav ul.active {right: 0;}
      nav ul li {width: 100%;border-bottom: 1px solid rgba(255,255,255,0.1);}
      nav ul li a {display: block;padding: 15px 10px;width: 100%;}
    }
    
    .section {padding:80px 20px;} 
    .section .container {max-width: 1200px;margin: 0 auto;}
    .section h2 {font-size:2.2rem;font-weight:800;margin-bottom:40px;text-align:center;}
    
    .facilities {display:flex;flex-wrap:wrap;gap:30px;justify-content:center;align-items:stretch;margin-top:40px;}
    
    @media (max-width: 768px) {
      .facilities {grid-template-columns: 1fr;gap: 20px;padding: 0 10px;}
    }
    
    .facility {position:relative;border-radius:15px;overflow:hidden;transition:0.3s;min-height: 300px;}
    .facility img {width:100%;height:400px;object-fit:cover;display:block;transition: transform 0.5s ease;}
    
    @media (max-width: 768px) {
      .facility img {height: 300px;}
    }
    
    @media (max-width: 480px) {
      .facility {min-height: 250px;}
      .facility img {height: 250px;}
    }
    
    .facility h2 {position:absolute;bottom:15px;left:20px;margin:0;font-size:2rem;font-weight:700;color:#fff;text-shadow:0px 2px 5px rgba(0,0,0,0.7);}
    .facility h4 {position:absolute;bottom:60px;left:20px;margin:0;font-size:1rem;font-weight:400;color:#fff;text-shadow:0px 2px 5px rgba(0,0,0,0.7);}
    
    @media (max-width: 480px) {
      .facility h2 {font-size: 1.5rem;bottom: 10px;left: 15px;}
      .facility h4 {font-size: 0.9rem;bottom: 45px;left: 15px;}
    }
    
    .facility:hover img {transform:scale(1.05);}
    .facility-header {display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;flex-wrap: wrap;gap: 15px;}
    .facility-header h2 {font-size:2rem;font-weight:700;margin:0; color:#fff;}
    
    @media (max-width: 768px) {
      .facility-header {flex-direction: column;align-items: flex-start;text-align: left;}
      .facility-header h2 {font-size: 1.8rem;}
    }
    
    .facility-header .see-all {font-size:1rem;font-weight:500;color:#ffb3ff;text-decoration:none;transition:0.3s;white-space: nowrap;}
    .facility-header .see-all:hover {color:#ffb3ff;}
    .detail-btn {position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);padding:10px 20px;background:#800080;color:#fff;border-radius:25px;font-weight:600;text-decoration:none;opacity:0;transition:0.3s;}
    .facility:hover .detail-btn {opacity:1;transform:translate(-50%,-50%) scale(1.05);}

    footer.footer-gradient {background: linear-gradient(135deg, #A000FF 0%, #000000 50%, #FFFFFF 100%);background-size: 300% 300%;animation: gradientShift 12s ease infinite;color: #fff;padding: 50px 0 20px;font-family: 'Poppins', sans-serif;}
    @keyframes gradientShift {
      0%   { background-position: 0% 50%; }
      50%  { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    footer h5 {font-weight: 700;margin-bottom: 20px;}
    footer a {color: #f8f9fa;text-decoration: none;transition: 0.3s;}
    footer a:hover {color: #A000FF;text-shadow: 0 0 8px rgba(160, 0, 255, 0.7);}
    .footer-bottom {border-top: 1px solid rgba(255, 255, 255, 0.2);padding-top: 15px;margin-top: 30px;font-size: 14px;text-align: center;}
  </style>
</head>
<body>
  <nav>
    <div class="logo">Muscle Lab Gym</div>
    <button class="menu-toggle" id="menuToggle">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <ul id="navMenu">
      <li><a href="#home">Beranda</a></li>
      <li><a href="#location">Lokasi</a></li>
      <li><a href="#why-choose">Why Choose Us</a></li>
      <li><a href="#facility">Fasilitas</a></li>
      <li><a href="#apk">Aplikasi</a></li>
    </ul>
  </nav>

  <section class="section-solusi-retail" id="home">
    <div class="solusi-container">
      <div class="left-content">
        <h1>Come JOIN US</h1>
        <p>Upgrade your experience & raih tubuh ideal bersama kami.</p>
        <div class="button-group">
          <a href="#location" class="btn-primary">Lihat Lokasi</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="location">
    <div class="container">
      <div class="facility-header">
        <h2>LOKASI</h2>
        <a href="#" class="see-all">Lihat Semua Lokasi →</a>
      </div>

      <div class="facilities">
        <div class="facility">
          <img src="https://images.unsplash.com/photo-1540497077202-7c8a3999166f?w=800" alt="Gym Location">
          <h4>Batam</h4>
          <h2>TIBAN</h2>
          <a href="#" class="detail-btn">Lihat Detail</a>
        </div>
      </div>
    </div>
  </section>

  <section id="why-choose">
    <div class="ye">
      <div class="container text-center">
        <div class="why-text mb-5">
          <h2>Why Choose Us?</h2>
          <p>Kami hadir untuk memberikan solusi terbaik bagi perjalanan fitnessmu. Dari registrasi hingga fasilitas, semua dirancang untuk kenyamananmu.</p>
        </div>

        <div class="why-cards">
          <div class="why-card">
            <h5>Membership Mudah</h5>
            <p>Daftar online dan akses gym cukup dengan scan QR, fleksibel dan tanpa ribet.</p>
          </div>
          <div class="why-card">
            <h5>Fasilitas Lengkap</h5>
            <p>Alat gym modern, aman, dan tersedia untuk semua kebutuhan latihanmu.</p>
          </div>
          <div class="why-card">
            <h5>Latihan Mandiri</h5>
            <p>Cocok buat kamu yang ingin berolahraga tanpa trainer, fleksibel sesuai ritmemu.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="facility" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 style="font-size: 40px;">Fasilitas Gym</h2>
        <p class="text-muted">Latihan jadi lebih menyenangkan dengan fasilitas di Muscle Lab Gym!</p>
      </div>

      <div class="swiper swiperMain mb-3">
        <div class="swiper-wrapper">
          <?php 
          $folder_path = FCPATH . 'assets/img/gym/';
          $images = glob($folder_path . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
          
          foreach($images as $image): 
              $filename = basename($image);
          ?>
          <div class="swiper-slide">
              <div class="card shadow-sm border-0">
                  <img src="<?=base_url('assets/img/gym/'.$filename)?>" alt="Fasilitas Gym">
              </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="swiper swiperThumbs">
        <div class="swiper-wrapper">
          <?php 
          $images = glob($folder_path . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
          
          foreach($images as $image): 
              $filename = basename($image);
          ?>
          <div class="swiper-slide">
              <img src="<?=base_url('assets/img/gym/'.$filename)?>" alt="Fasilitas Gym">
          </div>
          <?php endforeach; ?>
      </div>
      </div>
    </div>
  </section>

  <section class="app-section" id="apk">
    <div class="ye">
      <div class="app-container">
        <div class="app-text">
          <h2>Aplikasi Muscle Lab Gym is Now Available!</h2>
          <ul>
            <li><i class="bi bi-phone"></i> Daftar Membership Secara Online</li>
            <li><i class="bi bi-qr-code-scan"></i> Scan QR untuk Masuk Ke Gym</li>
            <li><i class="bi bi-graph-up-arrow"></i> Tracking Progress Check-In</li>
            <li><i class="bi bi-receipt"></i> Riwayat Transaksi</li>
          </ul>

          <div class="download-buttons">
            <a href="#">
              <img src="<?= base_url('assets/img/gpay.png')?>" alt="Google Play">
            </a>
            <a href="#">
              <img src="<?= base_url('assets/img/app.png')?>" alt="App Store">
            </a>
          </div>
        </div>

        <div class="app-image">
        <img src="<?= base_url('assets/img/hengfon.png')?>" alt="Mockup Aplikasi">
        </div>
      </div>
    </div>
  </section>
    
  <footer class="footer-gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Muscle Lab Gym</h5>
          <p>Bangun tubuh sehat & kuat bersama kami. Nikmati fasilitas modern dan pelatih profesional.</p>
        </div>

        <div class="col-md-4">
          <h5>Navigasi</h5>
          <ul class="list-unstyled">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#location">Lokasi</a></li>
            <li><a href="#why-choose">Why Choose Us</a></li>
            <li><a href="#facility">Fasilitas</a></li>
            <li><a href="#apk">Aplikasi</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h5>Kontak</h5>
          <p>Email: info@musclelabgym.com</p>
          <p>Telp: +62 821-3488-8071</p>
          <p>Alamat: Tiban Petra Mandiri. Block D2 No 3 Batam</p>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; <?= date('Y') ?> Muscle Lab Gym. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    
    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active');
      navMenu.classList.toggle('active');
    });
    
    document.querySelectorAll('#navMenu a').forEach(link => {
      link.addEventListener('click', () => {
        menuToggle.classList.remove('active');
        navMenu.classList.remove('active');
      });
    });
    
    document.addEventListener('click', (e) => {
      if (!e.target.closest('nav')) {
        menuToggle.classList.remove('active');
        navMenu.classList.remove('active');
      }
    });

    function revealCards() {
      document.querySelectorAll('.why-card').forEach(card => {
        const rect = card.getBoundingClientRect();
        if (rect.top < window.innerHeight - 50) {
          card.classList.add('show');
        }
      });
    }
    window.addEventListener('scroll', revealCards);
    window.addEventListener('load', revealCards);

    var swiperThumbs = new Swiper(".swiperThumbs", {
      spaceBetween: 10,
      slidesPerView: 'auto',
      freeMode: true,
      watchSlidesProgress: true,
      centeredSlides: false,
      breakpoints: {
        320: { spaceBetween: 8 },
        768: { spaceBetween: 10 },
        1024: { spaceBetween: 12 }
      }
    });

    var swiperMain = new Swiper(".swiperMain", {
      spaceBetween: 10,
      effect: 'fade',
      fadeEffect: { crossFade: true },
      thumbs: { swiper: swiperThumbs },
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>