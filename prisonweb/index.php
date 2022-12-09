<?php 
// session_start();
// // var_dump($_SESSION);die;
// if(empty($_SESSION)){
//   $_SESSION['lang'] = "en";
// }else{
//   // var_dump($_SESSION);
//   if (isset($_SESSION['lang'])) {
//       include("inc/header_".$_SESSION['lang'].".php"); 
//   }
// }

// } 
include("inc/header_en.php");?>
<!-- ======= Hero Section ======= -->
 <section id="hero">
      <div
        id="heroCarousel"
        data-bs-interval="5000"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div
            class="carousel-item active"
            style="background-image: url(images/puzhal_prison1.jpg)"
          ></div>

          <!-- Slide 2 -->
          <div
            class="carousel-item"
            style="background-image: url(images/prison_adalat2.jpg)"
          ></div>

          <!-- Slide 3 -->
          <div
            class="carousel-item"
            style="background-image: url(images/prison_yoga_tailoring.jpg)"
          ></div>
          <!-- Slide 4 -->
          <div
            class="carousel-item"
            style="background-image: url(images/prison_carpentery.jpg)"
          ></div>
          <div
            class="carousel-item"
            style="background-image: url(images/prison_yoga_vlr.jpg)"
          ></div>
          <div
            class="carousel-item"
            style="background-image: url(images/prisoner_education.jpg)"
          ></div>
          <div
            class="carousel-item"
            style="background-image: url(images/prison_ypga_cbe.jpg)"
          ></div>
        </div>

        <a
          class="carousel-control-prev"
          href="#heroCarousel"
          role="button"
          data-bs-slide="prev"
        >
          <span
            class="carousel-control-prev-icon bi bi-chevron-left"
            aria-hidden="true"
          ></span>
        </a>

        <a
          class="carousel-control-next"
          href="#heroCarousel"
          role="button"
          data-bs-slide="next"
        >
          <span
            class="carousel-control-next-icon bi bi-chevron-right"
            aria-hidden="true"
          ></span>
        </a>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <section class="pricing">
        <div class="container" data-aos="fade-up">
          <div class="row align-items-center">
            <div class="col-lg-4">
              <div class="section-title">
                <h2>ABOUT US</h2>
              </div>
              <div class="box aos-init aos-animate box-back">
                <p class="justify-center">
                  Prisons serve the public by keeping in safe custody those
                  committed by the courts and treating them with humanity and
                  helping them to lead a useful life in society as a law abiding
                  citizen after their release from the Prison. The theory of
                  Reformation and Rehabilitation is followed in the Prisons of
                  this State.
                </p>
                <div><h5><a href="#">more &raquo;</a></h5></div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="section-title">
                <h2>DGP'S MESSAGE</h2>
              </div>
              <div class="box aos-init aos-animate">
                <div class="">
                  <a
                    href="images/DGP/AMARAESH PUJARI.jpg"
                    class="portfolio-lightbox preview-link"
                  >
                    <img
                      src="images/DGP/AMARAESH PUJARI.jpg"
                      alt=""
                      style="margin-bottom: 5px; max-height: 198px;width: 50%;"/></a>
                  <h5 style="font-weight:600">AMARAESH PUJARI, I.P.S.</h5>
                  <p>Director General of Prisons and Correctional Services</p>
                  <h5><a href="#">Message &raquo;</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="section-title">
                <h2>NEWS / EVENTS</h2>
              </div>
              <div class="box aos-init aos-animate box-back">
                <ul>
                  <li><i class="bx bx-check"></i> Prison unlockup Report</li>
                  <li>
                    <i class="bx bx-check"></i>சுதந்திர தின விழா -Independence
                    Day Message / Photos
                  </li>
                  <li><i class="bx bx-check"></i> Prisoner Reform</li>
                  <li>
                    <i class="bx bx-check"></i>
                    Become our Reformation Partner more
                  </li>
                </ul>
                <div><h5><a href="#">more &raquo;</a></h5></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
        <div class="container" data-aos="fade-up" style="margin-bottom: 10px">
          <div class="section-title">
            <h2>Prisons</h2>
            <p>Prisons Dashboard</p>
          </div>
          <div class="row no-gutters">
            <div class="col d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="9"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <!-- <p>
                  <strong>Happy Clients</strong> consequuntur quae qui deca rode
                </p> -->
                <a href="#">Central Prisons &raquo;</a>
              </div>
            </div>

            <div class="col d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-journal-richtext"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="5"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <!-- <p>
                  <strong>Projects</strong> adipisci atque cum quia aut numquam
                  delectus
                </p> -->
                <a href="#">Special prison for women &raquo;</a>
              </div>
            </div>

            <div class="col d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-headset"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="12"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <!-- <p>
                  <strong>Hours Of Support</strong> aut commodi quaerat. Aliquam
                  ratione
                </p> -->
                <a href="#">Borstal School &raquo;</a>
              </div>
            </div>

            <div class="col d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="14"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <!-- <p>
                  <strong>Hard Workers</strong> rerum asperiores dolor molestiae
                  doloribu
                </p> -->
                <a href="#">District Jails &raquo;</a>
              </div>
            </div>

            <div class="col d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="96"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <!-- <p>
                  <strong>Hard Workers</strong> rerum asperiores dolor molestiae
                  doloribu
                </p> -->
                <a href="#">Sub Jails&raquo;</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="counts" class="counts">
        <div class="container" data-aos="fade-up" style="margin-bottom: 10px">
          <div class="section-title">
            <h2>Prisons</h2>
            <p>Prisons Population</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
               <div class="mt-5">
                  <div class="row mb-5">
                    <h4>Authorised Accommodation</h4>
                    <div class="row no-gutters mb-5">
                      <div class="col d-md-flex align-items-md-stretch">
                        <div class="count-box">
                          <i class="bi bi-emoji-smile"></i>
                          <span
                            data-purecounter-start="0"
                            data-purecounter-end="21044"
                            data-purecounter-duration="1"
                            class="purecounter"
                          ></span>
                          <!-- <p>
                            <strong>Happy Clients</strong> consequuntur quae qui deca rode
                          </p> -->
                          <a href="#">Male &raquo;</a>
                        </div>
                      </div>

                      <div class="col d-md-flex align-items-md-stretch">
                        <div class="count-box">
                          <i class="bi bi-journal-richtext"></i>
                          <span
                            data-purecounter-start="0"
                            data-purecounter-end="2548"
                            data-purecounter-duration="1"
                            class="purecounter"
                          ></span>
                          <!-- <p>
                            <strong>Projects</strong> adipisci atque cum quia aut numquam
                            delectus
                          </p> -->
                          <a href="#">Female &raquo;</a>
                        </div>
                      </div>

                      <div class="col d-md-flex align-items-md-stretch">
                        <div class="count-box">
                          <i class="bi bi-headset"></i>
                          <span
                            data-purecounter-start="0"
                            data-purecounter-end="23598"
                            data-purecounter-duration="1"
                            class="purecounter"
                          ></span>
                          <!-- <p>
                              <strong>Hours Of Support</strong> aut commodi quaerat. Aliquam
                              ratione
                            </p> -->
                          <a href="#">Total &raquo;</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <h4>Actual Prison Population</h4>
                  <div class="row no-gutters mb-4">
                    <div class="col d-md-flex align-items-md-stretch">
                      <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span
                          data-purecounter-start="0"
                          data-purecounter-end="13985"
                          data-purecounter-duration="1"
                          class="purecounter"
                        ></span>
                        <!-- <p>
                          <strong>Happy Clients</strong> consequuntur quae qui deca rode
                        </p> -->
                        <a href="#">Male &raquo;</a>
                      </div>
                    </div>
                    <div class="col d-md-flex align-items-md-stretch">
                      <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span
                          data-purecounter-start="0"
                          data-purecounter-end="611"
                          data-purecounter-duration="1"
                          class="purecounter"
                        ></span>
                        <!-- <p>
                          <strong>Projects</strong> adipisci atque cum quia aut numquam
                          delectus
                        </p> -->
                        <a href="#">Female &raquo;</a>
                      </div>
                    </div>
                    <div class="col d-md-flex align-items-md-stretch">
                      <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span
                          data-purecounter-start="0"
                          data-purecounter-end="14596"
                          data-purecounter-duration="1"
                          class="purecounter"
                        ></span>
                        <!-- <p>
                          <strong>Hours Of Support</strong> aut commodi quaerat. Aliquam
                          ratione
                        </p> -->
                        <a href="#">Total &raquo;</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div><img src="images/prisons_collage_new.jpg" style="width: 100%;height: 454px;" alt=""></div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Counts Section -->

      <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
          <div class="row content">
            <div
              class="col-lg-4 align-items-stretch video-box"
              style="background-image: url('images/prison_reform_photo.jpg')"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <a href="#" class="mb-4"></a>
            </div>

            <div class="col-lg-4 justify-content-center align-items-stretch">
              <div class="content">
                <h5>REFORMATION OF PRISONERS</h5>
              </div>
              <ul>
                <li><i class="ri-check-double-line"></i>Yoga and Meditation</li>
                <li><i class="ri-check-double-line"></i>Counselling</li>
                <li><i class="ri-check-double-line"></i>Education</li>
                <li><i class="ri-check-double-line"></i>Vocational Training</li>
                <li>
                  <i class="ri-check-double-line"></i>Industries in Prison
                </li>
                <li><i class="ri-check-double-line"></i>Prison Bazaars</li>
                <li>
                  <i class="ri-check-double-line"></i>Become Reformation Partner
                </li>
              </ul>
            </div>
            <div class="col-lg-4 justify-content-center align-items-stretch">
              <div class="content">
                <h5>PRISONER’S CORNER</h5>
              </div>
              <ul>
                <li><i class="ri-check-double-line"></i>Prisoners Adalat</li>
                <li>
                  <i class="ri-check-double-line"></i>Prisoner's Interview
                  (Visiting Prisoners)
                </li>
                <li><i class="ri-check-double-line"></i>Prisoners' Welfare</li>
                <li><i class="ri-check-double-line"></i>Types of Sentence</li>
                <li>
                  <i class="ri-check-double-line"></i>Punishments for Prison
                  offence
                </li>
                <li><i class="ri-check-double-line"></i>Parole Release</li>
                <li><i class="ri-check-double-line"></i>Premature Release</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Services</h2>
            <p>Check our Services</p>
          </div>

          <div class="row">
            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4>
                  <a href="https://eprisons.nic.in/public/MyVisitRegistration"
                    >eMulakat</a
                  >
                </h4>
                <p>Instant Visit Request to meet your wards</p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4>
                  <a href="https://eprisons.nic.in/citizenservice/"
                    >Citizen Services</a
                  >
                </h4>
                <p>
                  Please register your details to avail the various online
                  services
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="https://eprisons.nic.in/">Prison Bazaar</a></h4>
                <p>
                  Support the inmates by purchasing the items produced in prison
                  factory.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4>
                  <a href="https://eprisons.nic.in/public/grievance"
                    >Submit Grievances</a
                  >
                </h4>

                <p>
                  Submit grievances of your wards lodged inside the prison
                  online
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4>
                  <a href="https://eprisons.nic.in/public/DashBoard"
                    >eprison Dashboard</a
                  >
                </h4>
                <p>
                  Statistics on Nation wide prison population: Inmates inside,
                  Admissions, Releases etc.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="https://eprisons.nic.in/">NPIP - ePrisons</a></h4>
                <p>National Prisons Information Portal</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- Tenders Recruitments RTI -->
    <section id="tenders" class="tenders section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4">
            <a href="#"><h4>Tenders</h4></a>
          </div>
          <div class="col-lg-4">
            <div class="text-center">
              <a href="#"><h4>Recruitments</h4></a>
            </div>
          </div>
          <div class="col-lg-4">
            <a href="#"><h4>RTI</h4></a>
          </div>
        </div>
      </div>
    </section>

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Gallery</h2>
            <p>Photo Gallery</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Prisons</li>
                <li data-filter=".filter-card">Events</li>
                <li data-filter=".filter-web">Functions</li>
              </ul>
            </div>
          </div>

          <div
            class="row portfolio-container"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="images/prison_bazar.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a
                  href="images/prison_carpentery.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="App 1"
                  ><i class="bx bx-plus"></i
                ></a>
                <a
                  href="portfolio-details.html"
                  class="details-link"
                  title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img
                src="images/prison_trichy_yoga.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a
                  href="images/prison_yoga_tailoring.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="App 2"
                  ><i class="bx bx-plus"></i
                ></a>
                <a
                  href="portfolio-details.html"
                  class="details-link"
                  title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="images/prison_adalat1.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a
                  href="images/prison_adalat1.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="App 3"
                  ><i class="bx bx-plus"></i
                ></a>
                <a
                  href="portfolio-details.html"
                  class="details-link"
                  title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="images/puzhal_prison1.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <a
                  href="assets/img/portfolio/portfolio-5.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Web 2"
                  ><i class="bx bx-plus"></i
                ></a>
                <a
                  href="portfolio-details.html"
                  class="details-link"
                  title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img
                src="images/prison_female_yoga.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a
                  href="images/prison_kavalars.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Web 3"
                  ><i class="bx bx-plus"></i
                ></a>
                <a
                  href="portfolio-details.html"
                  class="details-link"
                  title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img
                src="images/prison_carpentery.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <a
                  href="images/prison_yoga_tailoring.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Card 1"
                  ><i class="bx bx-plus"></i
                ></a>
                <a
                  href="portfolio-details.html"
                  class="details-link"
                  title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div> -->

            <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="images/prison_yoga_vlr.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a
                  href="images/prison_ypga_cbe.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Card 2"
                  ><i class="bx bx-plus"></i
                ></a>
                <a
                  href="portfolio-details.html"
                  class="details-link"
                  title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="images/prison_ypga_cbe.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a
                  href="images/prison_trichy_yoga.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Card 3"
                  ><i class="bx bx-plus"></i
                ></a>
                <a
                  href="portfolio-details.html"
                  class="details-link"
                  title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div> -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="images/prison_bazar.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a
                  href="images/prison_kavalars.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Web 3"
                  ><i class="bx bx-plus"></i
                ></a>
                <a
                  href="portfolio-details.html"
                  class="details-link"
                  title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- ======= Team Section ======= -->
      <!-- <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Team</h2>
            <p>Check our Team</p>
          </div>

          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <img
                  src="assets/img/team/team-1.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
              <div class="member" data-aos="zoom-in" data-aos-delay="200">
                <img
                  src="assets/img/team/team-2.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <img
                  src="assets/img/team/team-3.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
              <div class="member" data-aos="zoom-in" data-aos-delay="400">
                <img
                  src="assets/img/team/team-4.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Team Section -->

      <!-- ======= Pricing Section ======= -->
      <!-- <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Pricing</h2>
            <p>Our Competing Prices</p>
          </div>

          <div class="row align-items-center">
            <div class="col-lg-4">
              <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <h3>Free</h3>
                <h4>$0<span>per month</span></h4>
                <ul>
                  <li>
                    <i class="bx bx-check"></i> Quam adipiscing vitae proin
                  </li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li>
                    <i class="bx bx-check"></i> Nulla at volutpat diam uteera
                  </li>
                  <li class="na">
                    <i class="bx bx-x"></i>
                    <span>Pharetra massa massa ultricies</span>
                  </li>
                  <li class="na">
                    <i class="bx bx-x"></i>
                    <span>Massa ultricies mi quis hendrerit</span>
                  </li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
                <h3>Business</h3>
                <h4>$29<span>per month</span></h4>
                <ul>
                  <li>
                    <i class="bx bx-check"></i> Quam adipiscing vitae proin
                  </li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li>
                    <i class="bx bx-check"></i> Nulla at volutpat diam uteera
                  </li>
                  <li>
                    <i class="bx bx-check"></i> Pharetra massa massa ultricies
                  </li>
                  <li>
                    <i class="bx bx-check"></i> Massa ultricies mi quis
                    hendrerit
                  </li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <h3>Developer</h3>
                <h4>$49<span>per month</span></h4>
                <ul>
                  <li>
                    <i class="bx bx-check"></i> Quam adipiscing vitae proin
                  </li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li>
                    <i class="bx bx-check"></i> Nulla at volutpat diam uteera
                  </li>
                  <li>
                    <i class="bx bx-check"></i> Pharetra massa massa ultricies
                  </li>
                  <li>
                    <i class="bx bx-check"></i> Massa ultricies mi quis
                    hendrerit
                  </li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Pricing Section -->

      <!-- ======= Frequently Asked Questions Section ======= -->
      <!-- <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
          </div>

          <div
            class="row faq-item d-flex align-items-stretch"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="col-lg-5">
              <i class="bx bx-help-circle"></i>
              <h4>Non consectetur a erat nam at lectus urna duis?</h4>
            </div>
            <div class="col-lg-7">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id
                volutpat lacus laoreet non curabitur gravida. Venenatis lectus
                magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </div>

          <div
            class="row faq-item d-flex align-items-stretch"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="col-lg-5">
              <i class="bx bx-help-circle"></i>
              <h4>
                Feugiat scelerisque varius morbi enim nunc faucibus a
                pellentesque?
              </h4>
            </div>
            <div class="col-lg-7">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant
                morbi. Id interdum velit laoreet id donec ultrices. Fringilla
                phasellus faucibus scelerisque eleifend donec pretium. Est
                pellentesque elit ullamcorper dignissim.
              </p>
            </div>
          </div>

          <div
            class="row faq-item d-flex align-items-stretch"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="col-lg-5">
              <i class="bx bx-help-circle"></i>
              <h4>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant
                morbi?
              </h4>
            </div>
            <div class="col-lg-7">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices
                sagittis orci. Faucibus pulvinar elementum integer enim. Sem
                nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                pellentesque eu tincidunt. Lectus urna duis convallis convallis
                tellus.
              </p>
            </div>
          </div>

          <div
            class="row faq-item d-flex align-items-stretch"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <div class="col-lg-5">
              <i class="bx bx-help-circle"></i>
              <h4>
                Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
              </h4>
            </div>
            <div class="col-lg-7">
              <p>
                Aperiam itaque sit optio et deleniti eos nihil quidem cumque.
                Voluptas dolorum accusantium sunt sit enim. Provident
                consequuntur quam aut reiciendis qui rerum dolorem sit odio.
                Repellat assumenda soluta sunt pariatur error doloribus fuga.
              </p>
            </div>
          </div>

          <div
            class="row faq-item d-flex align-items-stretch"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <div class="col-lg-5">
              <i class="bx bx-help-circle"></i>
              <h4>
                Tempus quam pellentesque nec nam aliquam sem et tortor
                consequat?
              </h4>
            </div>
            <div class="col-lg-7">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo.
                Dignissim suspendisse in est ante in. Nunc vel risus commodo
                viverra maecenas accumsan. Sit amet nisl suscipit adipiscing
                bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Frequently Asked Questions Section -->

      <!-- ======= Contact Section ======= -->
      <!-- <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@example.com<br />contact@example.com</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55<br />+1 6678 254445 41</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <form
                action="forms/contact.php"
                method="post"
                role="form"
                class="php-email-form"
              >
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="form-group mt-3">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->
    <?php include("inc/footer.php");?>