@extends('layouts.front_end.app')
@section('title', 'Olusoga Olugbenga &mdash; Brand strategist and PR Manager')
@section('description', 'I am a Brand strategist with vast experience in Brand strategy and PR management')
@section('keywords', 'PR Manager | Olusoga Olugbenga | Shogz')
@section('content')
<div class="cover-v1 jarallax hero" id="home-section">
    <div class="container">
      <div class="row align-items-center">
          
        <div class="col-md-7 mx-auto text-center">
          <p class="subheading font-weight-bolder gsap-reveal-hero">Hi, I'm</p>
          <h1 class="heading gsap-reveal-hero">Olusoga Olugbenga</h1>
          <h2 class="subheading gsap-reveal-hero"><span class="typing"></span></h2>
        </div>
      </div>
    </div>


    <a href="#about-section" class="mouse-wrap smoothscroll">
      <span class="mouse">
        <span class="scroll"></span>
      </span>
      <span class="mouse-label">Scroll</span>
    </a>

  </div>
  <!-- END .cover-v1 -->

  <div class="unslate_co--section" id="about-section">
    <div class="container">
      
      <div class="section-heading-wrap text-center mb-5">
        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">About Me</span></h2>
        <span class="gsap-reveal">
        <img class="rounded-md" src="images/divider.png" alt="divider" width="76">
        </span>
      </div>
      

      <div class="row mt-5 justify-content-between">
        <div class="col-lg-7 mb-5 mb-lg-0">
          <figure class="dotted-bg gsap-reveal-img ">
            <img src="images/shogz.png" alt="Image" class="img-fluid">
          </figure>
        </div>
        <div class="col-lg-4 pr-lg-5">
          <h3 class="mb-4 heading-h3"><span class="gsap-reveal">We can make it together</span></h3>
          <p class="mb-4 gsap-reveal">Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat. Donec rutrum congue leo eget malesuada.</p>
          <p class="lead gsap-reveal">Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
          <p class="gsap-reveal"><a href="#contact-section" class="btn btn-outline-pill btn-custom-light">Contact me</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="unslate_co--section">
    <div class="container">
      <div class="section-heading-wrap text-center mb-5">
        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Some brands I've worked with</span></h2>
        <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
      </div>
      <div class="owl-carousel logo-slider">
        <div class="logo-v1 gsap-reveal">
          <img src="images/brands/hemmy_couture.png" alt="Image" class="img-fluid brands_img gsap-reveal-img">
          <p class="">Hemmy Couture</p>
        </div>
        <div class="logo-v1 gsap-reveal">
          <img src="images/brands/oswil_cakes.png" alt="Image" class="img-fluid brands_img gsap-reveal-img">
          <p class="">Oswil cakes</p>
        </div>
        <div class="logo-v1 gsap-reveal">
          <img src="images/brands/yellowlife.png" alt="Image" class="img-fluid brands_img gsap-reveal-img">
          <p class="">Yellow lyfe </p>
        </div>
      </div>
    </div>
  </div>

  <div class="unslate_co--section" id="services-section">
    <div class="container">

      <div class="section-heading-wrap text-center mb-5">
        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Services</span></h2>
        <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
      </div>

      <div class="row gutter-v3">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
            <div class="wrap-icon mb-3">
              <img src="images/svg/001-options.svg" alt="Image" width="45">
            </div>
            <h3>Digital <br> Strategy</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
          </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
            <div class="wrap-icon mb-3">
              <img src="images/svg/002-chat.svg" alt="Icon" width="45">
            </div>
            <h3>PR <br>Management</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
          </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
            <div class="wrap-icon mb-3">
              <img src="images/svg/003-contact-book.svg" alt="Image" class="img-fluid" width="45">
            </div>
            <h3>Digital <br> Marketing</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
          </div> 
        </div>

        <div class="col-md-6 rounded-md col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
            <div class="wrap-icon mb-3">
              <img src="images/svg/004-percentage.svg" alt="Image" width="45">
            </div>
            <h3>Red Carpet <br> Host</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
          </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
            <div class="wrap-icon mb-3">
              <img src="images/svg/006-goal.svg" alt="Image" width="45">
            </div>
            <h3>Business <br> Development</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
          </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
            <div class="wrap-icon mb-3">
              <img src="images/svg/005-line-chart.svg" alt="Image" width="45">
            </div>
            <h3>Marketing <br> Insights</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
          </div> 
        </div>

      </div>
    </div>
  </div>

  <div class="unslate_co--section" id="testimonial-section">
    <div class="container">
      <div class="section-heading-wrap text-center mb-5">
        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Testimonials from Happy Clients</span></h2>
        <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
      </div>
    </div>

    <div class="owl-carousel testimonial-slider" data-aos="fade-up">
      <div>
        <div class="testimonial-v1">
          <div class="testimonial-inner-bg">
            <span class="quote">&ldquo;</span>
            <blockquote>
              Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
            </blockquote>
          </div>
          
          <div class="testimonial-author-info">
            <img src="images/person_man_1.jpg" alt="Image">
            <h3>Eric Ingram</h3>
            <span class="d-block position">CEO - Yellowlyfe Travels</span>
          </div>

        </div>
      </div>
      <div>
        <div class="testimonial-v1">
          <div class="testimonial-inner-bg">
            <span class="quote">&ldquo;</span>
            <blockquote>
              Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
            </blockquote>
          </div>
          
          <div class="testimonial-author-info">
            <img src="images/person_man_2.jpg" alt="Image">
            <h3>Ryan Mullins</h3>
            <span class="d-block position">CEO - Hemmy Couture</span>
          </div>

        </div>
      </div>
      <div>
        <div class="testimonial-v1">
          <div class="testimonial-inner-bg">
            <span class="quote">&ldquo;</span>
            <blockquote>
              Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
            </blockquote>
          </div>
          
          <div class="testimonial-author-info">
            <img src="images/person_woman_1.jpg" alt="Image">
            <h3>Erica Miller</h3>
            <span class="d-block position">CEO - Oswil cakes</span>
          </div>

        </div>
      </div>
    </div>

  </div>

  <div class="unslate_co--section" id="contact-section">
    <div class="container">
      <div class="section-heading-wrap text-center mb-5">
        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Get In Touch</span></h2>
        <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
      </div>


      <div class="row justify-content-between">
        <!-- action="./php/send-email.php"  -->
        <div class="col-md-6">
          <form method="post" class="form-outline-style-v1" id="contactForm">
            <div class="form-group row mb-0">

              <div class="col-lg-6 form-group gsap-reveal">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name">
              </div>
              <div class="col-lg-6 form-group gsap-reveal">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email">
              </div>
              <div class="col-lg-12 form-group gsap-reveal">
                <label for="message">Write your message...</label>
                <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group row gsap-reveal">
                <div class="col-md-12 d-flex align-items-center">
                  <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="Send Message">
                  <span class="submitting"></span>
                </div>
              </div>
          </form>
          <div id="form-message-warning" class="mt-4"></div> 
          <div id="form-message-success">
            Your message was sent, thank you!
          </div>

        </div>

        <div class="col-md-4">
          <div class="contact-info-v1">
            <div class="gsap-reveal d-block">
              <span class="d-block contact-info-label">Email</span>
              <a href="#" class="contact-info-val">shogz@gmail.com</a>
            </div>
            <div class="gsap-reveal d-block">
              <span class="d-block contact-info-label">Phone</span>
              <a href="#" class="contact-info-val">+234 809 5643 453</a>
            </div>
            <div class="gsap-reveal d-block">
              <span class="d-block contact-info-label">Address</span>
              <address class="contact-info-val">Lagos, <br>Nigeria</address>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
@endsection