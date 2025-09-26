<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gym Landing Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: #190019;
      overflow-x: hidden;
    }

     .container {
      width: 100%;
      max-width: 1200px; /* batas lebar konten */
      margin: 0 auto;    /* center */
      padding: 0 20px;   /* jarak kiri kanan */
    }

    nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 20px 40px; /* kurangi biar nggak geser */
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(25, 0, 25, 0.7);
      backdrop-filter: blur(10px);
      z-index: 10;
      box-sizing: border-box; /* biar padding dihitung di dalam */
    }

    nav .logo {
      font-size: 1.6rem;
      font-weight: 800;
      background: linear-gradient(90deg, #ff00ff, #990099);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 40px;
      margin: 0;
      padding: 0;
    }

    nav ul li a {
      text-decoration: none;
      color: #fff;
      font-weight: 600;
      transition: 0.3s;
    }

    nav ul li a:hover {
      color: #ff00ff;
    }

    .section {
      padding: 80px 10%;
    }

    .section h2 {
      font-size: 2.2rem;
      font-weight: 800;
      margin-bottom: 40px;
      text-align: center;
    }

    .section {
    padding: 60px 10%;
    }

    .facility-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
    }

    .facility-header h2 {
    font-size: 2rem;
    font-weight: 800;
    color: #ffb3ff;
    }

    .facility-header .see-all {
    font-size: 1rem;
    font-weight: 600;
    color: #ff4dff;
    text-decoration: none;
    transition: 0.3s;
    }
    .facility-header .see-all:hover {
    color: #ff99ff;
    }

    .facility-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(420px, 1fr));
    gap: 25px;
    }

    .facility-card {
    background: #2a002a;
    border-radius: 15px;
    overflow: hidden;
    position: relative;
    transition: 0.3s;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    }

    .facility-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    }

    .facility-card .card-content {
    padding: 15px;
    }

    .facility-card h4 {
    margin: 0;
    font-size: 0.9rem;
    color: #bbb;
    }

    .facility-card h3 {
    margin: 5px 0;
    font-size: 1.3rem;
    font-weight: 700;
    color: #fff;
    }

    .facility-card p {
    font-size: 0.9rem;
    color: #ccc;
    }

    .facility-card .arrow {
    position: absolute;
    top: 50%;
    right: 15px;
    font-size: 1.5rem;
    color: #ff4dff;
    transform: translateY(-50%);
    transition: 0.3s;
    }

    .facility-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(255, 0, 255, 0.3);
    }

    .facility-card:hover .arrow {
    right: 10px;
    }

    .arrow-btn {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        background: linear-gradient(135deg, #ff4dff, #b300b3);
        color: #fff;
        font-size: 1rem;
        border-radius: 50%;
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 8px rgba(255, 77, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s ease;
        overflow: hidden;
        }

        .arrow-btn:hover {
        background: linear-gradient(135deg, #ff80ff, #d633d6);
        box-shadow: 0 0 15px rgba(255, 128, 255, 0.8);
        transform: translateY(-50%) scale(1.1);
        }

        .arrow-btn i {
        position: absolute;
        transition: opacity 0.3s, transform 0.3s;
        }

        .default-icon {
        opacity: 1;
        transform: translateX(0);
        }

        .hover-icon {
        opacity: 0;
        transform: translateY(10px);
        }

        .arrow-btn:hover .default-icon {
        opacity: 0;
        transform: translateX(-10px);
        }

        .arrow-btn:hover .hover-icon {
        opacity: 1;
        transform: translateY(0);
        }


  </style>
</head>
<body>
  <?= $this->include('navbar_view'); ?>

  <section class="section" id="facility">
  <div class="facility-header">
    <h2>Temukan fasilitas nyaman dan terdekat !</h2>
  </div>

  <div class="facility-grid">
    <!-- Card 1 -->
    <div class="facility-card">
      <img src="assetslanding/img/r1.jpg" alt="Batam Center">
      <div class="card-content">
        <h4>Batam</h4>
        <h3>BATAM CENTER</h3>
        <p>Jl. Ahmad Yani No.12, Batam Center</p>
      </div>
      <a href="#" class="arrow-btn">
        <i class="fas fa-arrow-right default-icon"></i>
        <i class="fas fa-arrow-up-right-from-square hover-icon"></i>
      </a>
    </div>


    <!-- Card 2 -->
    <div class="facility-card">
      <img src="assetslanding/img/r2.jpg" alt="Tiban">
      <div class="card-content">
        <h4>Batam</h4>
        <h3>TIBAN</h3>
        <p>Jl. Letjend Suprapto, Tiban</p>
      </div>
            <a href="#" class="arrow-btn">
              <i class="fas fa-arrow-right default-icon"></i>
              <i class="fas fa-arrow-up-right-from-square hover-icon"></i>
            </a>
    </div>

    <!-- Card 3 -->
    <div class="facility-card">
      <img src="assetslanding/img/r3.jpg" alt="Baloi">
      <div class="card-content">
        <h4>Batam</h4>
        <h3>BALOI</h3>
        <p>Jl. Penuin Raya No. 5, Baloi</p>
      </div>
            <a href="#" class="arrow-btn">
              <i class="fas fa-arrow-right default-icon"></i>
              <i class="fas fa-arrow-up-right-from-square hover-icon"></i>
            </a>
    </div>

    <div class="facility-card">
      <img src="assetslanding/img/r3.jpg" alt="Baloi">
      <div class="card-content">
        <h4>Batam</h4>
        <h3>BALOI</h3>
        <p>Jl. Penuin Raya No. 5, Baloi</p>
      </div>
            <a href="#" class="arrow-btn">
              <i class="fas fa-arrow-right default-icon"></i>
              <i class="fas fa-arrow-up-right-from-square hover-icon"></i>
            </a>
    </div>
  </div>
</section>

</body>
