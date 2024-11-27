<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BPMP Kepri </title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font/ubuntu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/postingan.css') }}">
  <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
  <link rel="stylesheet" href="{{ asset('css/program.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flip-card.css') }}">
  <link rel="icon" href="{{ asset('images/tutwuri.png') }}" sizes="192x192" />
</head> 
<body>
  @include('modal-home')

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
    <div class="container ">
      <p class="main-title"> SELAMAT DATANG DI BPMP KEPRI </p>
    </div>
    <div class="background-tint" ></div>
    <div class="background-body">
      <img class="background" src="/images/banner/banner1.jpeg" ></img>
    </div>
  </section>

  <section>
    <div class="profile-area">
      <div class="profile-card" data-toggle="modal" data-target="#visiMisiModal">
          <img src="{{ asset('images/icon/rocket.png') }}" alt="">
          <span>Visi & Misi</span>
      </div>
      <div class="profile-card" data-toggle="modal" data-target="#tugasFungsiModal">
        <img src="{{ asset('images/icon/task.png') }}" alt="">
        <span>Tugas dan Fungsi</span>
      </div> 
      <div class="profile-card" data-toggle="modal" data-target="#sumberDayaModal">
          <img src="{{ asset('images/icon/hr.png') }}" alt="">
          <span>Sumber Daya Manusia</span>
      </div>
      <div class="profile-card" data-toggle="modal" data-target="#strukturOrganisasiModal">
        <img src="{{ asset('images/icon/teamwork.png') }}" alt="">
        <span>Struktur Organisasi</span>
      </div>
      <div class="profile-card" data-toggle="modal" data-target="#maklumatModal">
        <img src="{{ asset('images/icon/customer-service.png') }}" alt="">
        <span>Maklumat Pelayanan</span>
      </div>
    </div>
  </section>

  <!-- About Section -->
   <br>
  <section class="about py-5 bg-light content">
    <div class="container">
      <div class="row about-item" >
        <div class="col-md-6">
          <h1 style="color : #006799; ">SELAMAT DATANG DI WEBSITE BPMP PROVINSI KEPULAUAN RIAU</h1><hr>
          <p>Kami berkomitmen untuk menyediakan informasi yang akurat, cepat, dan mudah diakses guna meningkatkan transparansi dan pelayanan publik. Melalui situs ini, kami berharap dapat memenuhi kebutuhan informasi masyarakat serta memberikan layanan yang lebih baik dan efektif.</p>
          <button class="more-btn">Selengkapnya</button>
          <div class="visi-misi-section">

          </div>
        </div>
        <div class="col-md-6 person-img" id="personImg">
          <img src="{{ asset('images/person.png') }}" class="img-fluid" alt="Tentang Kami">
        </div>
      </div>
    </div>
  </section>  

  <!-- Bagian Postingan -->
  <section>
    <div class="postingan-main">
      <div class="postingan-menu">
        <h2 class="postingan">Postingan</h2>
        <input type="text" placeholder="Cari postingan">
      </div>
      <hr><br>
      <div class="postingan-list" id="postinganList">
        @for($i = 0 ; $i<6 ; $i++)
        <div class="postingan-card" >
            <span class="judul-postingan">Judul Postingan</span><br>
            <span class="waktu-postingan">Senin, 20-02-2024</span> <br> <br>
            <p class="isi-postingan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="tombol-postingan">
              <button class="kunjungi-postingan">Selengkapnya</button>
            </div>
        </div>
        @endfor
      </div>
    </div>
  </section>


  <!-- Bagian Fasilitas -->
  <section>
    <div class="fasilitas">
      <h2>Fasilitas</h2>
      <hr>
      <div class="barier">
        <div class="fasilitas-list" id="fasilitasList">
          <div class="part" style="clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);">
            <span>Asrama</span>
            <img src="{{ asset('images/fasilitas/image1.jpg') }}" alt="">
          </div>
          <div class="part" style="margin-left : -3rem; clip-path: polygon(20% 0, 100% 0, 80% 100%, 0% 100%);">
            <span>Ruang Kerja</span>
            <img src="{{ asset('images/fasilitas/image2.jpg') }}" alt="">
          </div>
          <div class="part" style="margin-left : -3rem;clip-path: polygon(20% 0, 100% 0, 80% 100%, 0% 100%);">
            <span>Ruang Komputer</span>
            <img src="{{ asset('images/fasilitas/image3.jpg') }}" alt="">
          </div>
          <div class="part" style="margin-left : -3rem;clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);">
            <span>Kantin</span>
            <img src="{{ asset('images/fasilitas/image4.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Bagian program -->
  <section>
    <div class="program">
      <div class="program-area">
        <div class="main-part">
            <h2>Program Kerja</h2>
            <hr>
            <span>Daftar Program Kerja</span>
            <ul>
              <li>Program 1</li>
              <li>Program 1</li>
              <li>Program 1</li>
              <li>Program 1</li>
            </ul>
            <hr>
            <button class="btn btn-primary" style="background-color : #006799;">Hal</button>
        </div>

        <div class="list-area" style="overflow-x: auto; z-index:1; margin-left :-10rem;">
          <div class="program-list">
            @for($i = 0; $i <10; $i++)
             <div class="program-card">
              <h3>Program {{$i}}</h3>
              <h3>Program {{$i}}</h3>
              <h3>Program {{$i}}</h3>
              <h3>Program {{$i}}</h3>
             </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bagian aplikasi -->
  <br><br>
  <h2 class="text-center" style="color : #006799;">Aplikasi Lainnya</h2><hr style="height : 2px; margin: 0 7rem; background-color : rgb(255, 208, 0);">
  <section class="contents " id="scrollable-element" style="overflow-x : auto; width:100%;">
    <div class="card-list">
    @for($i = 0; $i <10; $i++)
      <div class="card flip-card" style="margin-top: <?php echo ($i%2) ? -2 : 2 ?>rem;">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="{{ asset('images/tutwuri.png') }}" style="width : 100%;" alt="">
            <span class="text-center">Judul App</span>
          </div>
           <div class="flip-card-back">
            <p>Deskripsi aplikasi : ini merupakan field untuk menjelaskan deskripsi aplikasi pada card ini </p>
            <p>Kunjungi</p>
          </div>
        </div>
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
  let isCentered = false;
  let personImage = document.getElementById('personImg');
  let postinganList = document.getElementById('postinganList');
  let fasilitasList = document.getElementById('fasilitasList');
  

  document.addEventListener('wheel', function (event) {
    const element = document.querySelector('#scrollable-element');
    if (isCentered) {
        console.log(true);
        // Jika elemen sudah di akhir scroll horizontal, biarkan scroll vertikal dokumen
        if ((event.deltaY > 0 && element.scrollLeft >= element.scrollWidth - element.clientWidth) ||
            (event.deltaY < 0 && element.scrollLeft <= 0)) {
            return; // Biarkan scroll berfungsi normal untuk dokumen
        }
      
        // Jika belum di akhir scroll, cegah scroll vertikal dokumen dan lakukan scroll horizontal
        event.preventDefault();
        element.scrollLeft += event.deltaY; // Pindahkan scroll horizontal elemen
        return;
      }
  }, {passive:false});


  function addObserver(element , actionIn , actionOut, treshold = 1){
    const observer = new IntersectionObserver((e)=>{
      console.log(e[0].isIntersecting);
      if(e[0].isIntersecting) actionIn();
      else actionOut();
    }, {
      threshold : treshold
    });
    observer.observe(element);
  }


  document.querySelectorAll('.contents').forEach(section => {
    addObserver(section , ()=>{isCentered = true}, ()=>{isCentered = false});
  });

  addObserver(personImage, ()=>{
      personImage.style.visibility = "visible";
      personImage.style.animation = "SlideInRight 2s ease 0s 1 normal forwards";
  }, ()=>{}, .2);


  addObserver(
    postinganList,
    ()=>{
      const children = postinganList.children;
      for(let child in children){
        if(children[child].style != null) children[child].style.animation = `FadeInForward 2s ease ${parseFloat(child/5)}s 1 normal forwards`;
        console.log(`fadeInForward 2s ease ${parseFloat(child/5)}s 1 normal forwards`);
      }
    },
    ()=>{

    }, .2
  );

    addObserver(fasilitasList, 
    ()=>{
      const fasilitas = fasilitasList.children;
      for(let child in fasilitas){
        if(fasilitas[child].style != null) fasilitas[child].style.animation = `SlideInRight 2s ease ${child/2}s 1 normal forwards`;
        console.log(`fadeInForward 2s ease ${parseFloat(child/5)}s 1 normal forwards`);
      }
    },
    ()=>{

    }, .2
    );

</script>
