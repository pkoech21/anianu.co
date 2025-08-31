<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anianu.com</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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

        .form-toggle { display: flex; justify-content: center; margin-bottom: 20px; }
        .form-toggle button { flex: 1; padding: 10px; border: none; border-radius: 20px; cursor: pointer; font-size: 16px; margin: 0 5px; background: #ddd; transition: 0.3s; }
        .form-toggle button.active { background: green; color: white; }

        input, select { width: 90%; padding: 12px; margin: 8px 0; border-radius: 25px; border: 1px solid #ccc; outline: none; font-size: 14px; }

        button.submit { width: 100%; padding: 12px; background: blue; color: white; border: none; border-radius: 25px; cursor: pointer; font-size: 16px; }
        button.submit:hover { background: darkblue; }
    </style>
</head>
<body>

    <!-- Title -->
    <div class="title">Anianu.com</div>

    <!-- Menu -->
    @include('partials.menu')

    <!-- Page Content -->
    <div class="form-container">
        @yield('content')
    </div>

    <script>
        function toggleForm(form) {
            document.getElementById("login-form").style.display = form === "login" ? "block" : "none";
            document.getElementById("register-form").style.display = form === "register" ? "block" : "none";
            document.getElementById("login-btn").classList.toggle("active", form === "login");
            document.getElementById("register-btn").classList.toggle("active", form === "register");
        }

        function toggleMenu() {
            const menu = document.getElementById("menu");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
        }
    </script>
</body>
</html>
