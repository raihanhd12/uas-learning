<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">                
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Core</div>
                <li><hr class="dropdown-divider"></li>
                <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
                    <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                    All User
                </a>   
                <a class="nav-link {{ Request::is('dashboard/membership*') ? 'active' : '' }}" href="/dashboard/membership">
                    <div class="sb-nav-link-icon"><i class="bi bi-bank"></i></div>
                    Membership
                </a>   
                <div class="sb-sidenav-menu-heading">Course</div>
                <li><hr class="dropdown-divider"></li>
                <a class="nav-link {{ Request::is('dashboard/course_category*') ? 'active' : '' }}" href="/dashboard/course_category">
                    <div class="sb-nav-link-icon"><i class="bi bi-columns"></i></div>
                    Category
                </a>   
                <a class="nav-link {{ Request::is('dashboard/course_level*') ? 'active' : '' }}" href="/dashboard/course_level">
                    <div class="sb-nav-link-icon"><i class="bi bi-bar-chart-steps"></i></div>
                    Level
                </a>   
                <a class="nav-link {{ Request::is('dashboard/course_price*') ? 'active' : '' }}" href="/dashboard/course_price">
                    <div class="sb-nav-link-icon"><i class="bi bi-currency-dollar"></i></div>
                    Price
                </a>   
                <a class="nav-link {{ Request::is('dashboard/instructors*') ? 'active' : '' }}" href="/dashboard/instructors">
                    <div class="sb-nav-link-icon"><i class="bi bi-person-workspace"></i></div>
                    Instructor
                </a>  
                <a class="nav-link {{ Request::is('dashboard/courses*') ? 'active' : '' }}" href="/dashboard/courses">
                    <div class="sb-nav-link-icon"><i class="bi bi-journals"></i></div>
                    All Course
                </a>  
                <a class="nav-link {{ Request::is('dashboard/section*') ? 'active' : '' }}" href="/dashboard/section">
                    <div class="sb-nav-link-icon"><i class="bi bi-intersect"></i></div>
                    Section
                </a>   
                <a class="nav-link {{ Request::is('dashboard/lesson*') ? 'active' : '' }}" href="/dashboard/lesson">
                    <div class="sb-nav-link-icon"><i class="bi bi-journal-text"></i></div>
                    Lesson
                </a>   

                <div class="sb-sidenav-menu-heading">Blog</div>
                <li><hr class="dropdown-divider"></li>
                <a class="nav-link {{ Request::is('dashboard/blog_category*') ? 'active' : '' }}" href="/dashboard/blog_category">
                    <div class="sb-nav-link-icon"><i class="bi bi-grid"></i></div>
                    Category
                </a>                
                <a class="nav-link {{ Request::is('dashboard/blogs*') ? 'active' : '' }}" href="/dashboard/blogs">
                    <div class="sb-nav-link-icon"><i class="bi bi-chat-left-quote-fill"></i></div>
                    My Blog
                </a>                                   
                <div class="sb-sidenav-menu-heading">Help</div>
                <li><hr class="dropdown-divider"></li>
                <a class="nav-link {{ Request::is('dashboard/privacy*') ? 'active' : '' }}" href="/dashboard/privacy">
                    <div class="sb-nav-link-icon"><i class="bi bi-file-lock"></i></div>
                    Privacy
                </a>                                   
                <a class="nav-link {{ Request::is('dashboard/disclaimer*') ? 'active' : '' }}" href="/dashboard/disclaimer">
                    <div class="sb-nav-link-icon"><i class="bi bi-exclamation-triangle"></i></div>
                    Disclaimer
                </a>                
                <a class="nav-link {{ Request::is('dashboard/contact*') ? 'active' : '' }}" href="/dashboard/contact">
                    <div class="sb-nav-link-icon"><i class="bi bi-brush"></i></div>
                    Contact Us
                </a>                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as :</div>
            <b>RHD Learning | Admin</b>
        </div>
    </nav>
</div>