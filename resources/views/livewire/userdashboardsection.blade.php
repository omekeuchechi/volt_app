<section class="dashboard">
    <div class="container">
        <div class="overview">
            <div class="title">
                
                <span class="text" style="text-transform: uppercase">{{ Auth::user()->role }} Dashboard</span>
            </div>
            <div class="boxes">
                <div class="box box1">
                    <i class="fas fa-laptop-code"></i>
                    <span class="text">Offered Course</span>
                    <span class="number">18345</span>
                </div>
                <div class="box box2">
                    <i class="fas fa-comments"></i>
                    <span class="text">Community</span>
                    <span class="number">2745</span>
                </div>
                <div class="box box3">
                    <i class="fas fa-graduation-cap"></i>
                    <span class="text">Current Grade</span>
                    <span class="number">1209</span>
                </div>
                <div class="box box4">
                    <i class="fas fa-users"></i>
                    <span class="text">Friends</span>
                    <span class="number">123</span>
                </div>
                <div class="box box3">
                    <i class="fas fa-file-code"></i>
                    <span class="text">Project</span>
                    <span class="number">1209</span>
                </div>
            </div> 
        </div>
        

        <!-- Recent Activities -->
        <div class="data-table activityTable">
            <div class="title">
                <i class="fas fa-calendar-days"></i>
                <span class="text">Recent Activities</span>
            </div>
            <div>
                <!-- Enter any table or section here -->
            </div>
        </div>

        
        <!-- Content -->
        <div style="display:none" class="data-table userDetailsTable">
            <div class="title">
                <i class="fas fa-chalkboard-user"></i>
                <span class="text">Live Class</span>
            </div>
            <div>
                <!-- Enter any table or section here -->
            </div>
        </div>

        <!-- Analytics -->
        <div style="display:none" class="data-table EditUserRole">
            <div class="title">
                <i class="fas fa-code"></i>
                <span class="text">Get Started</span>
            </div>
            <div>
                <!-- Enter any table or section here -->
            </div>
        </div>

        <!--  Likes -->
        <div style="display:none" class="data-table VehicleDetails">
            <div class="title">
                <i class="fas fa-comments"></i>
                <span class="text">Communities</span>
            </div>
            <div class="blog-furum">
                <!-- Enter any table or section here -->
                <img src="{{ asset('assets/img/download (20).jpeg') }}" alt="">
                <div class="container">
                    <h2>Join Community</h2>
                    <a href="{{ url('/blog') }}">Get Updated with young teches</a>
                </div>
            </div>
        </div>

        <!-- Downloads section -->
        <div style="display:none" class="data-table downloads">
            <div class="title">
                <i class="fas fa-bell"></i>
                <span class="text">Comments</span>
            </div>
            <div>
                <!-- Enter any table or section here -->
            </div>
        </div>
    </div>
</section>