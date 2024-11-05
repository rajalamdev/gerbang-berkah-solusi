<x-app-layout>
<section id="intro">
      <div class="intro-container">
        <div
          id="introCarousel"
          class="carousel slide carousel-fade"
          data-ride="carousel"
        >
          <ol class="carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">
            <div class="carousel-item">
              <div class="carousel-background">
                <img src="{{asset('components')}}/img/gedung (1).jpg" alt="" />
              </div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>PT Gerbang Berkah Solusi Indonesia</h2>
                  
                  <a href="#featured-services" class="btn-get-started scrollto"
                    >Dapatkan Layanan Terbaik Kami!</a
                  >
                </div>
              </div>
            </div>

            <div class="carousel-item active">
              <div class="carousel-background">
                <img src="{{asset('components')}}/img/gedung (2).jpg" alt="" />
              </div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>GB FACILITY</h2>
                  <h3>Facility Service Solution</h3>
                  <p>
                    Solusi terbaik untuk kebutuhan jasa cleaning service, parking service, 
                    security service dan support service di  wilayah  Jawa, Bali, Sumatra dan Kalimantan
                  </p>
                  <a href="#featured-services" class="btn-get-started scrollto"
                    >Get Started</a
                  >
                </div>
              </div>
            </div>

            

            <div class="carousel-item">
              <div class="carousel-background">
                <img src="{{asset('components')}}/img/gedung (3).jpg" alt="" />
              </div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>FACILITY SERVICE SOLUTION</h2>
                  <p> Great, Excellent, Responsive, Brave, Accountable, Nice, Goal </p>
                  
                  <a href="#featured-services" class="btn-get-started scrollto"
                    >Get Started</a
                  >
                </div>
              </div>
            </div>

         
          </div>

          <a
            class="carousel-control-prev"
            href="#introCarousel"
            role="button"
            data-slide="prev"
          >
            <span
              class="carousel-control-prev-icon ion-chevron-left"
              aria-hidden="true"
            ></span>
            <span class="sr-only">Previous</span>
          </a>

          <a
            class="carousel-control-next"
            href="#introCarousel"
            role="button"
            data-slide="next"
          >
            <span
              class="carousel-control-next-icon ion-chevron-right"
              aria-hidden="true"
            ></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- #intro -->

    <main id="main">

      <section id="about">
        <div class="container">
          <header class="section-header">
            <h3>About Us</h3>
            <p>
              <strong style="color: #18d26e">The One Service Solution,</strong>
              <br />
              GB Facility suatu perusahaan alih daya (outsourcing) memberikan layananan dalam
              bidang :
              1) Kebersihan (Cleaning & Gardening) dan penyedia tenaga
              kerja (Manpower Supply).
              2) Pengelolaan dan Konsultansi Perparkiran
              3) Pengamanan (Security)
               Dengan manajemen yg profesional dan berpengalaman dibidangnya lebih dr 25 tahun.
            </p>
          </header>

          <div class="row about-cols" id="misi">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="about-col">
                <div class="img">
                  <img src="{{asset('components')}}/img/about-vision.jpg" alt="" class="img-fluid" />
                  <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                </div>
                <h2 class="title"><a href="#">Our Vision</a></h2>
                <p>
                  Menjadi perusahaan alih daya (outsourcing) dalam bidang Cleaning, Parking, & Security yang berskala nasional 
                </p>
              </div>
            </div>
            <div class="flex col-md-4 wow fadeInUp items-end">
              <div class="about-col">
                <div class="img">
                  <img src="{{asset('components')}}/img/about-mission.jpg" alt="" class="img-fluid" />
                  <div class="icon">
                    <i class="ion-ios-speedometer-outline"></i>
                  </div>
                </div>
                <h2 class="title"><a href="#">Our Mission</a></h2>
                <p>
                 <ul>
                  <li>Merekrut tenaga ahli yang professional dan berpengalaman untuk menjadi bagian dari manajemen perusahaan</li>
                  <li>⁠Memberikan pelatihan bagi calon tenaga kerja oleh instruktur yang professional</li>
                  <li>Melakukan audit kualitas pelayanan secara reguler</li>
                  <li>Memberdayakan sumber daya lokal untuk ikut andil dalam pembangunan daerah masing - masing</li>
                  <li>Menjalin hubungan kerja (koordinasi) dengan instansi terkait (pemerintah pusat dan daerah)</li>
                 </ul>
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <section id="testimonials" class="section-bg wow fadeInUp">
        <div class="container">
          <header class="section-header">
            <h3>Board of Director</h3>
          </header>

          <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
              <img src="{{asset('components')}}/img/firdaus.jpg" class="testimonial-img" alt="" />
              <h3>FIRDAUS, SE, MM</h3>
              <h4>Chief Executive Officer</h4>
              <p>
                <img
                  src="{{asset('components')}}/img/quote-sign-left.png"
                  class="quote-sign-left"
                  alt=""
                />
                Pengalaman lebih dari 25 tahun bisnis outsourcing, sebelumnya berkarir di salah satu bank nasional lebih dari 5 tahun
                <img
                  src="{{asset('components')}}/img/quote-sign-right.png"
                  class="quote-sign-right"
                  alt=""
                />
              </p>
            </div>          
          </div>
        </div>
      </section>

      <section id="about">
        <div class="container">
         

          <div class="row about-cols" id="misi">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="about-col">
                <div class="img">
                  <img src="{{asset('components')}}/img/Logogbsi2.jpg" alt="" class="img-fluid" />
                  <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                </div>
                <h2 class="title"><a href="facility.html">GB Facility</a></h2>
            </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
              <div class="about-col">
                <div class="img">
                  <img src="{{asset('components')}}/img/Logogbpark2.jpg" alt="" class="img-fluid" />
                  <div class="icon">
                    <i class="ion-ios-speedometer-outline"></i>
                  </div>
                </div>
                <h2 class="title"><a href="gbparking.html">GB Parking</a></h2>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
              <div class="about-col">
                <div class="img">
                  <img src="{{asset('components')}}/img/Logogbguard2.jpg" alt="" class="img-fluid" />
                  <div class="icon">
                    <i class="ion-ios-speedometer-outline"></i>
                  </div>
                </div>
                <h2 class="title"><a href="guard.html">GB Guard</a></h2>
                </div>
            </div>
          </div>
        </div>
      </section>
      
      <!--==========================
      Contact Section
    ============================-->
      <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h3>Contact Us</h3>
            <p>
              Anda punya pertanyaan, dan kami punya jawaban. 
              Cukup kirimkan pesan kepada kami dan salah satu staf 
              pendukung kami yang berpengetahuan luas akan menghubungi 
              Anda dalam waktu 48 jam – bahkan pada akhir pekan dan hari libur.
            </p>
          </div>

          <div class="row contact-info">
            <div class="col-md-4">
              <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h3>Address</h3>
                <address>Head Office Green Park Office View Blok RD 05, Jl. Daan Mogot Raya KM 14 Cengkareng – Jakarta Barat</address>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3>Phone Number</h3>
                <p><a target="_blank" href="https://wa.me/6281314316442">+62 813-1431-6442</a></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3>telephone</h3>
                <p><a href="tel:021-38764145">021-38764145</a></p>
              </div>
            </div>

            <!-- <div class="col-md-4">
              <div class="contact-email">
                <i class="ion-ios-telephone-outline"></i>
                <h3>Email</h3>
                <p><a href="mailto:info@example.com">exma@gmail.com</a></p>
              </div>
            </div> -->
          </div>

          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 4 chars"
                  />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Your Email"
                    data-rule="email"
                    data-msg="Please enter a valid email"
                  />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-group">
                <input
                  type="number"
                  class="form-control"
                  name="phoneNumber"
                  id="phoneNumber"
                  placeholder="Phone Number"
                  data-rule="minlen:4"
                  data-msg="Please input a number"
                />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="Subject"
                  data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject"
                />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  data-rule="required"
                  data-msg="Please write something for us"
                  placeholder="Message"
                ></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </x-app-layout>