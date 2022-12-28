@extends('layouts.main')
@section('tampilan')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container ">
        <h2><a style="color: white" href="/home"><b>Home</b> </a>/ About Us</h2>        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/aboutusfix.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><b> Apa itu RHD Learning?</b></h3>
            <p class="fst-italic">
              RHDL (RHD Learning) merupakan platform pembelajaran investasi secara daring (online learning) bagi member / murid yang sudah memilih berbagai kursus mulai dari yang gratis maupun yang berbayar bertujuan untuk meningkatkan literasi finansial dengan misi untuk membuat kamu bisa siapkan rencana keuanganmu dan raih financial freedom dengan belajar investasi sekarang di RHD Learning!
            </p>
            <h3>
              Kenapa belajar investasi nggak bikin rugi?
            </h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> Bebas dari Inflasi!</li>
              <li><i class="bi bi-check-circle"></i> Sebagai tabungan hari tua.</li>
              <li><i class="bi bi-check-circle"></i> Berlatih tanggung jawab Finansial.</li>
              <li><i class="bi bi-check-circle"></i> Mewujudkan tujuan keuangan.</li>
            </ul>
            <p>
              Tunggu apa lagi ayo daftar sekarang juga dan nikmati berbagai macam akses modul RHD Learning !
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $alluser->where('is_admin', 0)->where('is_status', 1)->count()}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $allcourse->count() }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $allblog->count() }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Blogs</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $allinstructor->count() }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Instructors</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Founder & Team</h2>
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
                  <h3>Raihan Hidayatullah Djunaedi</h3>
                  <h4>CEO &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Tujuan berinvestasi itu bukan hanya tentang uang, tapi tentang bagamana caramu menjalankan hidup sesuai dengan keinginanmu.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sarah Naila</h3>
                  <h4>COO</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Kenaikan nilai investasi cenderung tinggi hingga mampu menyaingi laju inflasi setiap tahun.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Desi Amara</h3>
                  <h4>CMO</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Jika berinvestasi sejak usia muda maka, kamu akan mendapatkan ‘passive income’ dari hasil investasimu
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Marco Gautama</h3>
                  <h4>CTO</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Dengan berinvestasi, kamu dilatih untuk menyisihkan sebagian pendapatan dan menumbuhkan perilaku berhemat
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>Rizky Maulana</h3>
                  <h4>CFO</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Investasi menjadi instrumen atau kendaraan yang akan mengantar kamu ke tujuan keuangan
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
@endsection