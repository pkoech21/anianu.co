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
