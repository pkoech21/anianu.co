<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anianu.com - Welcome</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f7fc; }
        .title { position: fixed; top: 0; left: 15px; font-size: 26px; font-weight: bold; color: red; font-family: 'Trebuchet MS', sans-serif; z-index: 1000; }
        .menu-icon { position: fixed; top: 10px; right: 20px; font-size: 26px; cursor: pointer; z-index: 1000; }
        .menu { display: none; position: fixed; top: 45px; right: 20px; background: white; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0,0,0,0.2); width: 160px; z-index: 999; }
        .menu a { display: flex; align-items: center; padding: 10px; text-decoration: none; color: #333; font-size: 16px; border-bottom: 1px solid #eee; }
        .menu a:hover { background: #f1f1f1; }
        .menu a:last-child { border-bottom: none; }
        .menu i { margin-right: 8px; color: #007bff; }
        .form-container { margin-top: 100px; display: flex; justify-content: center; }
        .form-box { background: white; padding: 25px; border-radius: 15px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1); width: 350px; text-align: center; }
        button.submit { width: 100%; padding: 12px; background: blue; color: white; border: none; border-radius: 25px; cursor: pointer; font-size: 16px; }
        button.submit:hover { background: darkblue; }
        .alert { margin: 10px 0; padding: 10px; border-radius: 8px; text-align: center; }
        .alert-success { background: #d4edda; color: #155724; }
        .alert-error { background: #f8d7da; color: #721c24; }
    </style>
    <script>
        function toggleMenu() {
            const menu = document.getElementById("menu");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <!-- Title -->
    <div class="title">Anianu.com</div>

    <!-- Menu Icon -->
    <div class="menu-icon" onclick="toggleMenu()">☰</div>

    <!-- Dropdown Menu -->
    <div class="menu" id="menu">
        <a href="#"><i class="fas fa-home"></i> Home</a>
        <a href="#"><i class="fas fa-user"></i> Profile</a>
        @auth
        <form method="POST" action="{{ route('logout') }}" style="margin:0;">
            @csrf
            <button type="submit" style="border:none;background:none;width:100%;text-align:left;padding:10px;cursor:pointer;">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
        @endauth
    </div>

    <!-- Form Section -->
    <div class="form-container">
        <div class="form-box">

            <!-- Flash Messages -->
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @auth
                <h2>Welcome, {{ Auth::user()->first_name }} 🎉</h2>
                <p>Your account has been created successfully.</p>
            @else
                <!-- Only Login form (no Register) -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" class="submit">Login</button>
                </form>
            @endauth
        </div>
    </div>

</body>
</html>
