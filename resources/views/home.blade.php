<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anianu.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0; padding: 0;
      background: #f4f7fc;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #fff;
      padding: 12px 20px;
      box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      z-index: 1000;
    }
    .navbar .logo {
      font-size: 22px;
      font-weight: bold;
      color: red;
      font-family: 'Trebuchet MS', sans-serif;
    }

    /* Hamburger button */
    .menu-btn {
      font-size: 22px;
      cursor: pointer;
      background: none;
      border: none;
      outline: none;
      color: #333;
    }

    /* Dropdown menu */
    .menu {
      display: none;
      position: absolute;
      top: 60px;
      right: 20px;
      background: white;
      border-radius: 8px;
      box-shadow: 0px 2px 8px rgba(0,0,0,0.2);
      overflow: hidden;
      flex-direction: column;
      min-width: 160px;
      z-index: 1500;
    }
    .menu a {
      padding: 12px 15px;
      text-decoration: none;
      color: #333;
      display: block;
      transition: 0.3s;
    }
    .menu a:hover { background: #f1f1f1; }
    .menu .logout {
      background: #dc3545;
      color: white;
    }
    .menu .logout:hover { background: #b02a37; }

    /* Center buttons (Login/Register) */
    .navbar .links {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }
    .navbar .links button {
      margin: 0 5px;
      padding: 8px 14px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 15px;
      transition: 0.3s;
    }
    .navbar .links .login-btn { background: #007bff; color: white; }
    .navbar .links .register-btn { background: #28a745; color: white; }
    .navbar .links button:hover { opacity: 0.9; }

    /* Page content */
    .content {
      max-width: 900px;
      margin: 90px auto 20px;
      padding: 15px;
    }
    .card {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
    .card h3 { margin: 0 0 10px; color: #007bff; }
    .card p { margin: 0; color: #555; }

    /* Modal */
    .modal {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.5);
      justify-content: center;
      align-items: center;
      z-index: 2000;
      padding: 15px;
    }
    .modal-content {
      background: white;
      padding: 20px;
      border-radius: 10px;
      width: 100%;
      max-width: 350px; /* smaller on desktop */
      position: relative;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      max-height: 90vh; /* prevent overflow */
      overflow-y: auto; /* scroll if content too tall */
    }
    .modal-content h2 {
      margin-bottom: 12px;
      text-align: center;
      color: #333;
      font-size: 20px;
    }
    .modal-content input,
    .modal-content select {
      width: 100%;
      padding: 8px;
      margin: 6px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }
    .modal-content button.submit {
      width: 100%;
      padding: 10px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 15px;
      margin-top: 8px;
    }
    .modal-content button.submit:hover { background: #0056b3; }
    .close-btn {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 18px;
      cursor: pointer;
      color: #555;
    }

    /* Company cards grid */
    .content {
      max-width: 1200px;
      margin: 20px auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }
    @media (min-width: 1024px) {
      .content { grid-template-columns: repeat(5, 1fr); }
    }
    @media (max-width: 768px) {
      .content { grid-template-columns: repeat(3, 1fr); }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="logo">Anianu.com</div>
    <div class="links">
      @guest
        <button class="login-btn" onclick="openModal('loginModal')">Login</button>
        <button class="register-btn" onclick="openModal('registerModal')">Register</button>
      @endguest
    </div>
    @auth
    <button class="menu-btn" onclick="toggleMenu()">
      <i class="fas fa-bars"></i>
    </button>
    <div class="menu" id="menu">
      <a href="/">Home</a>
      <a href="/profile">Profile</a>
      <a href="/dashboard">Dashboard</a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout" style="width:100%; border:none; text-align:left; padding:12px 15px; cursor:pointer;">Logout</button>
      </form>
    </div>
    @endauth
  </div>

  <!-- Content -->
  <div class="content">
    @foreach($companies as $company)
      <div class="card">
        <h3>{{ $company->title }}</h3>
        <p>{{ $company->description }}</p>
        @if($company->profile)
          <img src="{{ asset('storage/' . $company->profile) }}" alt="Profile Image" style="width:100px; border-radius:50%; margin-top:10px;">
        @endif
        <p><strong>WhatsApp:</strong> {{ $company->whatsapp }}</p>
        @if($company->social)
          <p><a href="{{ $company->social }}" target="_blank">Visit Social Profile</a></p>
        @endif
        @if($company->images && is_array($company->images))
          <div style="margin-top:10px;">
            @foreach($company->images as $img)
              <img src="{{ asset('storage/' . $img) }}" alt="Company Image" style="width:80px; height:80px; object-fit:cover; border-radius:6px; margin:3px;">
            @endforeach
          </div>
        @endif
      </div>
    @endforeach
  </div>

  <!-- Login Modal -->
  <div class="modal" id="loginModal">
    <div class="modal-content">
      <span class="close-btn" onclick="closeModal('loginModal')">&times;</span>
      <h2>Login</h2>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" class="submit">Login</button>
      </form>
    </div>
  </div>

  <!-- Register Modal -->
  <div class="modal" id="registerModal">
    <div class="modal-content">
      <span class="close-btn" onclick="closeModal('registerModal')">&times;</span>
      <h2>Register</h2>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" placeholder="Username" required>
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="tel" name="phone" placeholder="Phone Number (10 digits)" pattern="[0-9]{10}" required>
        <input type="date" name="dob" required>
        <select name="gender" required>
          <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
        <input type="text" name="state" placeholder="State" required>
        <input type="text" name="city" placeholder="City" required>
        <input type="text" name="pincode" placeholder="Pincode (6 digits)" pattern="[0-9]{6}" required>
        <input type="text" name="position" placeholder="Position Applying For" required>
        <input type="url" name="social_profile" placeholder="Social Media Profile (Optional)">
        <input type="url" name="instagram" placeholder="Instagram Profile URL">
        <input type="url" name="youtube" placeholder="YouTube URL">
        <input type="url" name="facebook" placeholder="Facebook Profile URL">
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <button type="submit" class="submit">Register</button>
      </form>
    </div>
  </div>

  <script>
    function openModal(id) {
      document.getElementById(id).style.display = "flex";
    }
    function closeModal(id) {
      document.getElementById(id).style.display = "none";
    }
    window.onclick = function(event) {
      document.querySelectorAll('.modal').forEach(modal => {
        if (event.target === modal) modal.style.display = "none";
      });
    }
    function toggleMenu() {
      const menu = document.getElementById('menu');
      menu.style.display = (menu.style.display === 'flex') ? 'none' : 'flex';
      menu.style.flexDirection = 'column';
    }
  </script>

</body>
</html>
