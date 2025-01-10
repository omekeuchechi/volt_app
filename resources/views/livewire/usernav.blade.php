<nav>
    <div class="logo">
        <div class="logo-image">
            <img src="logo.png" alt="">
        </div>
    </div>
    <div class="menu-items">
        <ul class="navLinks">
            <li class="navList active">
                <a href="#">
                    {{-- <ion-icon name="home-outline"></ion-icon> --}}
                    <i class="fa fa-pie-chart"></i>
                    <span class="links">Dashboard</span>
                </a>
            </li>
            <li class="navList">
                <a href="#">
                    {{-- <ion-icon name="folder-outline"></ion-icon> --}}
                    <i class="fas fa-chalkboard-user"></i>
                    <span class="links">Live class</span>
                </a>
            </li>
            <li class="navList">
                <a href="#">
                    {{-- <ion-icon name="analytics-outline"></ion-icon> --}}
                    <i class="fas fa-code"></i>
                    <span class="links">Get started</span>
                </a>
            </li>
            <li class="navList">
                <a href="#">
                    {{-- <ion-icon name="heart-outline"></ion-icon> --}}
                    <i class="fas fa-comments"></i>
                    <span class="links">Communities</span>
                </a>
            </li>
            <li class="navList">
                <a href="#">
                    {{-- <ion-icon name="chatbubbles-outline"></ion-icon> --}}
                    <i class="fas fa-bell"></i>
                    <span class="links">Notifications</span>
                </a>
            </li>
        </ul>
        <ul class="bottom-link">
            <li>
                <a href="{{ url('/profile') }}">
                    <i class="fas fa-user-gear"></i>
                    <span class="links">Profile</span>
                </a>
            </li>
        <li onclick="return confirm('Are you sure to logout?')" class="dash-list">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="links">Logout</span>
                             
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="display: none;">
                                 @csrf
                            </form>
            </a>
            </li>
        </ul>
    </div>
</nav>