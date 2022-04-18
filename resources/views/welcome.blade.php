<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Renz Cabato</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="shortcut icon" href="{{url('images/logo.png')}}">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
        <!-- ======= Header ======= -->
        <header id="header" class="d-flex flex-column justify-content-center">
      
          <nav id="navbar" class="navbar nav-menu">
            <ul>
              <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
              <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
              <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
              <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
              {{-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> --}}
              <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
          </nav><!-- .nav-menu -->
      
        </header><!-- End Header -->
      
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex flex-column justify-content-center">
          <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Renz Cabato</h1>
            <p>I'm <span class="typed" data-typed-items="Web Developer, System Developer"></span></p>
            <div class="social-links">
              {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
              <a href="https://www.facebook.com/renzcabatorenz" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/renzcabato/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
              <a href="https://www.linkedin.com/in/renz-cabato-77b362167/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </section><!-- End Hero -->
      
        <main id="main">
      
          <!-- ======= About Section ======= -->
          <section id="about" class="about">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>About</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
              </div>
      
              <div class="row">
                <div class="col-lg-4">
                  <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                  <h3>System &amp; Website Developer</h3>
                  {{-- <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p> --}}
                  <?php
                  function getAge($dob,$condate){ 
                        $birthdate = new DateTime(date("Y-m-d",  strtotime(implode('-', array_reverse(explode('/', $dob))))));
                        $today= new DateTime(date("Y-m-d",  strtotime(implode('-', array_reverse(explode('/', $condate))))));           
                        $age = $birthdate->diff($today)->y;

                        return $age;
                    }
                  ?>
                  <div class="row">
                    <div class="col-lg-6">
                      <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>30 December 1996</span></li>
                        {{-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> --}}
                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+63 9777813145</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Tondo, Manila</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Nationality:</strong> <span>Filipino</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Civil Status:</strong> <span>Single</span></li>
                      </ul>
                    </div>
                    <div class="col-lg-6">
                      <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{getAge('1996-12-30',date('Y-m-d'))}}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>BS in Information Technology</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>cabato.renz.renz@gmail.com</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Resume:</strong> <span><a href="{{url('resume.pdf')}}" target="_blank" class="">Download</a></span></li>
                        {{-- <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li> --}}
                      </ul>
                    </div>
                  </div>
                  {{-- <p>
                    Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                    Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
                  </p> --}}
                </div>
              </div>
      
            </div>
          </section><!-- End About Section -->
      
        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Skills</h2>
            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
          </div>
  
          <div class="row">
  
            <div class="col-lg-1 col-md-1">
                <img src="images/html.png"  class="img-thumbnail">
                {{-- <i class="bi bi-emoji-smile"></i> --}}
                {{-- <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span> --}}
               
            </div>
          </div>
        </div>
      </section><!-- End Facts Section -->

          <!-- ======= Resume Section ======= -->
          <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Resume</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
              </div>
      
              <div class="row">
                <div class="col-lg-6">
                  <h3 class="resume-title">Sumary</h3>
                  <div class="resume-item pb-0">
                    <h4>Renz Christian Cabato</h4>
                    <p><em>System Developer with 5+ years of
                        experience in designing and
                        developing systems/website, testing,
                        debugging and training staff on how
                        to use it.</em></p>
                    <ul>
                      <li>1969 P Katamanan St. Tondo Manila</l  i>
                      <li>09777813145</li>
                      <li>cabato.renz.renz@gmail.com</li>
                    </ul>
                  </div>
      
                  <h3 class="resume-title">Education</h3>
                  <div class="resume-item">
                    <h4>Bachelor of Science in Information Technology</h4>
                    <h5>2012 - 2016</h5>
                    <p><em>Technological University of the Philippines, Manila</em></p>
                    {{-- <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p> --}}
                  </div>
                </div>
                <div class="col-lg-6">
                  <h3 class="resume-title">Professional Experience</h3>
                  <div class="resume-item">
                    <h4>Senior Web Developer</h4>
                    <h5>January 24, 2022 - Present</h5>
                    <p><em>Obanana Corporation, Makati Metro Manila </em></p>
                    <ul>
                      <li>Design creation schedules and manage progress</li>
                      <li>Draft and create plans. </li>
                      <li>Create website wireframes</li>
                      <li>Determine system requirements</li>
                      <li>Lead web development scoping, planning, and technical architecture for all projects involving UI and system development.</li>
                      <li>Manage a small development team as well as hosting partners and third-party developers (contractors) to ensure technical quality, product quality, and efficient use of resources.</li>
                      <li>Take a hands-on development approach to creating new pages and features across the whole stack, with a specific focus on the presentation layer.</li>
                      <li>Maintain relationships and connections to other teams to ensure that integrations are maintained and enhanced.</li>
                      <li>Identify, evaluate, and implement new technology that is beneficial to the digital goals of the organization.</li>
                      <li>Perform root cause analysis on product and process deficiencies, define and implement changes.</li>
                      <li>Ensure the development team is effectively engaged and that products in development match resources available.</li>
                      <li>Regularly communicate with the digital marketing leadership, marketing directors, sales leadership, and content staff to discuss direction, strategy, and priority.</li>
                    </ul>
                  </div>
                  <div class="resume-item">
                    <h4>System Developer (Senior Officer)</h4>
                    <h5>November 23, 2020 – January 23, 2022</h5>
                    <p><em>TRIPLECROWN PROPERTIES, INC. (Point Blue), Makati Metro Manila</em></p>
                    <ul>
                      <li>Develop new systems based on the business requirements by working
                        closely with the Business Analyst and the Process Proponent</li>
                      <li>Assist in maintaining and monitoring all existing systems</li>
                      <li>Secure excellent functionality of present pipelines</li>
                      <li>Enable effective data management across all departments of the company (including automation of processes)</li>
                      <li>Creating dashboards and conducting orientation to its proponents and end-users</li>
                      <li>Program/implement the back-end development for the improvement of new and existing systems</li>
                      <li>Measure and monitor system performance, availability, and reliability</li>
                      <li>Implement the department's ticketing system</li>
                      <li>Monitor and respond to the ticketing system (based on the tagged category)</li>
                      <li>Assist with the department's day-to-day tasks</li>
                      <li>Ensure the delivery of tasks and good performance of the department</li>
                    </ul>
                  </div>
                  <div class="resume-item">
                    <h4>Web Application Developer</h4>
                    <h5>September 1, 2018 – September 22, 2020</h5>
                    <p><em>Philippine Foremost Milling Corporation, BGC Taguig</em></p>
                    <ul>
                      <li>Create documentation for all programs created.</li>
                      <li>Provide end-user support and assistance regarding all programs created.</li>
                      <li>Perform Research and Development task such as information collection, organization and presentation.</li>
                      <li>Create a program/system that will help the organization.</li>
                      <li>Projects Created</li>
                        <ul>
                            <li>Announcement Portal</li>
                            <li>Recruitment Portal</li>
                            <li>Off boarding Portal</li>
                            <li>Payroll System with attendance monitoring</li>
                            <li>Audit Portal</li>
                            <li>Budget Request System</li>
                            <li>Travel Request System</li>
                            <li>Inventory Management System</li>
                        </ul>
                    </ul>
                  </div>
                  <div class="resume-item">
                    <h4>MIS Officer</h4>
                    <h5>February 5, 2018 – August 31, 2018</h5>
                    <p><em>Ecosystem Technologies International Inc., Mandaluyong Metro Manila</em></p>
                    <ul>
                      <li>Installation of Software</li>
                      <li>Hardware Troubleshooting</li>
                      <li>Network Troubleshooting</li>
                      <li>Software Troubleshooting</li>
                      <li>Create a system that will help the old process</li>
                      <li>Projects Created</li>
                        <ul>
                            <li>HRIS (Human Resource Information System)</li>
                            <li>Project Monitoring System (Sales and Marketing)</li>
                        </ul>
                    </ul>
                  </div>
                  <div class="resume-item">
                    <h4>IT Support Technician </h4>
                    <h5>April 5, 2016 – January 31, 2018</h5>
                    <p><em>Burlington Industries Phillipines Inc., Makati, Metro Manila</em></p>
                    <ul>
                      <li>Installation of Software</li>
                      <li>Hardware Troubleshooting</li>
                      <li>Network Troubleshooting</li>
                      <li>Software Troubleshooting</li>
                      <li>Create a system that will help the old process</li>
                      <li>Preventive Maintenance of all CPU unit (Twice a year per CPU)</li>
                      <li>Systems Created</li>
                        <ul>
                            <li>Ingress and Egress Monitoring System</li>
                            <li>Job Out Monitoring System</li>
                            <li>Outright Management System</li>
                            <li>Online Purchase Requisition System</li>
                            <li>Android Transportation System</li>
                            <li>Workload Monitoring System (for Production)</li>
                            <li>Online Personal Driver Productivity System</li>
                            <li>Exclusive Socks Management System</li>
                            <li>CCAR Monitoring System</li>
                            <li>Automated Raffle System</li>
                        </ul>
                    </ul>
                  </div>
                </div>
              </div>
      
            </div>
          </section><!-- End Resume Section -->
      
          <!-- ======= Portfolio Section ======= -->
          <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>
      
              <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                  <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                  </ul>
                </div>
              </div>
      
              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 1</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Web 3</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 2</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Card 2</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Web 2</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 3</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Card 1</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Card 3</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Web 3</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Portfolio Section -->
      
     
          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Contact</h2>
              </div>
      
              <div class="row mt-1">
      
                <div class="col-lg-4">
                  <div class="info">
                    <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Location:</h4>
                      <p>1969 P Katamanan St. Tondo Manila</p>
                    </div>
      
                    <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p>cabato.renz.renz@gmail.com</p>
                    </div>
      
                    <div class="phone">
                      <i class="bi bi-phone"></i>
                      <h4>Call:</h4>
                      <p>+63 97778 13145</p>
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
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
      
                </div>
      
              </div>
      
            </div>
          </section><!-- End Contact Section -->
      
        </main><!-- End #main -->
      
        <!-- ======= Footer ======= -->
        <footer id="footer">
          <div class="container">
            <h3>Renz Christian Cabato</h3>
            {{-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> --}}
            <div class="social-links">
               {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
               <a href="https://www.facebook.com/renzcabatorenz" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
               <a href="https://www.instagram.com/renzcabato/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
               {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
               <a href="https://www.linkedin.com/in/renz-cabato-77b362167/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
              &copy; Copyright. All Rights Reserved
            </div>
            <div class="credits">
              Designed by Renz Cabato
            </div>
          </div>
        </footer><!-- End Footer -->
      
        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      
        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/typed.js/typed.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
      
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
      
      </body>
</html>
