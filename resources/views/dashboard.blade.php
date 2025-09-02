<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Company</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f6f9;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 20px;
      background: #007bff;
      color: #fff;
      position: sticky;
      top: 0;
      z-index: 7000;
    }
    .navbar .logo {
      font-size: 20px;
      font-weight: bold;
    }
    .menu-btn {
      background: none;
      border: none;
      font-size: 22px;
      color: white;
      cursor: pointer;
    }

    /* Drawer Menu */
    .drawer {
      position: fixed;
      top: 0;
      right: -260px; /* hidden off-screen */
      width: 260px;
      height: 100%;
      background: #fff;
      box-shadow: -2px 0 6px rgba(0,0,0,0.2);
      padding: 20px;
      display: flex;
      flex-direction: column;
      transition: right 0.3s ease;
      z-index: 2000;
    }
    .drawer.open {
      right: 0;
    }
    .drawer-header {
      display: flex;
      justify-content: flex-end;
    }
    .close-drawer {
      font-size: 24px;
      cursor: pointer;
      color: #333;
    }
    .drawer a,
    .drawer button.logout {
      padding: 12px 15px;
      text-decoration: none;
      color: #333;
      border: none;
      background: none;
      text-align: left;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
    }
    .drawer a:hover,
    .drawer button.logout:hover {
      background: #f1f1f1;
    }
    .drawer button.logout {
      background: #dc3545;
      color: white;
      border-radius: 6px;
      margin-top: 10px;
    }
    .drawer button.logout:hover {
      background: #b02a37;
    }

    /* Overlay */
    .drawer-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      display: none;
      z-index: 1500;
    }
    .drawer-overlay.active {
      display: block;
    }

    /* Form container */
    .container {
      width: 100%;
      max-width: 500px;
      padding: 20px;
      margin: 20px auto;
      flex-grow: 1;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 14px;
    }
    textarea {
      resize: none;
      height: 80px;
    }
    .profile-upload {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 15px;
    }
    .profile-circle {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      border: 2px solid #ccc;
      background: #eaeaea;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      margin-bottom: 10px;
    }
    .profile-circle img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .btn {
      display: inline-block;
      padding: 10px 15px;
      border: none;
      border-radius: 8px;
      background: #007bff;
      color: #fff;
      font-size: 14px;
      cursor: pointer;
    }
    .btn:hover {
      background: #0056b3;
    }
    .card {
      display: none;
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
    .card img.profile {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }
    .card-images {
      display: flex;
      gap: 8px;
      margin-top: 10px;
      flex-wrap: wrap;
    }
    .card-images img {
      width: 70px;
      height: 70px;
      border-radius: 8px;
      object-fit: cover;
    }
    .card-actions {
      margin-top: 15px;
      display: flex;
      justify-content: space-between;
    }
    .btn-danger {
      background: #dc3545;
    }
    .btn-danger:hover {
      background: #a71d2a;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="logo">Anianu.com</div>
    <button class="menu-btn" onclick="toggleMenu()">☰</button>
  </div>

  <!-- Drawer Menu -->
  <div class="drawer" id="drawer">
    <div class="drawer-header">
      <span class="close-drawer" onclick="toggleMenu()">&times;</span>
    </div>
    <a href="/">Home</a>
    <a href="/profile">Profile</a>
    <a href="/dashboard">Dashboard</a>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="logout">Logout</button>
    </form>
  </div>
  <div class="drawer-overlay" id="drawerOverlay" onclick="toggleMenu()"></div>

  <div class="container">
    <!-- Preview Card -->
    <div id="previewCard" class="card">
      <div style="text-align:center;">
        <img id="cardProfile" class="profile" src="" alt="Profile">
        <h3 id="cardTitle"></h3>
        <p id="cardDesc"></p>
        <p><strong>WhatsApp:</strong> <span id="cardWhatsapp"></span></p>
        <p><strong>Social:</strong> <a id="cardSocial" href="#" target="_blank"></a></p>
        <div class="card-images" id="cardImages"></div>
        <div class="card-actions">
          <button class="btn btn-danger" onclick="discardCard()">Discard</button>
          <button class="btn" onclick="postCard()">Post</button>
        </div>
      </div>
    </div>

    <h2>Create Your Company</h2>

    <!-- Profile Upload -->
    <div class="profile-upload">
      <div class="profile-circle" id="profileCircle">+</div>
      <input type="file" id="profileInput" accept="image/*" style="display:none">
      <button class="btn" type="button" onclick="document.getElementById('profileInput').click()">Upload Profile</button>
    </div>

    <!-- Form Inputs -->
    <div class="form-group">
      <label for="title">Username/Title</label>
      <input type="text" id="title" placeholder="Enter your company name or title">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea id="description" placeholder="Describe your company"></textarea>
    </div>
    <div class="form-group">
      <label for="whatsapp">WhatsApp Number</label>
      <input type="text" id="whatsapp" placeholder="e.g. +2547XXXXXXXX">
    </div>
    <div class="form-group">
      <label for="social">Social Media URL (optional)</label>
      <input type="url" id="social" placeholder="https://facebook.com/yourpage">
    </div>
    <div class="form-group">
      <label for="images">Upload up to 5 Images</label>
      <input type="file" id="images" accept="image/*" multiple>
    </div>

    <button class="btn" onclick="createCard()">Create Page</button>
  </div>

  <script>
    function toggleMenu() {
      const drawer = document.getElementById('drawer');
      const overlay = document.getElementById('drawerOverlay');
      drawer.classList.toggle('open');
      overlay.classList.toggle('active');
    }

    const profileCircle = document.getElementById("profileCircle");
    const profileInput = document.getElementById("profileInput");
    let profileImage = "";

    profileInput.addEventListener("change", function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          profileCircle.innerHTML = `<img src="${e.target.result}" alt="Profile">`;
          profileImage = e.target.result;
        }
        reader.readAsDataURL(file);
      }
    });

    function createCard() {
      const title = document.getElementById("title").value.trim();
      const desc = document.getElementById("description").value.trim();
      const whatsapp = document.getElementById("whatsapp").value.trim();
      const social = document.getElementById("social").value.trim();
      const images = document.getElementById("images").files;

      if (!title || !desc || !whatsapp) {
        alert("Please fill all required fields.");
        return;
      }

      document.getElementById("cardProfile").src = profileImage || "";
      document.getElementById("cardTitle").innerText = title;
      document.getElementById("cardDesc").innerText = desc;
      document.getElementById("cardWhatsapp").innerText = whatsapp;
      document.getElementById("cardSocial").innerText = social || "N/A";
      document.getElementById("cardSocial").href = social || "#";

      const cardImages = document.getElementById("cardImages");
      cardImages.innerHTML = "";
      Array.from(images).slice(0, 5).forEach(file => {
        const reader = new FileReader();
        reader.onload = function(e) {
          const img = document.createElement("img");
          img.src = e.target.result;
          cardImages.appendChild(img);
        }
        reader.readAsDataURL(file);
      });

      document.getElementById("previewCard").style.display = "block";
    }

    function discardCard() {
      document.getElementById("previewCard").style.display = "none";
    }

    function postCard() {
      const formData = new FormData();

      const profileFile = document.getElementById("profileInput").files[0];
      if (profileFile) {
        formData.append("profile", profileFile);
      }

      formData.append("title", document.getElementById("cardTitle").innerText);
      formData.append("description", document.getElementById("cardDesc").innerText);
      formData.append("whatsapp", document.getElementById("cardWhatsapp").innerText);
      formData.append("social", document.getElementById("cardSocial").href);

      const images = document.getElementById("images").files;
      for (let i = 0; i < images.length; i++) {
        formData.append("images[]", images[i]);
      }

      fetch("/companypages", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: formData
      })
      .then(response => response.json())
      .then(result => {
        alert("Card saved successfully!");
        console.log(result);
        window.location.href = "/"; // redirect to home
      })
      .catch(error => {
        console.error("Error:", error);
        alert("Something went wrong!");
      });
    }
  </script>
</body>
</html>
