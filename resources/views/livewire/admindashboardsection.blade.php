<section class="dashboard">
    <div class="container">
        <div class="overview">
            <div class="title">
                {{-- <ion-icon name="speedometer"></ion-icon> --}}
                <i class="fa fa-pie-chart"></i>
                <span class="text">Dashboard</span>
            </div>
            <div class="boxes">
                <div class="box box1">
                    {{-- <ion-icon name="eye-outline"></ion-icon> --}}
                    <i class="fas fa-eye"></i>
                    <span class="text">Total Users</span>
                    <span class="number">18345</span>
                </div>
                <div class="box box2">
                    {{-- <ion-icon name="people-outline"></ion-icon> --}}
                    <i class="fas fa-user"></i>
                    <span class="text">Active student</span>
                    <span class="number">2745</span>
                </div>
                <div class="box box3">
                    {{-- <ion-icon name="chatbubbles-outline"></ion-icon> --}}
                    <i class="fas fa-chart-column"></i>
                    <span class="text">Total teachers post</span>
                    <span class="number">1209</span>
                </div>
                <div class="box box3">
                    {{-- <ion-icon name="chatbubbles-outline"></ion-icon> --}}
                    <i class="fas fa-chart-column"></i>
                    <span class="text">Total teachers</span>
                    <span class="number">1209</span>
                </div>
                {{-- <div class="box box4">
                    <ion-icon name="car-sport-outline"></ion-icon>
                    <i class=""></i>
                    <span class="text">Insured Vehicles</span>
                    <span class="number">123</span>
                </div> --}}
            </div> 
        </div>
        

        <!-- Recent Activities -->
        <div class="data-table activityTable">
            <div class="title">
                {{-- <ion-icon name="time-outline"></ion-icon> --}}
                <i class="fas fa-calendar-days"></i>
                <span class="text">Recent Activities</span>
            </div>
            <div>
                <!-- Enter any table or section here -->
                <table>
                    <thead>
                        <tr>
                            <th>home</th>
                            <th>home</th>
                            <th>home</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>look</td>
                            <td>look</td>
                            <td>look</td>
                        </tr>
                        <tr>
                            <td>look</td>
                            <td>look</td>
                            <td>look</td>
                        </tr>
                        <tr>
                            <td>look</td>
                            <td>look</td>
                            <td>look</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        
        <!-- Content -->
        <div style="display:none" class="data-table userDetailsTable">
            <div class="title">
                {{-- <ion-icon name="folder-outline"></ion-icon> --}}
                <i class="fas fa-blog"></i>
                <span class="text">Post Content</span>
            </div>
            <div>
                <!-- Enter any table or section here -->
            </div>
        </div>
        
        <!-- Analytics -->
        <div style="display:none" class="data-table EditUserRole">
            <div class="title">
                {{-- <ion-icon name="analytics-outline"></ion-icon> --}}
                <i class="fas fa-chart-line"></i>
                <span class="text">Analytics</span>
            </div>
            <div>
                <!-- Enter any table or section here -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quod inventore repellendus ipsa nihil? Facilis sapiente quasi repellendus temporibus ducimus recusandae rem similique at magni itaque. Minima, nostrum fuga repellendus, voluptatem aspernatur id commodi aliquam quas obcaecati omnis quidem fugit reprehenderit eos, eligendi hic neque! Quos odit quasi quas voluptatum.</p>
            </div>
        </div>
        
        <!--  Likes -->
        <div style="display:none" class="data-table VehicleDetails">
            <div class="title">
                {{-- <ion-icon name="heart-outline"></ion-icon> --}}
                <i class="fas fa-users-gear"></i>
                <span class="text">Amount of users</span>
            </div>
            <div>
                <!-- Enter any table or section here -->
                <livewire:post-index />
            </div>
        </div>

        <!-- Downloads section -->
        <div style="display:none" class="data-table downloads">
            <div class="title">
                {{-- <ion-icon name="chatbubbles-outline"></ion-icon> --}}
                <i class="fas fa-comments"></i>
                <span class="text">Comments</span>
            </div>
            <div>
                <!-- Enter any table or section here -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quod inventore repellendus ipsa nihil? Facilis sapiente quasi repellendus temporibus ducimus recusandae rem similique at magni itaque. Minima, nostrum fuga repellendus, voluptatem aspernatur id commodi aliquam quas obcaecati omnis quidem fugit reprehenderit eos, eligendi hic neque! Quos odit quasi quas voluptatum.</p>
            </div>
        </div>
    </div>
</section>