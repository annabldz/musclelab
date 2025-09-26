<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Gradient MASTERGYM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Footer Gradient Smooth */
    footer.footer-gradient {
      background: linear-gradient(135deg, #A000FF 0%, #000000 50%, #FFFFFF 100%);
      background-size: 300% 300%;
      animation: gradientShift 12s ease infinite;
      color: #fff;
      padding: 50px 0 20px;
      font-family: 'Poppins', sans-serif;
    }

    @keyframes gradientShift {
      0%   { background-position: 0% 50%; }
      50%  { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    footer h5 {
      font-weight: 700;
      margin-bottom: 20px;
    }

    footer a {
      color: #f8f9fa;
      text-decoration: none;
      transition: 0.3s;
    }
    footer a:hover {
      color: #A000FF;
      text-shadow: 0 0 8px rgba(160, 0, 255, 0.7);
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      padding-top: 15px;
      margin-top: 30px;
      font-size: 14px;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Footer -->
  <footer class="footer-gradient">
    <div class="container">
      <div class="row">
        <!-- Kolom 1 -->
        <div class="col-md-4">
          <h5>Muscle Lab Gym</h5>
          <p>Bangun tubuh sehat & kuat bersama kami. Nikmati fasilitas modern dan pelatih profesional.</p>
        </div>

        <!-- Kolom 2 -->
        <div class="col-md-4">
          <h5>Navigasi</h5>
          <ul class="list-unstyled">
            <li><a href="<?= base_url('/') ?>">Beranda</a></li>
            <li><a href="<?= base_url('/tentang') ?>">Tentang</a></li>
            <li><a href="<?= base_url('/layanan') ?>">Layanan</a></li>
            <li><a href="<?= base_url('/kontak') ?>">Kontak</a></li>
          </ul>
        </div>

        <!-- Kolom 3 -->
        <div class="col-md-4">
          <h5>Kontak</h5>
          <p>Email: info@musclelabgym.com</p>
          <p>Telp: +62 812-3456-7890</p>
          <p>Alamat: Jl. Kesehatan No.12, Jakarta</p>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <p>&copy; <?= date('Y') ?> Muscle Lab Gym. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

</body>
</html>
