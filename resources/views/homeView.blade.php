<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BPMP Kepri </title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font/ubuntu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head> 
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color : white;">
    <img src="{{ asset('/images/bpmp-logo.png') }}" style="margin-right : 1rem;" alt="" width="50">
    <h2 class="title" href="#" style="color:#006799">BPMP Provinsi Kepulauan Riau</h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" style="color:#006799;" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" style="color:#006799;" href="#">Profil</a></li>
        <li class="nav-item"><a class="nav-link" style="color:#006799;" href="#">Layanan</a></li>
        <li class="nav-item"><a class="nav-link" style="color:#006799;" href="#">Kontak</a></li>
      </ul>
    </div>
  </nav>

  <!-- Banner -->
  <section class="banner text-center">
    <div class="container">
      <h1>Selamat Datang di BPMP Kepri</h1>
      <p>Tempat informasi dan layanan pendidikan untuk masyarakat Kepulauan Riau</p>
    </div>
  </section>

  <!-- About Section -->
  <section class="about py-5 bg-light content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Tentang Kami</h2>
          <p>BPMP Kepri berkomitmen memberikan pelayanan pendidikan terbaik di wilayah Sumatera Barat. Kami menyediakan berbagai informasi dan layanan edukatif untuk meningkatkan kualitas pendidikan.</p>
        </div>
        <div class="col-md-6">
          <img src="about.jpg" class="img-fluid" alt="Tentang Kami">
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services py-5 content">
    <div class="container">
      <h2 class="text-center mb-4">Layanan Kami</h2>
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="service-box p-4">
            <i class="fa fa-graduation-cap fa-3x mb-3"></i>
            <h4>Layanan Pendidikan</h4>
            <p>Menyediakan layanan edukatif untuk masyarakat dan pengajar di wilayah Sumatera Barat.</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="service-box p-4">
            <i class="fa fa-cogs fa-3x mb-3"></i>
            <h4>Pengembangan</h4>
            <p>Memberikan pelatihan dan pengembangan untuk meningkatkan mutu pendidikan.</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="service-box p-4">
            <i class="fa fa-phone fa-3x mb-3"></i>
            <h4>Kontak</h4>
            <p>Dapatkan informasi lebih lanjut dengan menghubungi layanan pelanggan kami.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 BPMP Kepri. All rights reserved.</p>
  </footer>

  <!-- Bootstrap & jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script>
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.scrollIntoView({ behavior: "smooth", block: "center" });
      }
    });
  }, {
    threshold: 0.5 // Memicu jika 50% dari elemen terlihat di viewport
  });

  document.querySelectorAll('.content').forEach(section => {
    observer.observe(section);
  });
</script>
