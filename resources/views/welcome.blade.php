<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background: #f4f4f9;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgb(225, 224, 224);
      padding: 15px 20px;
    }

    .navbar .logo {
      font-size: 22px;
      font-weight: bold;
      color: red;
    }

    .navbar .icons {
      display: flex;
      justify-content: center;
      flex: 1;
    }

    .navbar .icons a {
      margin: 0 15px;
      font-size: 22px;
      text-decoration: none;
    }

    .navbar .icons a:hover {
      opacity: 0.7;
    }

 /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #e3e6e9;
      padding: 10px 20px;
      color: #fff;
    }

    /* Left section */
    .navbar-left {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .profile-img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      border: 2px solid white;
      object-fit: cover;
    }

    .logo {
      font-size: 22px;
      font-weight: bold;
    }

    /* Right section */
    .navbar-right {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .search-bar {
      padding: 5px 10px;
      border-radius: 20px;
      border: none;
      outline: none;
      width: 180px;
    }

    .nav-btn {
      display: flex;
      align-items: center;
      gap: 5px;
      background: white;
      color: #0077cc;
      border: none;
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .nav-btn:hover {
      background: #e6e6e6;
    }

    .nav-btn i {
      font-size: 14px;
    }
    /* Layout with left, center, right */
    .main-layout {
      display: grid;
      grid-template-columns: 1fr 2fr 1fr;
      gap: 1px; /* small space between sections */
      padding: 10px;
      flex: 1;
    }

    /* Image grid */
    .image-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 5px; /* small space between images */
    }

    .image-grid a {
      display: block;
      width: 100%;
      height: 70%;
    }

    .image-grid a img {
      width: 100%;
      height: 100%;
      object-fit: cover; /* make images fill their box */
      display: block;
      border: 1px solid red; /* red frame */
    }

    /* Video section */
    .videos {
      display: grid;
      grid-template-columns: 1fr;
      gap: 15px;
      justify-items: center;
      align-items: center;
    }

    .videos iframe {
      width: 100%;
      max-width: 560px;
      height: 315px;
      border: none;
      border-radius: 5px;
    }

    /* Footer */
    .footer {
      background: rgb(235, 231, 231);
      color: white;
      padding: 20px 10px;
      text-align: center;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
    }

    .footer .icons a {
      margin: 0 10px;
      font-size: 22px;
      text-decoration: none;
    }
    .footer .icons a:hover {
      opacity: 0.7;
    }

    /* Social Colors */
    .home { color: #00c853; }
    .whatsapp { color: #25D366; }
    .youtube { color: #FF0000; }
    .facebook { color: #1877F2; }
    .twitter { color: #1DA1F2; }
    .instagram { color: #E1306C; }
    .linkedin { color: #0A66C2; }

    /* Search Bar */
    .footer .search-bar {
      margin-top: 10px;
    }
    .footer input[type="text"] {
      padding: 8px;
      border-radius: 20px;
      border: none;
      width: 60%;
      max-width: 300px;
    }
    .footer button {
      padding: 8px 15px;
      border: none;
      border-radius: 20px;
      background: #00c853;
      color: white;
      cursor: pointer;
    }
    .footer button:hover {
      background: #009624;
    }
    /* Footer */
.footer {
  background: rgb(235, 231, 231);
  color: white;
  padding: 20px 10px;
  text-align: center;
  margin-top: 30px; /* space above footer */
  position: relative; /* normal flow instead of fixed */
}

/* Add bottom padding so images don’t get hidden */
.main-layout {
  margin-bottom: 100px; /* adjust if you add forms later */
}
  </style>
</head>
<body>

<div class="navbar">
  <div class="navbar-left">
    <img src="https://via.placeholder.com/40" alt="Profile" class="profile-img">
    <div class="logo">Anianu.com</div>
  </div>

  <div class="icons">
    <a href="#"><i class="fab fa-whatsapp whatsapp"></i></a>
    <a href="#"><i class="fab fa-youtube youtube"></i></a>
    <a href="#"><i class="fab fa-facebook facebook"></i></a>
    <a href="#"><i class="fab fa-twitter twitter"></i></a>
  </div>

  <div class="navbar-right">
    <input type="text" class="search-bar" placeholder="Search...">
    <button class="nav-btn"><i class="fa fa-user"></i> Account</button>

    <!-- Laravel Logout -->
    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button type="submit" class="nav-btn">
            <i class="fa fa-sign-out-alt"></i> Logout
        </button>
    </form>
  </div>
</div>


  <!-- Main Layout -->
  <div class="main-layout">
    <!-- Left Images -->
    <div class="image-grid">
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 1"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 2"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 3"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 4"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 5"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 6"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 7"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 8"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 9"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 10"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 11"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 12"></a>
       <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 1"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 2"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 3"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 4"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 5"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 6"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 7"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 8"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 9"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 10"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 11"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 12"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 2"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 3"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 4"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 5"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 6"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 7"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 8"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 9"></a>
      
     
      <!-- Repeat up to 32 images -->
    </div>

    <!-- Center Videos -->
    <div class="videos">
      <iframe src="https://www.youtube.com/embed/HXIWcTjIM_I" frameborder="0" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/HXIWcTjIM_I" frameborder="0" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/HXIWcTjIM_I" frameborder="0" allowfullscreen></iframe>
    </div>

    <!-- Right Images -->
    <div class="image-grid">
      <a href="https://example.com/right1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Right Image 1"></a>
      <a href="https://example.com/right2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Right Image 2"></a>
      <a href="https://example.com/right3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Right Image 3"></a>
      <a href="https://example.com/right4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Right Image 4"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 5"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 6"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 7"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 8"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 9"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 10"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 11"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 12"></a>
       <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 1"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 2"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 3"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 4"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 5"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 6"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 7"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 8"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 9"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 10"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 11"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 12"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 2"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 3"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 4"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 5"></a>
      <a href="https://example.com/link2"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 6"></a>
      <a href="https://example.com/link3"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 7"></a>
      <a href="https://example.com/link4"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 8"></a>
      <a href="https://example.com/link1"><img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=300" alt="Image 9"></a>
      
      
      <!-- Repeat up to 32 images -->
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="icons">
      <a href="{{ route('home') }}" class="home"><i class="fas fa-home"></i></a>
      <a href="#"><i class="fab fa-whatsapp whatsapp"></i></a>
      <a href="#"><i class="fab fa-youtube youtube"></i></a>
      <a href="#"><i class="fab fa-facebook facebook"></i></a>
      <a href="#"><i class="fab fa-twitter twitter"></i></a>
      <a href="#"><i class="fab fa-instagram instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin linkedin"></i></a>
      <a href="mailto:contact@anianu.com"><i class="fas fa-envelope"></i></a>
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Search...">
      <button type="button">Search</button>
    </div>
  </div>


</body>
</html>
