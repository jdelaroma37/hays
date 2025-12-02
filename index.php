<?php

session_start();
$logged_in=isset($_SESSION['user_id']);
$username = $logged_in ? $_SESSION['first_name'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barangay San Vicente II</title>
   <?php include 'favicon_links.php'; ?>
  <link rel="stylesheet" href="index.css">
  <script>
    // Toggle hamburger menu for mobile
    function toggleMenu() {
      document.getElementById("navLinks").classList.toggle("active");
    }

    // Dropdown toggle for profile menu
    function toggleDropdown() {
      document.querySelector(".dropdown-menu").classList.toggle("show");
    }
  </script>
</head>
<body>
  
<!--- NAVIGATION BAR --->
<nav>
  <div class="logo">
    <img src="images/logo.jpg" alt="logo">
    <h2>Barangay San Vicente II</h2>
  </div>

  <div class="menu-toggle" onclick="toggleMenu()">
    <span></span><span></span><span></span>
  </div>

  <div class="nav-links" id="navLinks">
    <a href="#content">HOME</a>
    <a href="#services">SERVICES</a>
    <a href="#our-barangay">OUR BARANGAY</a>
    <a href="#about">ABOUT</a>
    <a href="#contact">CONTACT INFO</a>

    <div class="btns">
      <button class="btn" onclick="window.open('https://www.https://www.facebook.com/', '_blank')">Get in touch →</button>
      </div>
    </div>
</nav>

<!-- Main Content -->
<section class="content" id="content">
 <!-- HERO SECTION -->
<section class="hero">
    <h3 class="hero-subtitle">Let's build a beautiful environment within our barangay!</h3>
    <h1 class="hero-title"><strong>WELCOME</strong></h1>
    <img src="images/logo.jpg" alt="Barangay Logo" class="image-logo">
    <h2>Barangay San Vicente II</h2>
    <h3 style="color: #fff;">Municipality of Silang, Province of Cavite</h3>
    <p>Located From:</p>
    <button class="map-btn" onclick="window.open('https://www.google.com/maps/search/Barangay+San+Vicente+II,+Silang+Cavite/@14.2275865,120.9682551,17z', '_blank')">View on Google Maps</button>
<br>
    <div class="hero-buttons">
        <button class="hero-btn loginBtn">LOGIN</button>
        <button class="hero-btn registerBtn">REGISTER</button>
    </div>
</section>


<!-- SERVICE BOXES -->
<section class="services" id="services">
  <h1>Our Services</h1>
  <div class="service-container">

<!--1. -->  <div class="service-box">
    <div class="service-icon">📄</div>
    <h3>Barangay Clearance</h3>
    <p><strong>Purpose:</strong> Usually for employment, business, or other legal requirements.</p>
    <button id="loginBtn">Proceed</button>
  </div>

 <!--2. --> <div class="service-box">
    <div class="service-icon">📜</div>
    <h3>Certificate of Residency</h3>
    <p><strong>Purpose:</strong> Proof that you officially reside in the barangay.</p>
    <button id="loginBtn">Proceed</button>
  </div>

  <!--3. --> <div class="service-box">
    <div class="service-icon">🧾</div>
    <h3>Certificate of Indigency</h3>
    <p><strong>Purpose:</strong> Proof of indigency for government assistance.</p>
    <button id="loginBtn">Proceed</button>
  </div>

  <!--4. --> <div class="service-box">
    <div class="service-icon">🏢</div>
    <h3>Barangay Business Clearance</h3>
    <p><strong>Purpose:</strong> Authorization to operate your business within the barangay.</p>
    <button id="loginBtn">Proceed</button>
  </div>

  <!--5. --> <div class="service-box">
    <div class="service-icon">🧰</div>
    <h3>Business Permit</h3>
    <p><strong>Purpose:</strong> Official authorization for business operation within the barangay.</p>
    <button id="loginBtn">Proceed</button>
  </div>

  <!--6. --> <div class="service-box">
    <div class="service-icon">🕊️</div>
    <h3>Certificate of Good Moral Character</h3>
    <p><strong>Purpose:</strong> Proof of good standing within the community.</p>
    <button id="loginBtn">Proceed</button>
  </div>

<a href="#" class="view-all" id="loginBtn">View all services →</a>
</section>

<section id="our-barangay">
  <div class="barangay-container">

    <!-- INTRO -->
    <div class="barangay-intro">
      <h2>Our Barangay</h2>
      <p>
        Barangay San Vicente II is a peaceful and progressive community in Silang, Cavite.
        It is known for its unity, compassion, and dedication to public service.
      </p>
    </div>

    <!-- MAIN GRID -->
    <div class="barangay-grid">

      <!-- LEFT COLUMN -->
      <div class="barangay-left">

        <!-- Google Map -->
        <div class="barangay-map card">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.646687964016!2d120.9682551!3d14.2275865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cdb8e4a8b8c7%3A0x79c16a7b4a0b43ff!2sBarangay%20San%20Vicente%20II%2C%20Silang%2C%20Cavite!5e0!3m2!1sen!2sph!4v1696750000000!5m2!1sen!2sph"
            allowfullscreen
            loading="lazy">
          </iframe>
        </div>

        <!-- MVM Section -->
        <div class="mvm-section card">
          <div class="tab-buttons">
            <button class="tab-btn active" data-tab="vision">Our Vision</button>
            <button class="tab-btn" data-tab="mission">Our Mission</button>
            <button class="tab-btn" data-tab="mithiin">Mithiin</button>
            <button class="tab-btn" data-tab="layunin">Layunin</button>
          </div>

          <div class="mvm-tab-content">
            <p id="vision" class="active">• Ang Barangay San Vicente II ay naglalayong maging isa sa mga progresibong Barangay sa Silang, Cavite na may sibilisado, may takot sa Diyos at mahusay na kaalaman sa lipunan, nagpapanatili ng pang Ekonimiya at panlipunang kalagayan ng kapaligiran para sa komunidad kung saan ito ay libre sa kahirapan, polusyon, at mga krimen sa ilalim ng disente at metatag na pamumuno.</p>
            <p id="mission">• Upang matulungan ang nasasakupan, sa kahit posibleng paraan para sa problema ng Barangay. At para umunlad ang batayang serbisyong panlipunan para sa mga mamamayan at upang magkaloob ng panlipunan, pang ekonomiya, kapaligiran, at tulong sa imprastraktura sa ilalim ng diwa at transparency at mabuting pamamahala.</p>
            <p id="mithiin">• Ang magkaroon ng paghahanda sa mga pwede mangyari kalamidad at sakuna. At maging responsable sa ating kapaligiran at maturuan ang mga residente na dapat nilang gawin sa mga sakuna.</p>
            <p id="layunin">• Makatulong sa pagbibigay alam sa wastong paghahanda sa mga kalamidad na maaaring dumating sa mamamayan ng Barangay San Vicente II, at mabigyan ng sapat na kaalaman ang mga mamamayan sa mga unos.</p>
          </div>
        </div>

        <!-- HAZARD MAPS -->
        <div class="hazard-maps card">
          <div class="hazard-img-container" style="display:flex; gap:10px; flex-wrap:wrap;">
            <div style="flex:1;">
              <h3 class="hazard-title">Hazard Map 1</h3>
              <img src="images/hazard-map1.png" class="hazard-img" onclick="openLightbox(this)">
            </div>
            <div style="flex:1;">
              <h3 class="hazard-title">Hazard Map 2</h3>
              <img src="images/hazard-map2.png" class="hazard-img" onclick="openLightbox(this)">
            </div>
          </div>
        </div>

      </div>

      <!-- RIGHT COLUMN -->
      <div class="barangay-officials card">
        <!-- Punong Barangay -->
        <div id="pbContainer"></div>

        <!-- Kagawads -->
        <div class="kagawad-wrapper">
          <div id="kagawadRowA" class="kagawad-row"></div>
          <div id="kagawadRowB" class="kagawad-row"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- LIGHTBOX -->
<div id="lightbox" onclick="closeLightbox()">
  <img id="lightbox-img" src="" alt="Expanded Image">
</div>





<section class="cta-section">
    <h2>Ready to Explore Our Barangay?</h2>
    <p>Explore our services and learn how Ebarangay Portal function barangay operations.</p>

    <div class="cta-buttons">
        <a href="about.php" class="btn-gradient">About Ebarangay</a>
        <a href="contact_us.php" class="btn-outline">Contact Us</a>
    </div>
</section>

<footer class="footer">
    <div class="footer-top">

        <h2>Stay Updated with our Barangay Portal</h2>
        <p>Get the latest updates on our barangay and barangay services</p>
    </div>

    <div class="footer-content">

        <!-- LEFT SECTION -->
        <div class="footer-about">
            <img src="resident/images/logo.jpg" alt="Ebarangay Logo" class="footer-logo">
            <p>
                Building a safe<br>united, and progressive<br>community together. 
            </p>
        </div>

        <!-- QUICK LINKS -->
        <div class="footer-links">
            <h3>QUICK LINKS</h3>
            <a href="resident_dashboard.php">Home</a>
            <a href="services.php">Services</a>
            <a href="about.php">About Us</a>
            <a href="contact_us.php">Contact</a>
        </div>

        <!-- SERVICES -->
        <div class="footer-services">
            <h3>OUR SERVICES</h3>
            <a href="services.php">Barangay Clearances</a>
            <a href="services.php">Certificate of Residency</a>
            <a href="services.php">Certificate of Indigency</a>
            <a href="services.php">Incident Report</a>
            <a href="services.php">More</a>
        </div>

        <!-- CONTACT -->
        <div class="footer-contact">
            <h3>GET IN TOUCH</h3>
            <p>📧 info@ebarangay.ph</p>
            <p>📞 0968-852-6355</p>

            <a href="#" class="footer-download">DOWNLOAD APP</a>
        </div>

    </div>
</footer>














<!---------------------------MODALS HERE------------------------------>

<!-- RESIDENT LOGIN MODAL -->
<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close" id="closeLogin">&times;</span>
    <h2>Resident Login</h2>

    <form action="login.php" method="post">
      <input type="text" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <a href="#" id="forgotPassword" class="forgot-link">Forgot Password?</a>
      <button type="submit">Login</button>
    </form>

    <p class="no-account">
      Don’t have an account? <a href="#" id="openRegister">Register</a><br>
      Login as <a href="admin/admin_login.php" class="admin-link">Admin</a></p>
  </div>
</div>

<!-- REGISTER MODAL -->
<div id="registerModal" class="modal">
  <div class="modal-content large-modal">
    <span class="close" id="closeRegister">&times;</span>
    <h2 style="align-items: center;">Resident Registration</h2>
<br>
    
<!---Progress Identificator--->
 <div class="step-progress">
  <div class="step-item active" data-tab="basic">
    <div class="circle">1</div>
    <p>Personal</p>
  </div>

  <div class="step-line"></div>

  <div class="step-item" data-tab="address">
    <div class="circle">2</div>
    <p>Residency</p>
  </div>

  <div class="step-line"></div>

  <div class="step-item" data-tab="other">
    <div class="circle">3</div>
    <p>Others</p>
  </div>

  <div class="step-line"></div>

  <div class="step-item" data-tab="account">
    <div class="circle">4</div>
    <p>Account</p>
  </div>
</div>

 <!-- ===== FORM ===== -->
    <form id="registerForm" action="register.php" method="post" enctype="multipart/form-data">

      <!-- BASIC -->
      <div class="tab-content active" id="basic">
        <h3>Personal Information</h3>

        <label>Photo</label>
        <input type="file" name="photo" accept="image/*" required/>

        <label>First Name</label>
        <input type="text" name="first_name" placeholder="First Name" required />

        <label>Middle Name</label>
        <input type="text" name="middle_name" placeholder="Middle Name" />

        <label>Last Name</label>
        <input type="text" name="last_name" placeholder="Last Name" required />

        <label>Suffix</label>
        <input type="text" name="suffix" placeholder="Suffix (if any)" />

        <label>Gender</label>
        <select name="gender" required>
          <option value="">Select</option>
          <option>Female</option>
          <option>Male</option>
          <option>Other</option>
        </select>

        <label>Civil Status</label>
        <select name="civil_status" required>
          <option value="">Select</option>
          <option>Single</option>
          <option>Married</option>
          <option>Widowed</option>
          <option>Separated</option>
        </select>

        <label>Date of Birth</label>
        <input type="date" name="date_of_birth" required />

        <label>Place of Birth</label>
        <input type="text" name="place_of_birth" placeholder="Place of Birth" required />

        <label>Nationality</label>
        <input type="text" name="nationality" placeholder="Nationality" required />

        <label>Religion</label>
        <input type="text" name="religion" placeholder="Religion" />

        <button type="button" class="next-btn" data-next="address">Next ➜</button>
      </div>

      <!-- ADDRESS -->
      <div class="tab-content" id="address">
        <h3>Residency Information</h3>

        <label>Home Number</label>
        <input type="text" name="home_number" placeholder="Home Number" required />

        <label>Street</label>
        <input type="text" name="street" placeholder="Street" required />

        <label>Barangay</label>
        <input type="text" name="barangay" placeholder="Barangay" required />

        <label>Municipality</label>
        <input type="text" name="municipality" placeholder="Municipality" required />

        <label>City / Province</label>
        <input type="text" name="city_province" placeholder="City / Province" required />

        <div class="nav-btns">
          <button type="button" class="back-btn" data-prev="basic">⬅ Back</button>
          <button type="button" class="next-btn" data-next="other">Next ➜</button>
        </div>
      </div>

      <!-- OTHER INFO -->
      <div class="tab-content" id="other">
        <h3>Other Information</h3>

        <label>Voter</label>
        <select name="voter" required>
          <option value="">Select</option>
          <option>Yes</option>
          <option>No</option>
        </select>

        <label>Voter in this Barangay?</label>
        <select name="voter_in_barangay" required>
          <option value="">Select</option>
          <option>Yes</option>
          <option>No</option>
        </select>

        <label>Precint No.</label>
        <input type="text" name="precinct_number" />

        <label>Senior Citizen</label>
        <select name="senior_citizen" required>
          <option value="">Select</option>
          <option>Yes</option>
          <option>No</option>
        </select>

        <label>Youth Member (15-30 y/o)</label>
        <select name="youth_member" required>
          <option value="">Select</option>
          <option>Yes</option>
          <option>No</option>
        </select>

        <label>Solo Parent</label>
        <select name="solo_parent" required>
          <option value="">Select</option>
          <option>Yes</option>
          <option>No</option>
        </select>

        <label>Father's Name</label>
        <input type="text" name="father_name" placeholder="Father's Name" />

        <label>Mother's Name</label>
        <input type="text" name="mother_name" placeholder="Mother's Name" />

        <label>Guardian</label>
        <input type="text" name="guardian_name" placeholder="Guardian" required />

        <label>Guardian Contact Number</label>
        <input type="text" name="guardian_contact" placeholder="Guardian Contact Number" required />

        <div class="nav-btns">
          <button class="back-btn" type="button" data-prev="address">⬅ Back</button>
          <button class="next-btn" type="button" data-next="account">Next ➜</button>
        </div>
      </div>

      <!-- ACCOUNT -->
      <div class="tab-content" id="account">
        <h3>Account Information</h3>

        <label>Name</label>
        <input type="text" name="display_name" placeholder="Name" required />

        <label>Email</label>
        <input type="email" name="email" placeholder="Email" required />

        <label>Contact Number</label>
        <input type="text" name="contact_number" placeholder="Contact Number" required />

        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required />

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required />

        <div class="nav-btns">
          <button class="back-btn" type="button" data-prev="other">⬅ Back</button>
          <button class="submit-btn" type="submit">Register</button>
        </div>
      </div>

    </form>
  </div>
</div>




















<?php

if (isset($_SESSION['reg_errors'])) {

  $errors = $_SESSION['reg_errors'];
  
  echo'<div id="serverMessage" data-message="' . htmlspecialchars(implode('|', $errors)) . '"></div>'; 
  
  unset($_SESSION['reg_errors']);

}

if (isset($_SESSION['reg_success'])) {
  
  echo'<div id="serverMessage" data-message="' . htmlspecialchars($_SESSION['reg_success']) . '"></div>';
  
  unset($_SESSION['reg_success']);

}

if (isset($_SESSION['login_error'])) {
  
  echo'<div id="serverMessage" data-message="' . htmlspecialchars($_SESSION['login_error']) . '"></div>';
  
  unset($_SESSION['login_error']);

}

?>










<script src="index.js"></script>

</body>
</html>