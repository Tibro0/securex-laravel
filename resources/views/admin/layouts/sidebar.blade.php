<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li class="active"><a class="nav-link" href="index-0.html"><i class="fas fa-fire"></i> Dashboard</a>
            </li>

            <li class="menu-header">Starter</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Homepage Content</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.slider.index') }}">Slider</a></li>
                    <li><a class="nav-link" href="{{ route('admin.detail.index') }}">Details</a></li>
                    <li><a class="nav-link" href="{{ route('admin.about-us.index') }}">About Us</a></li>
                    <li><a class="nav-link" href="{{ route('admin.our-service.index') }}">Our Services</a></li>
                    <li><a class="nav-link" href="{{ route('admin.team-member.index') }}">Team Members</a></li>
                    <li><a class="nav-link" href="{{ route('admin.testimonial.index') }}">Testimonial</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Why Choose Us</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.why-choose-us-icon-box.index') }}">Why Choose Us Icon
                            Box</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Our Projects</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.category.index') }}">Category</a></li>
                    <li><a class="nav-link" href="{{ route('admin.our-project.index') }}">Our Project</a></li>
                </ul>
            </li>


            {{-- <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Layout</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                    <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li> --}}
            {{-- <li class=active><a class="nav-link" href="blank.html"><i class="far fa-square"></i>
                    <span>Blank Page</span></a></li> --}}
        </ul>
    </aside>
</div>
