@extends('layouts.main')

@include('partials.navbar')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Selamat Datang</h1>
      <h2>Website Resmi Rumah Sakit Ibu dan Anak</h2>
      <a href="/antrian" class="btn-get-started scrollto">Ambil Antrian</a>
    </div>
  </section><!-- End Hero -->
<main id="main">
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Sistem Antrian Online</h3>
              <p> 
                Setiap pengunjung dapat mendaftarkan nomor antrian sesuai Poli yang dituju secara online
              </p>
              <div class="text-center">
                <a href="/antrian" class="more-btn">Ambil Antrian <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-plus-medical"></i>
                    <h4>Poli Anak</h4>
                    <p>Poli ini fokus pada kesehatan anak-anak, termasuk pemeriksaan kesehatan rutin, vaksinasi, diagnosis, dan pengobatan penyakit pada anak.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-dna"></i>
                    <h4>Poli Kandungan</h4>
                    <p>Poli ini menangani pemeriksaan, diagnosis, dan pengobatan terkait kehamilan, persalinan, dan masalah kesehatan reproduksi pada ibu hamil.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bxs-first-aid"></i>
                    <h4>Poli Neonatologi</h4>
                    <p>Poli ini berfokus pada perawatan dan pengobatan bayi baru lahir, terutama yang dilahirkan prematur atau mengalami masalah kesehatan sejak lahir.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>

    

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

<!-- Service Start -->
<div class="container-xxl service py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <div class="section-title">
        <h2>Jadwal Dokter</h2>
      </div>
    </div>
    <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
      <div class="col-lg-4">
        <div class="nav w-100 nav-pills me-4">
          <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
            <i class="bi bi-balloon fa-2x me-3"></i>
            <h4 class="m-0">Poli Anak</h4>
          </button>
          <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
            <i class="bi bi-heart-pulse fa-2x me-3"></i>
            <h4 class="m-0">Poli Kandungan</h4>
          </button>
          <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
            <i class="bi bi-balloon-heart fa-2x me-3"></i>
            <h4 class="m-0">Poli Neonatologi</h4>
          </button>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="tab-content w-100">
          <div class="tab-pane fade show active" id="tab-pane-1">
            <div class="row g-4">
              <div class="col-md-4 fade-up-container">
                <a><img src="assets/img/dokter_Martha.jpg" class="fade-up-img img-fluid rounded" alt=""></a>
                <h3 class="mb-3 font-weight-bold text-center">dr. Martha</h3>
                <p class="text-center">Senin s/d Jumat</p>
                <p class="text-center">09.00 - 12.00</p>
              </div>
              <div class="col-md-4 fade-up-container">
                <a><img src="assets/img/dokter_Lubis.jpg" class="fade-up-img img-fluid rounded" alt=""></a>
                <h3 class="mb-3 font-weight-bold text-center">dr. Lubis</h3>
                <p class="text-center">Senin s/d Jumat</p>
                <p class="text-center">09.00 - 12.00</p>
              </div>
              <div class="col-md-4 fade-up-container">
                <a><img src="assets/img/dokter_Fanani.jpg" class="fade-up-img img-fluid rounded" alt=""></a>
                <h3 class="mb-3 font-weight-bold text-center">dr. Fanani</h3>
                <p class="text-center">Senin s/d Jumat</p>
                <p class="text-center">09.00 - 12.00</p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-pane-2">
            <div class="row g-4">
              <div class="col-md-4 fade-up-container">
                <a><img src="assets/img/dokter_Aurellia.jpg" class="fade-up-img img-fluid rounded" alt=""></a>
                <h3 class="mb-3 font-weight-bold text-center">dr. Aurellia</h3>
                <p class="text-center">Senin s/d Jumat</p>
                <p class="text-center">09.00 - 12.00</p>
              </div>
              <div class="col-md-4 fade-up-container">
                <a><img src="assets/img/dokter_Wiratna.jpg" class="fade-up-img img-fluid rounded" alt=""></a>
                <h3 class="mb-3 font-weight-bold text-center">dr. Wiratna</h3>
                <p class="text-center">Senin s/d Jumat</p>
                <p class="text-center">09.00 - 12.00</p>
              </div>
              <div class="col-md-4 fade-up-container">
                <a><img src="assets/img/dokter_Alifia.jpg" class="fade-up-img img-fluid rounded" alt=""></a>
                <h3 class="mb-3 font-weight-bold text-center">dr. Alifia</h3>
                <p class="text-center">Senin s/d Jumat</p>
                <p class="text-center">09.00 - 12.00</p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-pane-3">
            <div class="row g-4">
              <div class="col-md-4 fade-up-container">
                <a><img src="assets/img/dokter_Sion.jpg" class="fade-up-img img-fluid rounded" alt=""></a>
                <h3 class="mb-3 font-weight-bold text-center">dr. Sion</h3>
                <p class="text-center">Senin s/d Jumat</p>
                <p class="text-center">09.00 - 12.00</p>
              </div>
              <div class="col-md-4 fade-up-container">
                <a><img src="assets/img/dokter_Rifdah.jpg" class="fade-up-img img-fluid rounded" alt=""></a>
                <h3 class="mb-3 font-weight-bold text-center">dr. Rifdah</h3>
                <p class="text-center">Senin s/d Jumat</p>
                <p class="text-center">09.00 - 12.00</p>
              </div>
              <div class="col-md-4 fade-up-container">
                <a><img src="assets/img/dokter_Samuel.jpg" class="fade-up-img img-fluid rounded" alt=""></a>
                <h3 class="mb-3 font-weight-bold text-center">dr. Samuel</h3>
                <p class="text-center">Senin s/d Jumat</p>
                <p class="text-center">09.00 - 12.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Service End -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2> Kritik / Saran </h2>
        </div>
      </div>



      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Ketintang, Surabaya, Jawa Timur</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>RS_IbudanAnak@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>(021) 5220 191</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

@include('partials.footer')