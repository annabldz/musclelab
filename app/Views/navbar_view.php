
  
  <style>
    body {font-family: 'Poppins', sans-serif;}
    .navbar-gradient {
      background: linear-gradient(135deg, #A000FF 0%, #000000 100%);
      background-size: 300% 300%;
      animation: gradientShift 10s ease infinite;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }

    @keyframes gradientShift {
      0%   { background-position: 0% 50%; }
      50%  { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .navbar-gradient .navbar-brand {
      color: #fff;
      font-weight: 700;
      letter-spacing: 1px;
      transition: 0.3s;
    }
    .navbar-gradient .navbar-brand:hover {
      color: #FFD6FF;
      text-shadow: 0 0 12px rgba(160, 0, 255, 0.8);
    }

    .navbar-gradient .nav-link {
      color: #f8f9fa !important;
      margin: 0 12px;
      font-weight: 500;
      transition: 0.3s;
    }
    .navbar-gradient .nav-link:hover {
      color: #A000FF !important;
      transform: translateY(-2px);
      text-shadow: 0 0 10px rgba(160, 0, 255, 0.6);
    }

    .btn-gradient {
      background: linear-gradient(45deg, #A000FF, #000000);
      color: #fff;
      border: none;
      border-radius: 30px;
      font-weight: 600;
      padding: 8px 24px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(160, 0, 255, 0.4);
    }
    .btn-gradient:hover {
      background: linear-gradient(45deg, #000000, #A000FF);
      color: #fff;
      transform: scale(1.08);
      box-shadow: 0 6px 20px rgba(160, 0, 255, 0.6);
    }
  </style>
<body>
  <nav class="navbar navbar-expand-lg navbar-gradient shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('gym') ?>">MUSCLE LAB GYM</a>
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="<?=base_url('/')?>">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#location">Lokasi</a></li>
          <li class="nav-item"><a class="nav-link" href="#why-choose">Why Choose Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#facility">Fasilitas</a></li>
          <li class="nav-item"><a class="nav-link" href="#apk">Aplikasi</a></li>
        </ul>
        <a href="#" class="btn btn-gradient ms-3">Login</a>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
