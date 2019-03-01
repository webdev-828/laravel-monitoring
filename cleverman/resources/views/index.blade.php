<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My Portfolio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">DevFolio</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home"><span class="fa fa-home"> Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about"><span class="fa fa-info-circle"> About</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service"><span class="fa fa-paper-plane"> Services</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work"><span class="fa fa-newspaper-o"> Portfolio</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact"><span class="fa fa-phone"> Contact</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/1.png)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          @foreach ($myinfos as $myinfo)
            <h1 class="intro-title mb-4">{{"I am ".$myinfo->first_name." ".$myinfo->last_name}}</h1>
          @endforeach
          <p class="intro-subtitle"><span class="text-slider-items">Frontend and Backend Developer,Laravel Developer,ReactJS Developer,AngularJS and NodeJS Developer</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    @foreach($myinfos as $myinfo)
                      <div class="about-img">
                        <img src={{"img/".$myinfo->myphoto}} class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    @endforeach
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      @foreach($myinfos as $myinfo)
                        <p><span class="title-s">Name: </span> <span>{{$myinfo->first_name." ".$myinfo->last_name}}</span></p>
                        <p><span class="title-s">Profile: </span> <span>{{$myinfo->profile}}</span></p>
                        <p><span class="title-s">Email: </span> <span>{{$myinfo->email}}</span></p>
                        <p><span class="title-s">Phone: </span> <span>{{$myinfo->phone_number}}</span></p>
                      @endforeach
                    </div>
                  </div>
                </div>
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead wow fadeInUp animated font-weight-normal">
                    Hello
                    My name is <a href="index.php">
                      <span class="text-primary">
                        @foreach ($myinfos as $myinfo)
                          {{$myinfo->first_name." ".$myinfo->last_name}}                          
                        @endforeach</span></a><br>
                    I am Senior Frontend and Backend Developer who has rich experiences for 8 years.<br>
                    Especialy I am very excellent on Laravel Framework.<br>
                    I have already developed many project and so I can provide high speed and quality to you.
                  </p>
                  <p class="lead wow fadeInUp animated font-weight-normal">
                    My Skill Set<br>
                    ---*** Program Language:<br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp HTML, CSS, JAVASCRIPT, PHP, Jquery<br>
                    ---*** PHP Framework<br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Laravel, Yii, Codeigniter<br>
                    ---*** Javascript Library<br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ReactJS, AngularJS, NodeJS<br>
                    ---*** Database<br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Mysql, MongoDB, SQLite and so on
                  </p>
                  <p class="lead wow fadeInUp animated font-weight-normal">                          
                    If you think that I am very fitness, please reply.<br>
                    Best Regard
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="skill-mf wow fadeInUp animated">
                  <span class="title-box-2">                    
                    <p class="title-s"><h2>Skills</h2></p>
                  </span>
                  <span>HTML</span> <span class="pull-right">78%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>CSS3</span> <span class="pull-right">75%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>PHP</span> <span class="pull-right">77%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-info" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>JAVASCRIPT</span> <span class="pull-right">80%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>BOOTSTRAP</span> <span class="pull-right">74%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>LARAVEL</span> <span class="pull-right">98%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>AngularJS</span> <span class="pull-right">70%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>ReactJS</span> <span class="pull-right">80%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>NodeJS</span> <span class="pull-right">75%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Services
            </h3>
            <p class="subtitle-a">
              I can provide high quality sevice for my client.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-monitor"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Web Design</h2>
              <p class="s-description text-center">
                Web site design is very important. This is the most favorite and confident part. I can design web site simply, clearly and beautifully by using Bootstrap and CSS. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-code-working"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Web Development</h2>
              <p class="s-description text-center">
                Website Development and code fixing are my major expertise and working with these problems since 2014 in various Projects.
                I have used all these latest technologies HTML5, CSS3, Bootstrap and Laravel Framework in different tasks.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-laptop"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Frontend Development</h2>
              <p class="s-description text-center">
              I take website design files and convert them into HTML, JavaScript (JS) and/or CSS code - the core elements of front-end development. 
              This includes design/layout, content, buttons, images, navigation, and internal links.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="fa fa-gamepad"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Html5 Game Development</h2>
              <p class="s-description text-center">
                I can develop both 2D and 3D games with HTML5. HTML5 makes it easier to build 2D games using audio, visuals, fluid animation and other multimedia elements.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-paintbrush"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">PSD to HTML</h2>
              <p class="s-description text-center">
                If you need, I can convert PSD file to HTML5. Nowdays
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-code"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Backend Development</h2>
              <p class="s-description text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                provident vitae! Magni
                tempora perferendis eum non provident.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">50</p>
              <span class="counter-text">WORKS COMPLETED</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">5</p>
              <span class="counter-text">YEARS OF EXPERIENCE</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-people"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">20</p>
              <span class="counter-text">TOTAL CLIENTS</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">36</p>
              <span class="counter-text">AWARD WON</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portfolio
            </h3>
            <p class="subtitle-a">
              These are my portfolios of any sites that I have developed for 5 years
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($portfolios as $portfolio)
          <div class="col-md-4">
            <div class="work-box">
              <a href={{"img/".$portfolio->file_name}} data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src={{"img/".$portfolio->file_name}} alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">{{$portfolio->page_name}}</h2>
                      <div class="w-more">
                        <span class="w-ctegory">{{$portfolio->category}}</span> / <span class="w-date">{{$portfolio->date}}</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <div class="text-center">
                <a class="text-uppercase" href={{$portfolio->link}}>{{$portfolio->link}}</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->

  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                <span class="author">Xavi Alonso</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                  Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit.
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                <span class="author">Marta Socrate</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                  Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit.
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message Us
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Have you enjoyed to see my portfolio?<br>
                      I am always ready to start your project. If you have project, please give a call or email.<br>
                      Then I will reply as soon as possible.<br>
                      Thanks.  
                    </p>
                    <ul class="list-ico">
                      @foreach($myinfos as $myinfo)
                        <li><span class="ion-ios-location"></span>{{$myinfo->address}}</li>
                        <li><span class="ion-ios-telephone"></span>{{$myinfo->phone_number}}</li>
                        <li><span class="ion-email"></span>{{$myinfo->email}}</li>
                        <li><span class="fa fa-skype"></span>{{$myinfo->skype}}</li>
                      @endforeach
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
