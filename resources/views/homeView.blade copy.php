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
  <nav class="navbar navbar-expand-lg navbar-dark" >
    <img src="{{ asset('/images/tutwuri.png') }}" style="margin-right : 1rem;" alt="" width="50">
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
  <section class="banner">
    <div class="background-tint" ></div>
    <div class="container ">
      <p class="main-title"> SELAMAT DATANG DI BPMP KEPRI </p>
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

  <h2 class="text-center">Aplikasi Lainnya</h2>
  <section class="content " id="scrollable-element" style="overflow-x : auto; height : 90vh;width:100%;">
    <div class="card-list">
    @for($i = 0; $i < 20; $i++)
      <div class="card" style="margin-top: <?php echo ($i%2) ? 0 : 2 ?>rem;">
        test
      </div>
    @endfor
    </div>
  </section>

  <!-- Services Section -->
  <section class="services py-5 content">
    <div class="container">
      <h2 class="text-center mb-4">Layanan Kami</h2>
      <hr><br>
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
  <footer class="footer">
    <h2>Informasi Terkait</h2>
    <hr>
    <div class="footer-main">
      <div>
        <h4>Kontak</h4>
        <span>bpmp.kepri@bpmp.go.id </span>
      </div>
      <div>
        <h4>Informasi</h4>
        <span>Berita </span>
        <span>Pengumuman </span>
      </div>
      <div>
        <h4>Kontak</h4>
        <span>Contact </span>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.84445609593!2d104.5150556!3d0.9996195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d96fb5bbc08b69%3A0x488a7090a03cc494!2sBPMP%20Provinsi%20Kepulauan%20Riau!5e0!3m2!1sid!2sid!4v1731501902832!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <br><br>
    <center>
      <p style="text-align : center; width : calc(100% - 8rem); position : absolute; bottom : 0;">&copy; 2024 BPMP Kepri. All rights reserved.</p>
    </center>
    <img src="{{ asset('images/bpmp-logo.png') }}" alt="" class="logo">
  </footer>

  <!-- Bootstrap & jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script>
  function disableScroll() {
    document.body.style.overflowY = "hidden";
}

// Fungsi untuk mengaktifkan kembali scroll pada body
function enableScroll() {
  document.body.style.overflowY = "hidden";
}

 

  document.addEventListener('wheel', function (event) {
    // Ambil elemen yang ingin digeser horizontal
    const element = document.querySelector('#scrollable-element');
    const rect = element.getBoundingClientRect();

    // Mengecek apakah elemen sudah di tengah layar
    const height = Math.abs(rect.bottom - rect.top)/2;
    const isCentered = (rect.top+ rect.bottom) /2 < (window.innerWidth / 2) + height && (rect.top+ rect.bottom) /2 > (window.innerWidth / 2) - height  ;
    console.log(isCentered);
    console.log((window.innerWidth / 2) - height, (window.innerWidth / 2) + height);
    console.log((rect.top+ rect.bottom) /2);
    if (isCentered) {
        // Jika elemen sudah di akhir scroll horizontal, biarkan scroll vertikal dokumen
        if ((event.deltaY > 0 && element.scrollLeft >= element.scrollWidth - element.clientWidth) ||
            (event.deltaY < 0 && element.scrollLeft <= 0)) {
            return; // Biarkan scroll berfungsi normal untuk dokumen
        }
        
        // Jika belum di akhir scroll, cegah scroll vertikal dokumen dan lakukan scroll horizontal
        event.preventDefault();
        disableScroll();
        element.scrollLeft += event.deltaY; // Pindahkan scroll horizontal elemen
    }enableScroll();
});


  let appList = document.getElementById("appList");

  function getOffset(el) {
    const rect = el.getBoundingClientRect();
    return {
      left: rect.left + window.scrollX,
      top: rect.top + window.scrollY
    };
  }

  //FUngsi ketika scroll bar berada di posisi element ini
  appList.addEventListener('mouseenter', (e)=>{
    //alert(window.scrollY);
    //alert(getOffset(appList).top);
  });

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
    //observer.observe(section);
  });
</script>
