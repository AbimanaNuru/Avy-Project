<?php
include_once('db.php');

  if(isset($_POST['save_contact']))
{
// Posted Values    
$a=mysqli_real_escape_string($connection,$_POST['fname']);
$b=mysqli_real_escape_string($connection,$_POST['email']);
$c=mysqli_real_escape_string($connection,$_POST['subject']);
$d=mysqli_real_escape_string($connection,$_POST['message']);


// Query for insertion data into database  
$query=mysqli_query($connection,"insert into contact_us
(contact_us_fullname,contact_us_email,contact_us_subject,contact_us_full_message,contact_us_date)
values('$a','$b','$c','$d',NOW())");
if($query)
{



  echo "<script> 
  alert('Thank You For Conatct Us');
  </script>    ";   
  header("Refresh: 1; url= index.php");
  

}
else
{

  echo "<script> 
  alert('Fail');
  </script>    ";   
  header("Refresh: 1; url= index.php");

}



}


if(isset($_POST['subscribe_save']))
{
// Posted Values    
$a=mysqli_real_escape_string($connection,$_POST['email']);


// Query for insertion data into database  
$query=mysqli_query($connection,"insert into news_lettter
(news_lettter_email,news_lettter_date)
values('$a',NOW())");
if($query)
{



  echo "<script> 
  alert('Thank You ');
  </script>    ";   
  header("Refresh: 1; url= index.php");
  

}
else
{

  echo "<script> 
  alert('Fail');
  </script>    ";   
  header("Refresh: 1; url= index.php");

}



}
  
  ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>AVY Project</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

<style>
  .send_button{
  border: 0;
  padding: 10px 32px;
  color: #0880e8;
  transition: 0.4s;
  border-radius: 50px;
  border: 2px solid #0880e8;
  background: #fff;
}
</style>
</head>

<body>
  <!-- ======= Top Bar ======= -->


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">AVY Project</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Avy</a></li>

          <li class="dropdown">
            <a href="#main"><span>Projects</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://avyapps.com/" target="_blank">Avy Marketplace</a></li>
              <li><a href="https://avyacademy.com/" target="_blank">Avy Academy</a></li>
              <li><a href="https://avyacademy.com/" target="_blank">Avy Collection</a></li>
              <li><a href="#">Avy Network & Devices</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#services">Roadmap</a></li>

          <li>
            <a class="nav-link scrollto" href="#portfolio">Whitepaper</a>
          </li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>

          <li><a class="nav-link scrollto" href="#pricing">Tokenomics</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">
            Welcome to <span>AVY PROJECT</span>
          </h2>
          <p class="animate__animated animate__fadeInUp">
            The Avy Project is an Australian-based organization,
            whose mission is to empower young entrepreneurs with technology, tools, training,
            and relationships that help them succeed personally, professionally, and financially.
          </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">
            Our team
          </h2>
          <p class="animate__animated animate__fadeInUp">
            Our team was built on community through the Founder Ronnie El Cheikh in Australia and is now spread
            globally.
            With a diverse set of skills contributing to a world community project.
          </p>
          <a href="#team" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">
            What we do
          </h2>
          <p class="animate__animated animate__fadeInUp">
            Projects - Avy is involved in 5 Projects, our world leading Blockchain and Academy,
            our Avy marketplace, Our NFT collections, our Avy network infrastructure and
            Mining Devices and our Avy Humanity Token. Built off our amazing and growing community.
            <a href="#main" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">
            Roadmap
          </h2>
          <p class="animate__animated animate__fadeInUp">
            Our roadmap focuses on community and social impact,
            improving the livelihoods of our people is our primary focus.
            Each project of ours is broken into key verticals,
            our road to global change is identified in our roadmap pillars starting with investment.
          </p>
          <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">
            Whitepaper
          </h2>
          <p class="animate__animated animate__fadeInUp">
            In our attached Whitepaper we clearly
            define our business plan and model for success. The Avy project has a
            clear Mission and Vision to change the lives of our communities through action and change.
          </p>
          <a href="#portfolio" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 6 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">
            Tokenomics
          </h2>
          <p class="animate__animated animate__fadeInUp">
            Our Avy Token is an equalizer and game changer,
            it has utility beyond the market as it focuses on building value and equity
            through our very community that builds a unique ecosystem.
          </p>
          <a href="#pricing" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>


      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>About Us</h2>
        <p>
          Our worlds are changing rapidly, we must adjust to the new digital world. Welcome to The
          Avy Project, where community meets blockchain and we change people’s lives through our
          Academy, Avy Marketplace, NFT community projects, unique mining devices, our Internet
          and Avy network services and our Token that links it together.

          Imagine a world with equalization, a fairness system that enables marginalized
          communities’ access to training and education and then having the opportunity to utilize
          their skills for sustained independence. A learn to earn system. We have longed for the
          change to create a solid business to change people’s lives.
          Our blockchain will enable a Token that will be linked to nominated social impact programs
          that enable lifelong change. Using Cryptocurrency ensures our community has a share in the
          latest opportunities to be progressive in their ability to create independence.
          Do you see an equalized world?<br><br>
          &nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#" class="btn-learn-more">Learn More</a>
        </p>



      </div>
    </div>
  </section>
  <!-- End About Us Section -->



  <main id="main">
    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-3 mb-lg-0" data-aos="fade-up"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">The Avy NFT Academy</a></h4>
              <p class="description text-center">
                A learn to earn
                system where
                we educate our
                community in
                key
                development
                areas. Our
                community get
                rewarded in Avy
                Tokens
                <br><br><br><br><br>
                <a href="https://avyacademy.com/" class="btn btn-primary btn-lg" role="button">Visit</a>


              </p>
            </div>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-3 mb-lg-0" data-aos="fade-up"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Avy Marketplace</a></h4>
              <p class="description text-center">
                The Avy
                marketplace and
                platform
                engages artists
                to use the Avy
                Apps NFTs after
                completion of
                the Avy
                Academy. They
                will be rewarded
                with Avy Tokens

                <br>
                <br><br><br>
                <a href="https://avyapps.com/" class="btn btn-primary btn-lg" role="button">Visit</a>
              </p>
            </div>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-3 mb-lg-0" data-aos="fade-up"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">The Avy NFT Collection</a></h4>
              <p class="description text-center">
                The Collection
                creates the
                opportunity for
                the community
                to benefit from
                these sales
                providing
                funding into
                social impact.
                Rewards in Avy
                Tokens


                <br>
                <br>
                <br><br>
                <a href="coming.html" class="btn btn-primary btn-lg" role="button">Visit</a>
              </p>
            </div>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-3 mb-lg-0" data-aos="fade-up"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="">Avy Network and Mining devices</a></h4>
              <p class="description text-center">
                The mining devices that connect to the Avy Network, will
                be key to improve Education and access to the Digital world through our utility and rewarded with Avy
                Tokens


                <br><br>
                <a href="coming.html" class="btn btn-primary btn-lg" role="button">Visit</a>
              </p>
            </div>
          </div>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-3 mb-lg-0" data-aos="fade-up"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-plus"></i></div>
              <h4 class="title"><a href="">Avy Token</a></h4>
              <p class="description text-center">
                The Avy Token will play a pivotal role in our blockchain to ensure we change the lives of our
                community through social impact. More Avy Token rewards


                <br><br><br><br><br>
                <a href="coming.html" class="btn btn-primary btn-lg" role="button">Visit</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Icon Boxes Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Roadmap</h2>







        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0 w-45 p-3" data-aos="fade-up"
            data-aos-delay="200">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Phase 1 Qtr 1 2023
                </a></h4>
              <p>

                : R&D Software and
                Hardware<area>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</area><br>
                : Govt Funding raise for Academy<br>
                : Academy build and launch<br>
                : Govt and Grant funding<br>
                : Pre-Seed Capital Raise 10% <br><br><br><br><br><br>

              </p>
            </div>
          </div>
          <div class="col-md-6 d-flex w-auto align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Phase 2 Qtr 2 2023
                </a></h4>
              <p>
                : Increased marketing and press releases<br>
                : Manufacture of Mining Devices<br>
                : Seed Capital Funding 10% 5 capital raise<br>
                : Development of Blockchain and Token<br>
                : Development of Infrastructure of ISP and IaaS<br>

              </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Phase 3 Qtr3 2023
                </a></h4>
              <p>
                : Continue marketing efforts and social presence<br>
                : Avy ITO public round 8 million (400 million tokens)<br>
                : Release of the IaaS<br>
                : Release of the devices and Blockchain<br>
                : Release of the NFT Collection<br>
                : Series A funding 10% capital raise

              </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Phase 4 Qtr 4 2023
                </a></h4>
              <p>
                : Series B funding 10% Capital raise<br>
                : Lease manufacturing Hub in Africa for devices

              </p>
            </div>

          </div>
        </div>
    </section>
    <!-- End Services Section -->


    <!-- ======= Portfoio Section ======= -->
    <section id="portfolio" class="portfoio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>WHITE PAPER</h2>
          <p>
            Read our Whitepaper for more
            information about our projects, and
            our Humanity Token

            <a href="https://drive.google.com/file/d/1b3sv6huxZIKfsgKfryGDPAe_-ugGA0D1/view?usp=sharing" target="_blank"
              class="btn btn-primary btn-lg" role="button">WHITE PAPER</a>
          </p>
          <br>
          Join our waitlist <a href="contact-form-v1/ContactFrom_v1/index.html" target="_blank"
            class="btn btn-primary btn-lg" role="button">Join here</a>

        </div>





      </div>
    </section>
    <!-- End Portfoio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Team</h2>
          <p>
            Our team was built on community through the
            Founder Ronnie El Cheikh in Australia and is now spread globally.
            With a diverse set of skills contributing to a world community project.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic">
                <img src="assets/img/team/team-1.png" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <h4>Ronnie El Cheikh</h4>
                <span>Co-founder</span>
                <p>
                  A serial entrepreneur and business operations leader.
                  Founder & Director of multiple businesses in Australia,
                  bringing a wealth of business prowess.
                </p>
                <div class="social">
                  <a href="https://twitter.com/CheikhRonnie"><i class="ri-twitter-fill"></i></a>
                  <a href="https://www.facebook.com/ronnie.blueboy"><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/ronnieelcheikh/"><i class="ri-instagram-fill"></i></a>
                  <a href="linkedin.com/in/ronnie-el-cheikh-85185742"> <i class="ri-linkedin-box-fill"></i> </a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <h4>Fidele Rukundo</h4>
                <span>Product Manager</span>
                <p>
                  A product manager with an experience of working on software products. who has a passion and history of
                  product management in both EdTech
                  and Fintech.


                </p>
                <div class="social">
                  <a href="https://twitter.com/rukundo_fidele"><i class="ri-twitter-fill"></i></a>
                  <a href="https://web.facebook.com/profile.php?id=100007593587244"><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/fidele_rukundo/"><i class="ri-instagram-fill"></i></a>
                  <a href="https://www.linkedin.com/in/fid%C3%A8le-rukundo-027922185/"> <i
                      class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>TOKENOMICS </h2>
          <p>

            <b> supply 1 billion Tokens<br>
              (Owners Token)</b> Founders and Investors will receive tokens being part of The Avy project<br>
            Allocation <b>(500,000,000 tokens) 50% liquidity <br>
              (Academy Token)</b> for each level completed by the artists, there are 5 levels so they will receive 1000
            x Tokens<br>
            Allocation 10,000 students <b>(1,000,000 tokens) 0.001% liquidity <br>
              (Device Owner Token) </b>Any device purchased by the community would receive 500 tokens per purchase of
            the laptop<br>
            Allocation 100,000 devices <b>(50,000,000 tokens) 5% liquidity<br>
              (Mining Tokens)</b> Once subscribed to the Avy network monthly users would mine Avy tokens<br>
            Allocation <b>(40,000,000 tokens) 4% liquidity<br>
              (Public Token)</b> There will be an ITO and ICO for the Avy token, it will be through a market cap<br>
            Allocation <b>(400,000,000 tokens) 40% liquidity<br>
              (Marketplace Users Token)</b> will be given to Sellers and collectors of NFT artworks on the
            marketplace<br>
            Allocation <b>(1,000,000 tokens) 0.001% liquidity<br>
              (Donate Token)</b> The Avy Project will donate tokens to NGOs in partnership<br>
            Each NGO gets 1000 Tokens Allocation <b>(8,000,000 tokens) 0.008% liquidity</b><br>

          </p>
        </div>


      </div>
    </section>
    <!-- End Pricing Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Melbourne, Victoria Australia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>ronnielsheikh@hotmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+61 452 246 202</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
            <form action="" method="post" role="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fname" class="form-control" id="name" placeholder="Your Name" required />
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
             <br>
              <div class="text-center">
                <button class="send_button" type="submit" name="save_contact">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>
              Stay updated about African Tech Ecosystem and our approach in making impact
            </p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" />
              <input type="submit" name="subscribe_save" value="Subscribe" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="index.html">Home</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#about">About us</a>
              </li>

              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Terms of service</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Privacy policy</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">

            <ul>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="https://avyacademy.com/" target="_blank">AVY ACADEMY</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="https://avyapps.com/" target="_blank">AVY
                  MARKETPLACE</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="https://avyacademy.com/" target="_blank">AVY NFT
                  COLLECTION</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">AVY NETWORK
                  MINERS</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">AVY TOKEN</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Melbourne, Australia <br /><br />
              <strong>Phone:</strong> +61 452 246 202<br />
              <strong>Email:</strong> ronnielsheikh@hotmail.com<br />
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About AVY Project</h3>
            <p>
              The world first NFT platform and marketplace for marginalized
              communities for social impact programs!
            </p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/The_Avy_project" target="_blank" class="twitter"><i
                  class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/profile.php?id=100076930052424 " target="_blank" class="facebook"><i
                  class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/the_avy_project/ " target="_blank" class="instagram"><i
                  class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/@theavyproject9285" target="_blank"> <i class="bi bi-youtube"></i> </a>
              <a href="https://www.linkedin.com/company/coins-avy/ " target="_blank" class="linkedin"><i
                  class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>AVY Project</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">AVY Project</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>