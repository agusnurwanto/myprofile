<!DOCTYPE HTML>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agus Nurwanto</title>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome/css/font-awesome.min.css" />
    <style>
    #testimonial::after{
        background-image: url(<?php echo get_template_directory_uri(); ?>/images/background/1.jpeg);
      }

    </style>

    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>

    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and Apple Icons -->
    <link rel="shortcut icon" href="images/icons/favicon.ico" />
    <link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png" />

</head>
<!-- <body> -->
<!-- <body class="slide-vertical"> -->
<body class="flip-horisontal">
<!-- <body class="flip-vertical"> -->
<!-- <body class="bounce"> -->

    <div id="head" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/1.jpg);">
        <div class="divider"></div>
        <div class="head-body">
            <div class="author-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/7.JPG" alt="Author">
            </div>
            <h1 class="welcome">Hello, I'm Ariflaw</h1>
            <span class="switch">
                <a href="" class="active purple">Front End Development</a>
                <a href="" class="blue">Wordpress Development</a>
                <a href="" class="red">UX Specialist</a>
            </span>
        </div>
        <nav id="nav-wrap">
          <div class="navbar" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#nav">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="#head" class="smoothscroll"><h3>Ariflaw</h3></a>
              </div>
              <div class="collapse navbar-collapse navbar-right" id="nav">
                <ul class="nav navbar-nav">
                    <li class="current"><a href="#head">Home</a></li>
                    <li><a class="smoothscroll" href="#about">About</a></li>
                    <li><a class="smoothscroll" href="#resume">Resume</a></li>
                    <li><a class="smoothscroll" href="#portofolio">Portofolio</a></li>
                    <li><a class="smoothscroll" href="#blog">Blog</a></li>
                    <li><a class="smoothscroll" href="#contact">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
    </div>

    <section id="about">
      <h1>About Me</h1>
      <div class="container">
        <div class="col-md-6">
          <div class="bio">
            <h2>AT A GLANCE</h2>
            <div class="full-name-bio">
              <span>Full Name </span>
              <span>Nur Arif Hidayat</span>
            </div>
            <div class="born-bio">
              <span>Born </span>
              <span>1994</span>
            </div>
            <div class="hobies-bio">
              <span>Hobies </span>
              <span>Playing Dota 2, Coding</span>
            </div>
            <div class="address-bio">
              <span><i class="fa fa-map-maker"></i>Address</span>
              <span>Gumiwang RT 01 RW 06, Purwanegara, Banjarnegara - Jawa Tengah</span>
            </div>
            <div class="phone-bio">
              <span>Phone</span>
              <span>(+62)85-747-484-312</span>
            </div>
            <div class="website-bio">
              <span>Website</span>
              <span>www.ariflaw.com</span>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bio">
            <h2>My Note</h2>
            <p>Hi! My name is <strong>Ariflaw</strong>, I'm a web developer and wordpress development from yogyakarta. `I enjoy creating eye candy solutions for website and wordpress themes. I'd love to work on yours, too :) </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde sunt quisquam aperiam, cumque velit fugit, ea libero odit, exercitationem odio aliquid. Consequatur dicta deserunt ipsa, repellat sit consectetur iure delectus!</p>
            <h2>My Quotes</h2>
            <blockquote cite="http:\/\/example.com\/facts">
              <p>" Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning. "</p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    <section id="resume">
      <h1>Resume</h1>

      <section id="career">
      <div class="container">
        <div class="my-career">
          <h2>Work Experience</h2>
          <ul class="resume-timeline">
            <li>
              <time class="resume-time" datetime="2014-08-10">
                <span>2014</span> <span>Januari</span>
              </time>
              <div class="resume-icon fa fa-wordpress"></div>
              <div class="resume-label">
                <h3>Frontend Wordpress Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid modi illo, nobis neque id explicabo ratione laudantium! Sunt veritatis cumque omnis minus quaerat, dolorum esse, suscipit labore consequatur sit.</p>
              </div>
            </li>
            <li>
              <time class="resume-time" datetime="2014-08-10">
                <span>2013</span> <span>Desember</span>
              </time>
              <div class="resume-icon fa fa-html5"></div>
              <div class="resume-label">
                <h3>Junior Frontend Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi fugit voluptate sint, sunt rerum. Sint sunt amet delectus alias architecto a quos quam, inventore eius, ad obcaecati, earum sed!</p>
              </div>
            </li>
            <li>
              <time class="resume-time" datetime="2014-08-10">
                <span>2013</span><span>Juli</span>
              </time>
              <div class="resume-icon fa fa-rocket"></div>
              <div class="resume-label">
                <h3>Internet Marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos necessitatibus est earum dignissimos voluptatem, ducimus quas facilis veritatis quae veniam soluta fugiat ipsum. Reprehenderit, nobis tempora, vero earum dolores accusamus.</p>
              </div>
            </li>
            <li>
              <time class="resume-time" datetime="2014-08-10">
                <span>2013</span><span>Januari</span>
              </time>
              <div class="resume-icon fa fa-send"></div>
              <div class="resume-label">
                <h3>Blogger</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione eaque eos, facere quidem inventore, earum laudantium minus cum obcaecati nam blanditiis temporibus a ducimus similique provident praesentium minima accusamus esse.</p>
              </div>
            </li>
            <li>
              <time class="resume-time" datetime="2014-08-10">
                <span>2012</span><span>September</span>
              </time>
              <div class="resume-icon fa fa-mortar-board"></div>
              <div class="resume-label">
                <h3>Computer and Network Engineering</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At in est fuga, maxime impedit, recusandae quod expedita nulla iusto similique, enim esse possimus, itaque molestias sed? Iste eos libero quia!</p>
              </div>
            </li>
          </ul>
        </div>

        <div class="my-career">
          <h2>Education</h2>
          <ul class="resume-timeline">
            <li>
              <time class="resume-time" datetime="2014-08-10">
                <span>3 Years</span> <span>2014 - 2017</span>
              </time>
              <div class="resume-icon fa fa-mortar-board"></div>
              <div class="resume-label">
                <h3>Programming Science Master - Pondok Programmer</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid modi illo, nobis neque id explicabo ratione laudantium! Sunt veritatis cumque omnis minus quaerat, dolorum esse, suscipit labore consequatur sit.</p>
              </div>
            </li>
            <li>
              <time class="resume-time" datetime="2014-08-10">
                <span>3 Years</span><span>2010 - 2013</span>
              </time>
              <div class="resume-icon fa fa-mortar-board"></div>
              <div class="resume-label">
                <h3>Computer and Network Engineering - Smkn 2 Bawang </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos necessitatibus est earum dignissimos voluptatem, ducimus quas facilis veritatis quae veniam soluta fugiat ipsum. Reprehenderit, nobis tempora, vero earum dolores accusamus.</p>
              </div>
            </li>
            <li>
              <time class="resume-time" datetime="2014-08-10">
                <span>3 Years</span> <span>2007 - 2010</span>
              </time>
              <div class="resume-icon fa fa-mortar-board"></div>
              <div class="resume-label">
                <h3>Junior High School - SMPN 1 Bawang</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi fugit voluptate sint, sunt rerum. Sint sunt amet delectus alias architecto a quos quam, inventore eius, ad obcaecati, earum sed!</p>
              </div>
            </li>
            <li>
              <time class="resume-time" datetime="2014-08-10">
                <span>6 Years</span><span>2001 - 2007</span>
              </time>
              <div class="resume-icon fa fa-mortar-board"></div>
              <div class="resume-label">
                <h3>Elementary School - SDN 1 Gumiwang</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos necessitatibus est earum dignissimos voluptatem, ducimus quas facilis veritatis quae veniam soluta fugiat ipsum. Reprehenderit, nobis tempora, vero earum dolores accusamus.</p>
              </div>
            </li>
          </ul>
        </div>
        </div>
      </section>

      <section id="skills">
        <div class="container">
          <div class="main-skills">
            <h2>My Skills</h2>
            <div class="list-skills col-xs-12 col-sm-6 col-md-4 clearfix">
              <div class="pie-skills">
                <span>92%</span>
                <div class="chart" data-percent="92"></div>
              </div>
              <div class="body-skills">
                <h3>HTML5/CSS3</h3>
                <p>I design minimal websites with extreme usability. I am also capable of responsive design and we build for UI/UX.</p>
              </div>
            </div>
            <div class="list-skills col-xs-12 col-sm-6 col-md-4 clearfix">
              <div class="pie-skills">
                <span>30%</span>
                <div class="chart" data-percent="30"></div>
              </div>
              <div class="body-skills">
                <h3>JQuery</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor totam id quibusdam quis modi natus vitae officia.</p>
              </div>
            </div>
            <div class="list-skills col-xs-12 col-sm-6 col-md-4 clearfix">
              <div class="pie-skills">
                <span>88%</span>
                <div class="chart" data-percent="88"></div>
              </div>
              <div class="body-skills">
                <h3>Wordpress</h3>
                <p>Make themes wordpress with awesome design and hight quality. Wordpress is powerfull cms engine. </p>
              </div>
            </div>
            <div class="list-skills col-xs-12 col-sm-6 col-md-4 clearfix">
              <div class="pie-skills">
                <span>22%</span>
                <div class="chart" data-percent="22"></div>
              </div>
              <div class="body-skills">
                <h3>PHP</h3>
                <p>From working on small projects to utilizing large-scale frameworks, I have 8 years of experience on PHP development.</p>
              </div>
            </div>
            <div class="list-skills col-xs-12 col-sm-6 col-md-4 clearfix">
              <div class="pie-skills">
                <span>58%</span>
                <div class="chart" data-percent="58"></div>
              </div>
              <div class="body-skills">
                <h3>UI/UX</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, delectus voluptatem in laborum inventore aspernatur.</p>
              </div>
            </div>
            <div class="list-skills col-xs-12 col-sm-6 col-md-4 clearfix">
              <div class="pie-skills">
                <span>82%</span>
                <div class="chart" data-percent="82"></div>
              </div>
              <div class="body-skills">
                <h3>SEO</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, delectus voluptatem in laborum inventore aspernatur.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

    </section>


    <section id="portofolio">
      <h1>Portofolio</h1>
      <div class="container">
        <div class="main-portofolio">
          <ul id="og-grid" class="og-grid">
            <li>
              <a href="#" data-largesrc="<?php echo get_template_directory_uri(); ?>/images/content/2.jpg" data-title="Azuki Been" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/2.jpg"  alt="Img">
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?php echo get_template_directory_uri(); ?>/images/content/1.jpg" data-title="Veggies sunt bona vobis" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/3.jpg" alt="">
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?php echo get_template_directory_uri(); ?>/images/content/4.jpg" data-title="Veggies sunt bona vobis" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/1.jpg" alt="">
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?php echo get_template_directory_uri(); ?>/images/content/5.jpg" data-title="Veggies sunt bona vobis" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/3.jpg" alt="">
              </a>
            </li>
             <li>
              <a href="#" data-largesrc="<?php echo get_template_directory_uri(); ?>/images/content/7.jpg" data-title="Veggies sunt bona vobis" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/1.jpg" alt="">
              </a>
            </li>
             <li>
              <a href="#" data-largesrc="<?php echo get_template_directory_uri(); ?>/images/content/5.jpg" data-title="Veggies sunt bona vobis" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/2.jpg" alt="">
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="<?php echo get_template_directory_uri(); ?>/images/content/4.jpg" data-title="Veggies sunt bona vobis" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/3.jpg" alt="">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="testimonial" >
      <h1>Testimonial</h1>
      <div class="container">
        <div class="owl-carousel">
          <div class="list-testimonial">
            <img src="<?php echo get_template_directory_uri(); ?>/images/testi/1.jpg" alt="Testimonial">
            <p class="owner-testi"><strong>Subekji Drajat</strong>, UI/UX Desainer</p>
             <div class="content-testi">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus eveniet consequuntur inventore autem necessitatibus ratione facilis, tenetur facere nisi cupiditate dolor sit rem omnis voluptatem corrupti, optio ex, maxime laborum?</p>
              </div>
          </div>
          <div class="list-testimonial">
            <img src="<?php echo get_template_directory_uri(); ?>/images/testi/2.jpeg" alt="Testimonial">
            <p class="owner-testi"><strong>Agung Laksono</strong>, Web Development</p>
            <div class="content-testi">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus eveniet consequuntur inventore autem.</p>
            </div>
          </div>
          <div class="list-testimonial">
            <img src="<?php echo get_template_directory_uri(); ?>/images/testi/4.jpg" alt="Testimonial">
            <p class="owner-testi"><strong>Niky Valentino</strong>, Marketing</p>
            <div class="content-testi">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus eveniet consequuntur inventore autem necessitatibus ratione facilis, tenetur facere nisi cupiditate dolor sit.</p>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="call-to-action">
      <div class="container">
        <span>Let's work together!</span>
       <a href="#" class="btn btn-lg">Join Now</a>
      </div>
    </section>

    <section id="blog">
      <h1>Blog</h1>
      <div class="container">
        <ul class="blog-masonry" id="container">
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/content/1.jpg" alt=""></a>
            <div class="blog-content">
              <span class="blog-date">01 Oktober 2014</span>
              <a href="#"><h3>Retro eCommerce PSD UI Kit</h3></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi sequi rerum officiis labore beatae? Ducimus, consequuntur, iste. Dolor hic libero possimus dolorum velit doloribus totam eos repellat! Dolorum, facilis, alias.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aperiam commodi, ab optio quod enim sed neque inventore laudantium quae, et distinctio ea vel ut odit modi iste dolore dolorem.</p>
            </div>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/content/2.jpg" alt=""></a>
            <div class="blog-content">
              <span class="blog-date">12 Oktober 2014</span>
              <a href="#"><h3>Lorem Inpus Dolorum Is Met dolalar equiv</h3></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi sequi rerum officiis labore beatae? Ducimus, consequuntur, iste. Dolor hic libero possimus dolorum velit doloribus totam eos repellat! Dolorum, facilis, alias.</p>
            </div>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/content/3.jpg" alt=""></a>
            <div class="blog-content">
              <span class="blog-date">14 Oktober 2014</span>
              <a href="#"><h3>Retro eCommerce PSD UI Kit</h3></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi sequi rerum officiis labore beatae? Ducimus, consequuntur, iste. Dolor hic libero possimus dolorum velit doloribus totam eos repellat! Dolorum, facilis, alias.</p>
            </div>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/content/5.jpg" alt=""></a>
            <div class="blog-content">
              <span class="blog-date">14 Oktober 2014</span>
              <a href="#"><h3>Retro eCommerce PSD UI Kit</h3></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi sequi rerum officiis labore beatae? Ducimus, consequuntur, iste. Dolor hic libero possimus dolorum velit doloribus totam eos repellat! Dolorum, facilis, alias.</p>
            </div>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/content/6.jpg" alt=""></a>
            <div class="blog-content">
              <span class="blog-date">14 Oktober 2014</span>
              <a href="#"><h3>Giving Is My Style Update</h3></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi sequi rerum officiis labore beatae? Ducimus, consequuntur, iste. Dolor hic libero possimus dolorum velit doloribus totam eos repellat! Dolorum, facilis, alias.</p>
            </div>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/content/7.jpg" alt=""></a>
            <div class="blog-content">
              <span class="blog-date">14 Oktober 2014</span>
              <a href="#"><h3>Lorem Inpus Dolorum Is Met</h3></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi sequi rerum officiis labore beatae? Ducimus, consequuntur, iste. Dolor hic libero possimus dolorum velit doloribus totam eos repellat! Dolorum, facilis, alias.</p>
            </div>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/content/4.jpg" alt=""></a>
            <div class="blog-content">
              <span class="blog-date">14 Oktober 2014</span>
              <a href="#"><h3>Lorem ipsum dolor sit amet emireate pirates</h3></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi sequi rerum officiis labore beatae? Ducimus, consequuntur, iste. Dolor hic libero possimus dolorum velit doloribus totam eos repellat! Dolorum, facilis, alias.</p>
            </div>
          </div>
        </li>
          <a href="#" class="read-blog">Browse my blog</a>
      </ul>

    </section>

    <section id="contact">
      <div class="container">
    	 <h1>Contact Me</h1>
       <p>Hello! If you have question about my self, you can write on contact below. Thanks!</p>

       <div class="col-md-6">
          <div class="contact-info">
            <h5>Contact Info</h5>
            <span><i class="fa fa-phone"></i> (+62)821-234-5612</span>
            <span><i class="fa fa-envelope"></i> hello@ariflaw.com</span>
            <span>Gelondong No.10 RT 06, Wirokerten, Bantul - Yogyakarta</span>
          </div>
          <div id="map"></div>
       </div>
       <div class="col-md-6">
         <form action="form.php" id="contact-form" method="post">
          <input type="text" id="name" name="name" value="" size="35" placeholder="Name">
          <input type="email" id="email" name="email" value="" size="35" placeholder="Email">
          <input type="text" id="subject" name="subject" value="" size="35" placeholder="Subject">
          <input type="text" class="" name="human" placeholder="1+3=?">
          <textarea name="message" id="message" placeholder="Message" rows="10" ></textarea>
          <input type="submit" name="submit" value="Submit" id="submit">
         </form>
       </div>

      </div>
    </section>

    <footer>
      <div class="main-footer">
        <div class="container">
          <a href="#head" class="backto smoothscroll"><i class="fa fa-angle-up"></i></a>
          <div class="social-link">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-html5"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-wordpress"></i></a></li>
            </ul>
          </div>
          <div class="copyright">
            <p>Ariflaw &copy; Copyright 2014 - All Right Reserved. </p>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/gmaps.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easypiechart.min.js"></script>

    <!-- Portofolio -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/portofolio.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>
