<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Portofolio</title>

  <link rel="icon" type="image/png" href="img/fix.JPG" />
  <!-- box icons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <!-- font poppins  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
  <!-- cusom css -->
  <link rel="stylesheet" href="css/style.css" />

  <!-- EMAILJS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  <script type="text/javascript">
    (function() {
      emailjs.init({
        publicKey: "QIFAFYKb0_VKEWUbh",
      });
    })();
  </script>

  <!-- linkedin
  <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script> -->

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/d0ae72efc3.js" crossorigin="anonymous"></script>


</head>

<body>
  <!-- header design -->
  <header class="header">
    <a href="" class="logo">Portofolio.</a>

    <i class="bx bx-menu" id="menu-icon"></i>

    <nav class="navbar">
      <a href="#home" style="--i: 1" class="active">Home</a>
      <a href="#about" style="--i: 2">About</a>
      <a href="#services" style="--i: 3">Services</a>
      <a href="#portfolio" style="--i: 4">Portofolio</a>
      <a href="#contact" style="--i: 5">Contact</a>
      <a href="" style="--i: 6">
        <div class="theme-switch-wrapper">
          <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round"></div>
          </label>

        </div>
      </a>

    </nav>
  </header>

  <!-- home section desing -->
  <section class="home" id="home">
    <div class="home-content">
      <h3>Hello, It's Me</h3>
      <h1>Alvin Karnady</h1>
      <h3>And I'm a <span class="multiple-text"></span></h3>
      <p>
        A Fresh Graduate in computer science from Universitas Dipa Makassar,
        with skills in web and mobile development, as well as graphic
        design. With hands-on experience through campus and personal projects,
        as well as relevant internships. Fast learning and still continue
        learn new tech especially in software development and tools.
      </p>
      <div class="social-media">
        <a href="mailto:alvin.karnady@gmail.com?subject=Want to Hire You!&body=Hi Alvin, I am interested in recruiting you in our company!" style="--i: 5" target="_blank"><i class="bx bxl-gmail"></i></a>
        <a href="https://github.com/alvinkarnady" style="--i: 6" target="_blank">
          <i class="bx bxl-github"></i></a>
        <!-- <a
            href="https://www.facebook.com/alvin.karnady/"
            style="--i: 7"
            target="_blank"
            ><i class="bx bxl-facebook"></i
          ></a>
          <a
            href="https://www.twitter.com/alvin_karnady/"
            style="--i: 8"
            target="_blank"
            ><i class="bx bxl-twitter"></i
          ></a> -->
        <a href="https://www.instagram.com/alvin_karnady/" style="--i: 9" target="_blank"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/alvin-karnady/" style="--i: 10" target="_blank"><i class="bx bxl-linkedin"></i></a>
      </div>
      <a href="/ENGLISH-CV-Alvin.pdf" download="ENGLISH-CV-Alvin.pdf" target="_blank" class="btn">Download CV</a>
    </div>

    <div class="home-img">
      <a href="#about"><img src="img/fix.JPG" alt="" /></a>
    </div>
  </section>

  <!-- about section design -->
  <section class="about" id="about">
    <div class="about-content">
      <h2 class="heading">About <span>Me</span></h2>
      <!-- <h3>Web Developer!</h3> -->
      <p>
      <h2>EDUCATION</h2>
      <h1>
        Universitas Dipa Makassar | 2020 – March 2024 B.S. in Computer Science
        | GPA : 3.85 <br />
        SMA Nasional Makassar | 2015 – 2018 Science Major <br /></h1>

      <br />
      <h2>EXPERIENCE</h2>
      <h1>Journey Event Planner & Orbit Event Organizer –
        Makassar, Indonesia Event Coordinator (2018 – Present) <br />●
        Coordinated events from start to finish, ensuring smooth operation.
        <br />● Built strong relationships with clients to meet their event
        needs. <br />● Managed vendors to ensure every aspect of the event
        worked perfectly. <br />
        <br />PT. Telkom Regional VII – Makassar,
        Indonesia Regional Operation Center Intern (Aug 2023 – Sep 2023)
        <br />● Developed fullstack web application for employee leave
        requests using Laravel Framework. <br />● Updated and maintained
        accurate client data. <br />
        <br />PT. Medianet Sukses Abadi – Makassar, Indonesia IT Support
        Technician (Nov 2018 – Nov 2022) <br />● Installed and maintained
        clients' computer systems, software, and networks. <br />
        ● Installed and maintained clients' CCTV. <br />
        <br />
      </h1>
      <h2>SKILLS & TOOLS</h2>
      <h1>
        ● Database (MySQL, Laragon) ● Languange (Php, Html, css, Javascript,
        Python) ● Framework (Laravel, Flutter, NextJs, Bootstrap) ● Tools
        (VSCode, GitHub),(CorelDraw, Photoshop)<br /></h1><br>
      <h2>SOFT SKILLS</h2>
      <h1>● Ms. Office (Word, Excel, Power Point) ● Prompt AI
        ● Detail orientation ● Adaptability ● Communication ● Problem solving</h1>
      </p>
      <a href="https://www.linkedin.com/in/alvin-karnady/" class="btn">Read More</a>
    </div>
    <!-- <div class="about-img light-mode">
        <div
          class="badge-base LI-profile-badge"
          data-locale="en_US"
          data-size="large"
          data-theme="light"
          data-type="HORIZONTAL"
          data-vanity="alvin-karnady"
          data-version="v1"
        >
          <a
            class="badge-base__link LI-simple-link"
            href="https://id.linkedin.com/in/alvin-karnady?trk=profile-badge"
          ></a>
        </div>
      </div> -->
    <!-- <div class="about-img dark-mode">
      <div class="badge-base LI-profile-badge" data-locale="en_US" data-size="large" data-theme="dark" data-type="HORIZONTAL" data-vanity="alvin-karnady" data-version="v1">
        <a class="badge-base__link LI-simple-link" href="https://id.linkedin.com/in/alvin-karnady?trk=profile-badge"></a>
      </div>
    </div> -->



  </section>

  <!-- services section design -->
  <section class="services" id="services">
    <h2 class="heading">Our <span>Services</span></h2>

    <div class="services-container">
      <div class="services-box">
        <i class="bx bx-code-alt"></i>
        <h3>Web Development</h3>
        <div class="icon-container">
          <img src="img/laravel.svg" alt="Laravel">
          <img src="img/nextjs.svg" alt="NextJs">
          <img src="img/flutter.svg" alt="Flutter">
          <img src="img/my-sql.svg" alt="MySQL">
          <img src="img/bootstrap.svg" alt="Bootstrap">
          <img src="img/javascript-js.svg" alt="Javascript">
          <img src="img/file-type-html.svg" alt="Html">
          <img src="img/file-type-css.svg" alt="css">
          <img src="img/wordpress.svg" alt="Wordpress">
        </div>
        <a href="https://www.linkedin.com/in/alvin-karnady/" class="btn">Read More</a>
      </div>

      <div class="services-box">
        <i class="bx bxs-paint"></i>
        <h3>Graphic Design</h3>
        <div class="icon-container">
          <img src="img/coreldraw-alt.svg" alt="CorelDraw">
          <img src="img/adobe-photoshop.svg" alt="Photoshop">
          <img src="img/canva.svg" alt="canva">
        </div>
        <a href="https://drive.google.com/drive/folders/1EGDieGC4p4vmoTaojPWUERqSUnrJEeSq?usp=sharing" class="btn" target="_blank">Read More</a>
      </div>

      <!-- <div class="services-box">
          <i class="bx bx-bar-chart-alt"></i>
          <h3>Digital Marketing</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At
            reiciendis nisi quidem consequatur libero odio harum veniam nostrum
            accusantium incidunt?
          </p>
          <a href="#" class="btn">Read More</a>
        </div> -->
    </div>
  </section>

  <!-- Portofolio section design -->
  <section class="portfolio" id="portfolio">
    <h2 class="heading">Latest <span>Project</span></h2>

    <div class="portfolio-container">
      <div class="portfolio-box">
        <img src="img/portofolio12.jpg" alt="" />
        <div class="portfolio-layer">
          <h4>Graphic Design</h4>
          <p>CorelDraw & Photoshop</p>
          <a href="https://drive.google.com/drive/folders/1EGDieGC4p4vmoTaojPWUERqSUnrJEeSq?usp=sharing" target="_blank"><i class="bx bx-link-external"></i></a>
        </div>
      </div>


      <div class="portfolio-box">
        <img src="img/portofolio4.png" alt="" />
        <div class="portfolio-layer">
          <h4>Laravel Aplikasi Pengajuan Cuti</h4>
          <p>
            LOGIN nik : 123 pass : admin123 otomatisasi download form jika
            disetujui oleh approver.
          </p>
          <a href="https://alvin-pengajuan-cuti.000webhostapp.com/" target="_blank"><i class="bx bx-link-external"></i></a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="img/portofolio8.png" alt="" />S
        <div class="portfolio-layer">
          <h4>Laravel Blog</h4>
          <p>Laravel & Bootstrap CRUD Blog</p>
          <a href="https://vinmyblog.000webhostapp.com/" target="_blank"><i class="bx bx-link-external"></i></a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="img/invitation.png" alt="" />
        <div class="portfolio-layer">
          <h4>Katalog Website invitation</h4>
          <p>Wordpress & Elementor</p>
          <a href="https://dev-chromavue.pantheonsite.io/" target="_blank"><i class="bx bx-link-external"></i></a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="img/video-invitation.png" alt="" />
        <div class="portfolio-layer">
          <h4>Katalog Video invitation</h4>
          <p>Wordpress & Elementor</p>
          <a href="https://dev-chromavue.pantheonsite.io/katalog-wedding-video-invitation/" target="_blank"><i class="bx bx-link-external"></i></a>
        </div>
      </div>
      <div class="portfolio-box">
        <img src="img/kenangan-senja.png" alt="" />
        <div class="portfolio-layer">
          <h4>Cafe Landing Page</h4>
          <p>HTML, CSS & Javascript</p>
          <a href="https://alvinkarnady.github.io/memory-coffee/#home" target="_blank"><i class="bx bx-link-external"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- contact section design -->
  <section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me</span></h2>

    <form onsubmit="sendMail()">
      <div class="input-box">
        <input type="text" id="name" name="name" placeholder="Full Name" required />
        <input type="email" id="email" name="email" placeholder="Email Address" required />
      </div>
      <div class="input-box">
        <input type="number" id="phone" name="phone" placeholder="Mobile Number" required />
        <input type="text" id="subject" name="subject" placeholder="Email Subject" required />
      </div>
      <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
      <input type="submit" value="Send Message" class="btn" />
    </form>


    <!-- <form action="send_email.php" method="POST">
        <div class="input-box">
          <input type="text" id="name" name="name" placeholder="Full Name" required />
          <input type="email" id="email" name="email" placeholder="Email Address" required />
        </div>
        <div class="input-box">
          <input type="tel" id="phone" name="phone" placeholder="Mobile Number" required />
          <input type="text" id="subject" name="subject" placeholder="Email Subject" required />
        </div>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
        <input type="submit" value="Send Message" class="btn" />
      </form> -->

  </section>

  <!-- footer design  -->

  <footer class="footer">
    <div class="footer-text">
      <p>Copyright &copy; 2023 by Alvin Karnady | All Rights Reserved.</p>
    </div>

    <div class="footer-iconTop">
      <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
    </div>
  </footer>




</body>
<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- typed js -->
<script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>

<!-- custom js    -->
<script src="js/script.js"></script>

</html>