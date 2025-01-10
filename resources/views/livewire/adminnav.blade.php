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
                    <i class="fas fa-chart-pie"></i>
                    <span class="links">Dashboard</span>
                </a>
            </li>
            <li class="navList">
                <a href="#">
                    <i class="fas fa-users-gear"></i>
                    <span class="links">Admin Users</span>
                </a>
            </li>
            <li class="navList">
                <a href="#">
                    <i class="fas fa-school"></i>
                    <span class="links">School Manegement</span>
                </a>
            </li>
            <li class="navList">
                <a href="#">
                    <i class="fas fa-blog"></i>
                    <span class="links">Post Analytics</span>
                </a>
            </li>
            <li class="navList">
                <a href="#">
                    <i class="fas fa-comment-sms"></i>
                    <span class="links">Comments Manegement</span>
                </a>
            </li>
        </ul>
        <ul class="bottom-link">
            <li>
                <a href="#">
                    <i class="fas fa-gear"></i>
                    <span class="links">Settings</span>
                </a>
            </li>
            <li onclick="return confirm('Are you sure to logout?')" class="dash-list">
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="links">Logout</span>
                                 
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="display: none;visibility:hidden;">
                                     @csrf
                                </form>
                </a>
                </li>
        </ul>
    </div>
</nav>