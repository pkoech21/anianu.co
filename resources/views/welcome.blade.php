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
      color: white;
      font-size: 22px;
      text-decoration: none;
    }

    .navbar .icons a:hover {
      opacity: 0.7;
    }

    /* Main Content */
    .content {
      flex: 1;
      text-align: center;
      padding: 40px;
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
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="logo">Anianu.com</div>
    <div class="icons">
      <a href="#"><i class="fab fa-whatsapp whatsapp"></i></a>
      <a href="#"><i class="fab fa-youtube youtube"></i></a>
      <a href="#"><i class="fab fa-facebook facebook"></i></a>
      <a href="#"><i class="fab fa-twitter twitter"></i></a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="content">
    <h1>Welcome, {{ Auth::user()->name ?? 'Guest' }}!</h1>
    <p>You have successfully logged in.</p>
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
