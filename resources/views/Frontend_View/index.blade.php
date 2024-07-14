@extends('Layout/Layout')
@section('Body_Content')
<main class="site-content">
    <!-- start: Hero Area -->
    <section class="tj-hero-section">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-7">
                <div class="hero-left-content">
                   <div class="tj-sec-heading">
                      <span class="hero-sub-title wow fadeInUp" data-wow-delay="0.3s">Creative Thinking</span>
                      <h1 class="hero-title wow fadeInUp" data-wow-delay=".5s">
                         Strategic Thinking, Tangible <span class="title"> Results for Business!</span>
                      </h1>
                      <div class="desc wow fadeInUp" data-wow-delay="0.7s">
                         <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.
                         </p>
                      </div>

                      <div class="hero-button d-flex wow fadeInUp" data-wow-delay=".9s">
                         <a class="tj-primary-btn" href="contact.html"> Explore Now</a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-5">
                <div class="hero-image-group wow fadeInRight" data-wow-delay="1s">
                   <div class="group-image1 shake-y">
                      <img class="image" src="assets/images/hero/hero-1.png" alt="Image" />
                   </div>
                   <div class="group-image2 pulse">
                      <img src="assets/images/hero/hero-2.png" alt="Image" />
                   </div>
                   <img class="group-image3" src="assets/images/shape/shape-5.svg" alt="Image" />
                   <img class="group-image4 pulse" src="assets/images/shape/shape-6.svg" alt="Image" />
                   <img class="group-image5 pulse" src="assets/images/shape/shape-7.svg" alt="Image" />
                   <img class="group-image6 pulse" src="assets/images/shape/shape-8.svg" alt="Image" />
                </div>
             </div>
          </div>
       </div>
       <div class="hero-shape">
          <img src="assets/images/shape/shape-1.svg" alt="Shape" />
       </div>
       <div class="hero-shape1">
          <img src="assets/images/shape/shape-2.svg" alt="Shape" />
       </div>
       <div class="hero-shape2 pulse">
          <img src="assets/images/shape/shape-3.svg" alt="Shape" />
       </div>
       <div class="hero-shape3 shake-y">
          <img src="assets/images/shape/shape-4.svg" alt="Shape" />
       </div>
       <div class="hero-scroll">
          <img src="assets/images/icon/scroll-bg.svg" alt="Bg" />
          <div class="scroll-icon jump">
             <a href="#scroll-bottom"><img src="assets/images/icon/scroll.svg" alt="Icon" /></a>
          </div>
       </div>
    </section>
    <!-- end: Hero Area -->

    <!-- start: About Area -->
    <section id="scroll-bottom" class="tj-about-section">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-xl-6 col-lg-12">
                <div class="about-image-group wow fadeInLeft" data-wow-delay="1s">
                   <div class="about-circle-box">
                      <img class="circle-one" src="assets/images/shape/ab-shape.svg" alt="Shape" />
                      <div class="ab-circle">
                         <svg class="shape-1" viewBox="0 0 100 100" width="100" height="100">
                            <defs>
                               <path
                                  id="circle"
                                  d="
                                             M 50, 50
                                             m -37, 0
                                             a 37,37 0 1,1 74,0
                                             a 37,37 0 1,1 -74,0"
                               />
                            </defs>
                            <text font-size="15">
                               <textPath xlink:href="#circle" class="shape-1">Creative Minds_, Creative Minds_</textPath>
                            </text>
                         </svg>
                      </div>
                   </div>
                   <div class="about-image1 pulse">
                      <img src="assets/images/about/about-1.png" alt="Image" />
                   </div>
                   <div class="about-image2 pulse">
                      <img src="assets/images/about/about-2.png" alt="Image" />
                   </div>
                   <div class="about-image3 pulse">
                      <img src="assets/images/about/about-3.png" alt="Image" />
                   </div>
                   <div class="about-image4 pulse">
                      <img src="assets/images/about/about-4.png" alt="Image" />
                   </div>
                   <div class="about-shape1 shake-y">
                      <img src="assets/images/shape/shape-9.svg" alt="Shape" />
                   </div>
                   <div class="about-shape2 pulse">
                      <img src="assets/images/shape/shape-10.svg" alt="Shape" />
                   </div>
                   <div class="about-shape3 pulse">
                      <img src="assets/images/shape/shape-13.svg" alt="Shape" />
                   </div>
                </div>
             </div>
             <div class="col-xl-6 col-lg-12">
                <div class="about-content-one">
                   <div class="tj-sec-heading">
                      <span class="sub-title wow fadeInUp" data-wow-delay=".3s"> About Us</span>
                      <h2 class="sec-title wow fadeInUp" data-wow-delay=".5s">Making Your Business More Unique</h2>
                      <div class="desc wow fadeInUp" data-wow-delay=".7s">
                         <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some
                            form, by injected humour, or randomised words which don't look even slightly believable.
                         </p>
                         <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some
                            form,
                         </p>
                         <p>by injected humour, or randomised words which don't look even slightly believable.</p>
                      </div>
                      <div class="about-button d-flex wow fadeInUp" data-wow-delay=".9s">
                         <a href="about-us.html" class="tj-secondary-btn btn-border"><span>Read More</span></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="about-section-shape pulse">
          <img src="assets/images/shape/shape-37.svg" alt="Shape" />
       </div>
    </section>
    <!-- end: About Area -->

    <!-- start: Counter Area -->
    <section class="tj-counter-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="counter-content-area">
                   <div class="counter-item">
                      <div class="tj-count"><span class="odometer" data-count="254">0</span>+</div>
                      <span class="sub-title">Project Complete</span>
                   </div>
                   <div class="counter-item">
                      <div class="tj-count"><span class="odometer" data-count="164">0</span>+</div>
                      <span class="sub-title">Quality Team Member</span>
                   </div>
                   <div class="counter-item">
                      <div class="tj-count"><span class="odometer" data-count="433">0</span>+</div>
                      <span class="sub-title">Awards Winning</span>
                   </div>
                   <div class="counter-item">
                      <div class="tj-count"><span class="odometer" data-count="30">0</span>+</div>
                      <span class="sub-title">Years Of Experience</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="counter-section-shape">
          <div class="counter_shape">
             <img src="assets/images/shape/counter-shape.svg" alt="Shape" />
          </div>
          <div class="counter_shape1">
             <img src="assets/images/shape/counter-shape1.svg" alt="Shape" />
          </div>
       </div>
    </section>
    <!-- end: Counter Area -->

    <!-- start: Service Area -->
    <section class="tj-service-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tj-sec-heading text-center">
                   <span class="sub-title wow fadeInUp" data-wow-delay=".3s"> Our Services</span>
                   <h2 class="sec-title wow fadeInUp" data-wow-delay=".4s">Service We Provide</h2>
                   <div class="desc wow fadeInUp" data-wow-delay=".5s">
                      <p>
                         It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                         It was popularised in the 1960s with the release
                      </p>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tj-service-item text-center wow fadeInUp" data-wow-delay=".3s">
                   <div class="service-inner">
                      <div class="service-icon">
                         <i class="flaticon-design"></i>
                         <img class="image-1" src="assets/images/shape/service-image.svg" alt="Shape" />
                         <img class="image-2" src="assets/images/shape/service-image1.svg" alt="Shape" />
                      </div>
                      <div class="service-content">
                         <h4 class="title-link">
                            <a href="service-details.html">Logo Design</a>
                         </h4>
                         <p>
                            look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum, and a search
                            for
                         </p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tj-service-item text-center wow fadeInUp" data-wow-delay=".4s">
                   <div class="service-inner">
                      <div class="service-icon">
                         <i class="flaticon-graphic-design-1"></i>
                         <img class="image-1" src="assets/images/shape/service-image.svg" alt="Shape" />
                         <img class="image-2" src="assets/images/shape/service-image1.svg" alt="Shape" />
                      </div>
                      <div class="service-content">
                         <h4 class="title-link">
                            <a href="service-details.html">Web Design</a>
                         </h4>
                         <p>
                            look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum, and a search
                            for
                         </p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tj-service-item text-center wow fadeInUp" data-wow-delay=".5s">
                   <div class="service-inner">
                      <div class="service-icon">
                         <i class="flaticon-ui-design"></i>
                         <img class="image-1" src="assets/images/shape/service-image.svg" alt="Shape" />
                         <img class="image-2" src="assets/images/shape/service-image1.svg" alt="Shape" />
                      </div>
                      <div class="service-image"></div>
                      <div class="service-content">
                         <h4 class="title-link">
                            <a href="service-details.html">Mobile Apps</a>
                         </h4>
                         <p>
                            look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum, and a search
                            for
                         </p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tj-service-item text-center wow fadeInUp" data-wow-delay=".6s">
                   <div class="service-inner">
                      <div class="service-icon">
                         <i class="flaticon-megaphone"></i>
                         <img class="image-1" src="assets/images/shape/service-image.svg" alt="Shape" />
                         <img class="image-2" src="assets/images/shape/service-image1.svg" alt="Shape" />
                      </div>
                      <div class="service-content">
                         <h4 class="title-link">
                            <a href="service-details.html">Digital Marketing</a>
                         </h4>
                         <p>
                            look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum, and a search
                            for
                         </p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="service-button text-center wow fadeInUp" data-wow-delay=".7s">
                <a href="service-details.html" class="tj-secondary-btn btn-border"><span>View Details</span></a>
             </div>
          </div>
       </div>
       <div class="service-section-shape">
          <div class="service-bg-shape pulse">
             <img src="assets/images/shape/shape-14.svg" alt="Shape" />
          </div>
          <div class="service-bg-shape1">
             <img src="assets/images/shape/shape-15.svg" alt="Shape" />
          </div>
          <div class="service-bg-shape2">
             <img src="assets/images/shape/shape-14.svg" alt="Shape" />
          </div>
          <div class="service-bg-shape3 pulse">
             <img src="assets/images/shape/shape-15.svg" alt="Shape" />
          </div>
          <div class="service-bg-shape4 pulse">
             <img src="assets/images/shape/shape-16.svg" alt="Shape" />
          </div>
       </div>
    </section>
    <!-- end: Service Area -->

    <!-- start: Testimonial Area -->
    <section class="tj-testimonial-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="testimonial-top-area">
                   <div class="tj-sec-heading">
                      <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Testimonials</span>
                      <h2 class="sec-title wow fadeInUp" data-wow-delay=".4s">What Our Customer Say About Us</h2>
                   </div>
                   <div class="testimonial-right-content wow fadeInRight" data-wow-delay=".5s">
                      <p>
                         It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                         It was popularised in the 1960s with the release
                      </p>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="container testimonial-slider wow fadeInUp" data-wow-delay=".3s">
          <div class="row">
             <div class="col-lg-12">
                <div class="swiper tj-testimonial-slider">
                   <div class="swiper-wrapper">
                      <div class="swiper-slide">
                         <div class="testimonial-item">
                            <div class="testimonial-top-content">
                               <div class="testimonial-left-content">
                                  <div class="auother-image">
                                     <img src="assets/images/testimonial/test-1.png" alt="Image" />
                                  </div>
                                  <div class="auother-text">
                                     <h4 class="title">Erika Wagner</h4>
                                     <span class="sub-title"> Chief lil UX Designer</span>
                                  </div>
                               </div>
                               <div class="testimonial-right-content">
                                  <div class="testimonial-rating">
                                     <ul class="dot-style">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-regular fa-star-half-stroke"></i></li>
                                     </ul>
                                  </div>
                                  <div class="testimonial-quote">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="60" height="44" viewBox="0 0 60 44" fill="none">
                                        <g opacity="0.3">
                                           <path
                                              d="M0.573543 43.6491C0.382362 42.3418 0.238976 40.9878 0.143385 39.5872C0.0477951 38.1865 0 37.1594 0 36.5057C0 30.2495 1.14709 24.3201 3.44126 18.7175C5.73543 13.0215 8.55535 8.21259 11.901 4.29077L26.9565 7.65233C25.1403 11.6675 23.6586 16.1963 22.5116 21.2386C21.4601 26.281 20.9343 31.0899 20.9343 35.6653C20.9343 35.8521 20.9343 36.2723 20.9343 36.9259C20.9343 37.4862 20.9343 38.1865 20.9343 39.0269C21.0299 39.7739 21.0777 40.5676 21.0777 41.408C21.1733 42.2484 21.2689 42.9954 21.3645 43.6491H0.573543Z"
                                              fill="#DCDEE7"
                                           />
                                           <path
                                              d="M59.4259 0.0126953C59.6171 1.31997 59.7605 2.67393 59.8561 4.07458C59.9517 5.47523 59.9995 6.50238 59.9995 7.15602C59.9995 13.4123 58.8524 19.3884 56.5582 25.0843C54.2641 30.687 51.4441 35.4492 48.0985 39.371L33.043 36.0094C34.8592 31.9942 36.293 27.4654 37.3445 22.4231C38.4916 17.3808 39.0652 12.5719 39.0652 7.9964C39.0652 7.80965 39.0652 7.43614 39.0652 6.87588C39.0652 6.22224 39.0174 5.52192 38.9218 4.77491C38.9218 3.93451 38.874 3.09412 38.7784 2.25373C38.7784 1.41334 38.7306 0.66633 38.635 0.0126953H59.4259Z"
                                              fill="#DCDEE7"
                                           />
                                        </g>
                                     </svg>
                                  </div>
                               </div>
                            </div>
                            <h4 class="test-title">Customers Review</h4>
                            <p>
                               Many desktop publishing web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                               ipsum' will uncover many web sites still in
                            </p>
                         </div>
                      </div>
                      <div class="swiper-slide">
                         <div class="testimonial-item">
                            <div class="testimonial-top-content">
                               <div class="testimonial-left-content">
                                  <div class="auother-image">
                                     <img src="assets/images/testimonial/test-2.png" alt="Image" />
                                  </div>
                                  <div class="auother-text">
                                     <h4 class="title">Erika Wagner</h4>
                                     <span class="sub-title"> Chief lil UX Designer</span>
                                  </div>
                               </div>
                               <div class="testimonial-right-content">
                                  <div class="testimonial-rating">
                                     <ul class="dot-style">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-regular fa-star-half-stroke"></i></li>
                                     </ul>
                                  </div>
                                  <div class="testimonial-quote">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="60" height="44" viewBox="0 0 60 44" fill="none">
                                        <g opacity="0.3">
                                           <path
                                              d="M0.573543 43.6491C0.382362 42.3418 0.238976 40.9878 0.143385 39.5872C0.0477951 38.1865 0 37.1594 0 36.5057C0 30.2495 1.14709 24.3201 3.44126 18.7175C5.73543 13.0215 8.55535 8.21259 11.901 4.29077L26.9565 7.65233C25.1403 11.6675 23.6586 16.1963 22.5116 21.2386C21.4601 26.281 20.9343 31.0899 20.9343 35.6653C20.9343 35.8521 20.9343 36.2723 20.9343 36.9259C20.9343 37.4862 20.9343 38.1865 20.9343 39.0269C21.0299 39.7739 21.0777 40.5676 21.0777 41.408C21.1733 42.2484 21.2689 42.9954 21.3645 43.6491H0.573543Z"
                                              fill="#DCDEE7"
                                           />
                                           <path
                                              d="M59.4259 0.0126953C59.6171 1.31997 59.7605 2.67393 59.8561 4.07458C59.9517 5.47523 59.9995 6.50238 59.9995 7.15602C59.9995 13.4123 58.8524 19.3884 56.5582 25.0843C54.2641 30.687 51.4441 35.4492 48.0985 39.371L33.043 36.0094C34.8592 31.9942 36.293 27.4654 37.3445 22.4231C38.4916 17.3808 39.0652 12.5719 39.0652 7.9964C39.0652 7.80965 39.0652 7.43614 39.0652 6.87588C39.0652 6.22224 39.0174 5.52192 38.9218 4.77491C38.9218 3.93451 38.874 3.09412 38.7784 2.25373C38.7784 1.41334 38.7306 0.66633 38.635 0.0126953H59.4259Z"
                                              fill="#DCDEE7"
                                           />
                                        </g>
                                     </svg>
                                  </div>
                               </div>
                            </div>
                            <h4 class="test-title">Customers Review</h4>
                            <p>
                               Many desktop publishing web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                               ipsum' will uncover many web sites still in
                            </p>
                         </div>
                      </div>
                      <div class="swiper-slide">
                         <div class="testimonial-item">
                            <div class="testimonial-top-content">
                               <div class="testimonial-left-content">
                                  <div class="auother-image">
                                     <img src="assets/images/testimonial/test-3.png" alt="Image" />
                                  </div>
                                  <div class="auother-text">
                                     <h4 class="title">Erika Wagner</h4>
                                     <span class="sub-title"> Chief lil UX Designer</span>
                                  </div>
                               </div>
                               <div class="testimonial-right-content">
                                  <div class="testimonial-rating">
                                     <ul class="dot-style">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-regular fa-star-half-stroke"></i></li>
                                     </ul>
                                  </div>
                                  <div class="testimonial-quote">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="60" height="44" viewBox="0 0 60 44" fill="none">
                                        <g opacity="0.3">
                                           <path
                                              d="M0.573543 43.6491C0.382362 42.3418 0.238976 40.9878 0.143385 39.5872C0.0477951 38.1865 0 37.1594 0 36.5057C0 30.2495 1.14709 24.3201 3.44126 18.7175C5.73543 13.0215 8.55535 8.21259 11.901 4.29077L26.9565 7.65233C25.1403 11.6675 23.6586 16.1963 22.5116 21.2386C21.4601 26.281 20.9343 31.0899 20.9343 35.6653C20.9343 35.8521 20.9343 36.2723 20.9343 36.9259C20.9343 37.4862 20.9343 38.1865 20.9343 39.0269C21.0299 39.7739 21.0777 40.5676 21.0777 41.408C21.1733 42.2484 21.2689 42.9954 21.3645 43.6491H0.573543Z"
                                              fill="#DCDEE7"
                                           />
                                           <path
                                              d="M59.4259 0.0126953C59.6171 1.31997 59.7605 2.67393 59.8561 4.07458C59.9517 5.47523 59.9995 6.50238 59.9995 7.15602C59.9995 13.4123 58.8524 19.3884 56.5582 25.0843C54.2641 30.687 51.4441 35.4492 48.0985 39.371L33.043 36.0094C34.8592 31.9942 36.293 27.4654 37.3445 22.4231C38.4916 17.3808 39.0652 12.5719 39.0652 7.9964C39.0652 7.80965 39.0652 7.43614 39.0652 6.87588C39.0652 6.22224 39.0174 5.52192 38.9218 4.77491C38.9218 3.93451 38.874 3.09412 38.7784 2.25373C38.7784 1.41334 38.7306 0.66633 38.635 0.0126953H59.4259Z"
                                              fill="#DCDEE7"
                                           />
                                        </g>
                                     </svg>
                                  </div>
                               </div>
                            </div>
                            <h4 class="test-title">Customers Review</h4>
                            <p>
                               Many desktop publishing web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                               ipsum' will uncover many web sites still in
                            </p>
                         </div>
                      </div>
                   </div>
                   <div class="swiper-pagination"></div>
                </div>
             </div>
          </div>
       </div>
       <div class="testimonial-section-shape">
          <div class="testmonial-shape1">
             <img src="assets/images/shape/shape-17.svg" alt="Shape" />
          </div>
          <div class="testmonial-shape2">
             <img src="assets/images/shape/shape-15.svg" alt="Shape" />
          </div>
          <div class="testmonial-shape3 pulse">
             <img src="assets/images/shape/shape-15.svg" alt="Shape" />
          </div>
          <div class="testmonial-shape4 pulse">
             <img src="assets/images/shape/shape-18.svg" alt="Shape" />
          </div>
       </div>
    </section>
    <!-- end: Testimonial Area -->

    <!-- start: Team Area -->
    <section class="tj-team-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tj-sec-heading text-center">
                   <span class="sub-title wow fadeInUp" data-wow-delay=".3s">How We Work</span>
                   <h2 class="sec-title wow fadeInUp" data-wow-delay=".4s">Meet Our Team</h2>
                   <div class="desc wow fadeInUp" data-wow-delay=".5s">
                      <p>
                         It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                         It was popularised in the 1960s with the release
                      </p>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="tj-team-item wow fadeInUp" data-wow-delay=".3s">
                   <div class="team-image">
                      <img src="assets/images/team/team-1.jpg" alt="Team" />
                   </div>
                   <div class="tj-team-content">
                      <div class="team-header">
                         <h5 class="title-link"><a href="#">Alex Deitarson</a></h5>
                         <span class="sub-title">UI/UX Designer</span>
                      </div>
                      <div class="team-share">
                         <ul class="dot-style">
                            <li>
                               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                               <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                               <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="tj-team-item wow fadeInUp" data-wow-delay=".4s">
                   <div class="team-image">
                      <img src="assets/images/team/team-2.jpg" alt="Team" />
                   </div>
                   <div class="tj-team-content">
                      <div class="team-header">
                         <h5 class="title-link"><a href="#">Alex Deitarson</a></h5>
                         <span class="sub-title">UI/UX Designer</span>
                      </div>
                      <div class="team-share">
                         <ul class="dot-style">
                            <li>
                               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                               <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                               <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="tj-team-item wow fadeInUp" data-wow-delay=".5s">
                   <div class="team-image">
                      <img src="assets/images/team/team-3.jpg" alt="Team" />
                   </div>
                   <div class="tj-team-content">
                      <div class="team-header">
                         <h5 class="title-link"><a href="#">Alex Deitarson</a></h5>
                         <span class="sub-title">UI/UX Designer</span>
                      </div>
                      <div class="team-share">
                         <ul class="dot-style">
                            <li>
                               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                               <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                               <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="tj-team-item wow fadeInUp" data-wow-delay=".6s">
                   <div class="team-image">
                      <img src="assets/images/team/team-4.jpg" alt="Team" />
                   </div>
                   <div class="tj-team-content">
                      <div class="team-header">
                         <h5 class="title-link"><a href="#">Alex Deitarson</a></h5>
                         <span class="sub-title">UI/UX Designer</span>
                      </div>
                      <div class="team-share">
                         <ul class="dot-style">
                            <li>
                               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                               <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                               <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
             <div class="team-button text-center wow fadeInUp" data-wow-delay=".7s">
                <a href="contact.html" class="tj-secondary-btn btn-border"><span>View More</span></a>
             </div>
          </div>
       </div>
       <div class="team-section-shape">
          <div class="team-bg-shape">
             <img src="assets/images/shape/team-shape1.svg" alt="Team" />
          </div>
          <div class="team-bg-shape1">
             <img src="assets/images/shape/team-shape2.svg" alt="Team" />
          </div>
          <div class="team-bg-shape2 pulse">
             <img src="assets/images/shape/shape-16.svg" alt="Team" />
          </div>
       </div>
    </section>
    <!-- end: Team Area -->

    <!-- Start: Portfolio Area -->
    <section class="tj-portfolio-section inc-colum default-padding">
       <div class="container">
          <div class="row align-items-end portfolio-header">
             <div class="col-lg-6">
                <div class="tj-sec-heading">
                   <span class="white-sub-title wow fadeInUp" data-wow-delay=".3s">Portfolio</span>
                   <h2 class="sec-title wow fadeInUp" data-wow-delay=".4s">Our Latest Work For Our Best Customer</h2>
                </div>
             </div>
             <div class="col-lg-6">
                <div class="filter-menu wow fadeInRight" data-wow-delay=".5s">
                   <button class="filter active" data-filter="*">All</button>
                   <button class="filter" data-filter=".development">Web Design</button>
                   <button class="filter" data-filter=".marketing">Digital Marketing</button>
                   <button class="filter" data-filter=".seo">SEO</button>
                </div>
             </div>
          </div>
       </div>
       <div class="container">
          <div class="portfolio-items-area wow fadeInUp" data-wow-delay=".7s">
             <div class="row">
                <div class="col-md-12 portfolio-content">
                   <div class="portfolio-gallery masonary">
                      <div id="portfolio-grid" class="portfolio-items colums-3" style="position: relative; height: 812.468px">
                         <div class="portfolio-single-item marketing finance" style="position: absolute; left: 0%; top: 352px">
                            <div class="portfolio-single">
                               <div class="portfolio-image">
                                  <a href="portfolio-details.html"><img src="assets/images/portfolio/portfolio-1.jpg" alt="Image" /></a>
                               </div>
                               <div class="portfolio-content">
                                  <h3 class="title-link">
                                     <a href="portfolio-details.html">Digital Marketing</a>
                                  </h3>
                                  <span class="sub-title">Marketing/Solution</span>
                               </div>
                            </div>
                         </div>
                         <div class="portfolio-single-item development finance" style="position: absolute; left: 66.5833%; top: 0px">
                            <div class="portfolio-single">
                               <div class="portfolio-image">
                                  <a href="portfolio-details.html"><img src="assets/images/portfolio/portfolio-2.jpg" alt="Image" /></a>
                               </div>
                               <div class="portfolio-content">
                                  <h3 class="title-link">
                                     <a href="portfolio-details.html">Web Development</a>
                                  </h3>
                                  <span class="sub-title">Marketing/Consulting</span>
                               </div>
                            </div>
                         </div>
                         <div class="portfolio-single-item capital development" style="position: absolute; left: 66.5833%; top: 352px">
                            <div class="portfolio-single">
                               <div class="portfolio-image">
                                  <a href="portfolio-details.html"><img src="assets/images/portfolio/portfolio-4.jpg" alt="Image" /></a>
                               </div>
                               <div class="portfolio-content">
                                  <h3 class="title-link">
                                     <a href="portfolio-details.html">UX/UI Design</a>
                                  </h3>
                                  <span class="sub-title">Marketing/Solution</span>
                               </div>
                            </div>
                         </div>
                         <div class="portfolio-single-item capital seo" style="position: absolute; left: 33.25%; top: 459px">
                            <div class="portfolio-single">
                               <div class="portfolio-image">
                                  <a href="portfolio-details.html"><img src="assets/images/portfolio/portfolio-3.jpg" alt="Image" /></a>
                               </div>
                               <div class="portfolio-content">
                                  <h3 class="title-link">
                                     <a href="portfolio-details.html"> Branding & SEO </a>
                                  </h3>
                                  <span class="sub-title">Marketing/ Desing Solution</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="portfolio-section-shape">
          <div class="portfolio-bg-shape">
             <img src="assets/images/shape/portfolio-shape.svg" alt="Shape" />
          </div>
          <div class="portfolio-bg-shape1">
             <img src="assets/images/shape/portfolio-shape1.svg" alt="Shape" />
          </div>
          <div class="portfolio-bg-shape2 shake-y">
             <img src="assets/images/shape/shape-19.svg" alt="Shape" />
          </div>
          <div class="portfolio-bg-shape3 pulse">
             <img src="assets/images/shape/shape-20.svg" alt="Shape" />
          </div>
          <div class="portfolio-bg-shape4 shake-y">
             <img src="assets/images/shape/shape-19.svg" alt="Shape" />
          </div>
          <div class="portfolio-bg-shape5 pulse">
             <img src="assets/images/shape/shape-23.svg" alt="Shape" />
          </div>
          <div class="portfolio-bg-shape6 pulse">
             <img src="assets/images/shape/shape-38.svg" alt="Shape" />
          </div>
       </div>
    </section>
    <!-- end: Portfolio Area -->

    <!-- start: FAQ Area -->
    <section class="tj-faq-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tj-sec-heading">
                   <span class="sub-title wow fadeInUp" data-wow-delay=".3s">F,A,Q</span>
                   <h2 class="sec-title wow fadeInUp" data-wow-delay=".4s">Our Expert Answers</h2>
                   <div class="desc wow fadeInUp" data-wow-delay=".5s">
                      <p>
                         All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true
                         generator on the Internet. It uses a dictionary of over 200 Latin words,
                      </p>
                   </div>
                </div>
             </div>
          </div>
          <div class="row align-items-center">
             <div class="col-lg-6">
                <div class="faq-image-group wow fadeInLeft" data-wow-delay=".7s">
                   <div class="faq-image1">
                      <div class="group-image pulse">
                         <img src="assets/images/about/about-1.png" alt="Image" />
                      </div>
                      <img class="group-shape pulse" src="assets/images/shape/shape-21.svg" alt="Shape" />
                      <img class="group-shape1 shake-y" src="assets/images/shape/shape-22.svg" alt="Shape" />
                      <img class="group-shape2 pulse" src="assets/images/about/about-4.png" alt="Image" />
                   </div>
                   <div class="faq-image3 pulse">
                      <img src="assets/images/about/about-3.png" alt="Image" />
                   </div>
                   <div class="faq-image2 pulse">
                      <div class="group-image">
                         <img src="assets/images/about/about-2.png" alt="Image" />
                      </div>
                      <img class="group-shape pulse" src="assets/images/shape/shape-24.svg" alt="Shape" />
                      <img class="group-shape1 shake-y" src="assets/images/shape/shape-50.svg" alt="Shape" />
                   </div>
                </div>
             </div>
             <div class="col-lg-6">
                <div class="tj-faq-area wow fadeInRight" data-wow-delay=".5s">
                   <div class="accordion tj-faq-style" id="accordionExample">
                      <div class="accordion-item">
                         <h2 class="accordion-header" id="headingOne">
                            <button
                               class="accordion-button"
                               type="button"
                               data-bs-toggle="collapse"
                               data-bs-target="#collapseOne"
                               aria-expanded="true"
                               aria-controls="collapseOne"
                            >
                               What is a Meet With some form digital platform
                            </button>
                         </h2>
                         <div
                            id="collapseOne"
                            class="accordion-collapse collapse show"
                            aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample"
                         >
                            <div class="accordion-body">
                               <strong
                                  >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                                  some form, by injected humour.</strong
                               >
                            </div>
                         </div>
                      </div>
                      <div class="accordion-item">
                         <h2 class="accordion-header" id="headingTwo">
                            <button
                               class="accordion-button collapsed"
                               type="button"
                               data-bs-toggle="collapse"
                               data-bs-target="#collapseTwo"
                               aria-expanded="false"
                               aria-controls="collapseTwo"
                            >
                               How Can A Digital Platform Helps Your Business Grow?
                            </button>
                         </h2>
                         <div
                            id="collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample"
                         >
                            <div class="accordion-body">
                               <strong
                                  >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                                  some form, by injected humour.</strong
                               >
                            </div>
                         </div>
                      </div>
                      <div class="accordion-item">
                         <h2 class="accordion-header" id="headingThree">
                            <button
                               class="accordion-button collapsed"
                               type="button"
                               data-bs-toggle="collapse"
                               data-bs-target="#collapseThree"
                               aria-expanded="false"
                               aria-controls="collapseThree"
                            >
                               How Do I Book My Slot To Meet With Your Technical Team?
                            </button>
                         </h2>
                         <div
                            id="collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                         >
                            <div class="accordion-body">
                               <strong
                                  >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                                  some form, by injected humour.</strong
                               >
                            </div>
                         </div>
                      </div>
                      <div class="accordion-item">
                         <h2 class="accordion-header" id="headingFour">
                            <button
                               class="accordion-button collapsed"
                               type="button"
                               data-bs-toggle="collapse"
                               data-bs-target="#collapseFour"
                               aria-expanded="false"
                               aria-controls="collapseFour"
                            >
                               How Many Projects Hove Your Completed So far?
                            </button>
                         </h2>
                         <div
                            id="collapseFour"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample"
                         >
                            <div class="accordion-body">
                               <strong
                                  >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                                  some form, by injected humour.</strong
                               >
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="accordion-shape">
                      <img src="assets/images/shape/shape-26.svg" alt="Shape" />
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="faq-section-shape">
          <div class="faq-bg-shape pulse">
             <img src="assets/images/shape/faq-shape.svg" alt="Shape" />
          </div>
       </div>
    </section>
    <!-- end: FAQ Area -->

    <!-- start: Blog Area -->
    <section class="tj-blog-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tj-sec-heading text-center">
                   <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Latest Blog</span>
                   <h2 class="sec-title wow fadeInUp" data-wow-delay=".4s">Latest Blog Posts</h2>
                   <div class="desc wow fadeInUp" data-wow-delay=".5s">
                      <p>
                         All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true
                         generator on the Internet. It uses a dictionary of over 200 Latin words,
                      </p>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-4 col-md-6">
                <div class="tj-blog-item wow fadeInUp" data-wow-delay=".3s">
                   <div class="blog-image">
                      <a href="blog-details.html"><img src="assets/images/blog/blog-1.jpg" alt="Image" /></a>
                   </div>
                   <div class="blog-content-area">
                      <div class="blog-meta">
                         <span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
                         <span><i class="flaticon-group"></i>By <a href="blog-details.html"> Admin</a></span>
                      </div>
                      <h4 class="title-link">
                         <a href="blog-details.html">Simple Proctives that will help you better every day</a>
                      </h4>
                      <div class="desc">
                         <p>
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
                            for.
                         </p>
                      </div>
                      <div class="tj-blog-button">
                         <a href="blog-details.html" class="tj-secondary-btn btn-border"><span>Read More</span></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6">
                <div class="tj-blog-item wow fadeInUp" data-wow-delay=".4s">
                   <div class="blog-image">
                      <a href="blog-details.html"><img src="assets/images/blog/blog-2.jpg" alt="Image" /></a>
                   </div>
                   <div class="blog-content-area">
                      <div class="blog-meta">
                         <span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
                         <span><i class="flaticon-group"></i>By <a href="blog-details.html"> Admin</a></span>
                      </div>
                      <h4 class="title-link">
                         <a href="blog-details.html">Frigilla lectus honcus anteom mode vehicul</a>
                      </h4>
                      <div class="desc">
                         <p>
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
                            for.
                         </p>
                      </div>
                      <div class="tj-blog-button">
                         <a href="blog-details.html" class="tj-secondary-btn btn-border"><span>Read More</span></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6">
                <div class="tj-blog-item wow fadeInUp" data-wow-delay=".5s">
                   <div class="blog-image">
                      <a href="blog-details.html"><img src="assets/images/blog/blog-3.jpg" alt="Image" /></a>
                   </div>
                   <div class="blog-content-area">
                      <div class="blog-meta">
                         <span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
                         <span><i class="flaticon-group"></i>By <a href="blog-details.html">Admin</a></span>
                      </div>
                      <h4 class="title-link">
                         <a href="blog-details.html">Proin mauris risus turpis or nare felis aptent nisl</a>
                      </h4>
                      <div class="desc">
                         <p>
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
                            for.
                         </p>
                      </div>
                      <div class="tj-blog-button">
                         <a href="blog-details.html" class="tj-secondary-btn btn-border"><span>Read More</span></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="blog-section-shape">
          <div class="blog-bg-shape">
             <img src="assets/images/shape/blog-bg-shape.svg" alt="Shape" />
          </div>
          <div class="blog-bg-shape1">
             <img src="assets/images/shape/blog-bg-shape1.svg" alt="Shape" />
          </div>
       </div>
    </section>
    <!-- end: Blog Area -->

    <!-- start: Contact Area -->
    <section class="tj-contact-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="contact-form-area">
                   <div class="contact-left-content">
                      <div class="tj-sec-heading">
                         <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Get In touch</span>
                         <h2 class="sec-title wow fadeInUp" data-wow-delay=".4s">Have any Project Plan In your Mind?</h2>
                         <div class="desc wow fadeInUp" data-wow-delay=".5s">
                            <p>
                               All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the
                               first true generator on the Internet. It uses a dictionary of over 200 Latin words,
                            </p>
                         </div>
                      </div>
                      <div class="comntact-list wow fadeInUp" data-wow-delay=".6s">
                         <div class="contact-icon">
                            <img src="assets/images/icon/phone.svg" alt="Icon" />
                         </div>
                         <div class="contact-header">
                            <span class="d-block">For urgent help</span>
                            <a href="tel:+0000123456789">+ 0000 123-456-789</a>
                         </div>
                      </div>
                      <div class="comntact-list wow fadeInUp" data-wow-delay=".7s">
                         <div class="contact-icon">
                            <img src="assets/images/icon/mail.svg" alt="Icon" />
                         </div>
                         <div class="contact-header">
                            <span class="d-block">Mail us 24/7</span>
                            <a href="mailto:hello@gmail.com">hello@gmail.com</a>
                         </div>
                      </div>
                   </div>
                   <form id="contact-form" class="contact-form-box wow fadeInRight" data-wow-delay=".9s">
                      <div class="form-input">
                         <label>Your Name</label>
                         <input type="text" class="form__input" name="conName" />
                      </div>
                      <div class="form-input">
                         <label>Email Address</label>
                         <input type="email" class="form__input" name="conEmail" />
                      </div>
                      <div class="form-textarea">
                         <label>How can help you?</label>
                         <textarea id="message" name="conMessage"></textarea>
                      </div>
                      <div class="tj-contact-button">
                         <button class="btn tj-primary-btn" type="submit">Submit Now</button>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
       <div class="contact-section-shape">
          <div class="contact-bg-shape shake-y">
             <img src="assets/images/shape/shape-31.svg" alt="Shape" />
          </div>
          <div class="contact-bg-shape1 pulse">
             <img src="assets/images/shape/shape-32.svg" alt="Shape" />
          </div>
          <div class="contact-bg-shape2 pulse">
             <img src="assets/images/shape/shape-33.svg" alt="Shape" />
          </div>
          <div class="contact-bg-shape3 shake-y">
             <img src="assets/images/shape/shape-34.svg" alt="Shape" />
          </div>
       </div>
    </section>
    <!-- end: Contact Area -->

    <!-- BEGIN: Contact Form Success Modal Message -->
    <div class="modal" id="message_sent" tabindex="-1">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header alert alert-success">
                <h5 class="modal-title">Message Sent Successfully</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <p>Thank you for contacting us. We will get back to you shortly.<br />Have a great day!</p>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
             </div>
          </div>
       </div>
    </div>
    <!-- END: Contact Form Success Modal Message -->

    <!-- BEGIN: Contact Form Fail Modal Message -->
    <div class="modal" id="message_fail" tabindex="-1">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header alert alert-danger">
                <h5 class="modal-title">Error</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <p>Oops! Something went wrong, please try again.</p>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
             </div>
          </div>
       </div>
    </div>
    <!-- END: Contact Form Fail Modal Message End -->
 </main>
 @endsection
