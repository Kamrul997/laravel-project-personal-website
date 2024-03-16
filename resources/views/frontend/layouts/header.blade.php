<!--   Header Start -->
<header>
    <div class="header-navbar h-100">
        <a class="navbar-brand" href="{{ route('home.page') }}">
            <b>A</b><span>Arshia</span>
        </a>
        <ul class="list-group menu text-center" id="menu">
            <li class="list-group-item">
                <a class="{{ Request::routeIs('home.page') ? 'active' : '' }}" href="{{ route('home.page') }}">
                    <i class="fa fa-home"></i>
                    <span>home</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="{{ Request::routeIs('about.page') ? 'active' : '' }}" href="{{ route('about.page') }}">
                    <i class="fa fa-user"></i>
                    <span>about</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="{{ Request::routeIs('resume.page') ? 'active' : '' }}" href="{{ route('resume.page') }}">
                    <i class="fa fa-address-book"></i>
                    <span>resume</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="{{ Request::routeIs('portfolio.page') ? 'active' : '' }}" href="{{ route('portfolio.page') }}">
                    <i class="fa fa-briefcase"></i>
                    <span>works</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="{{ Request::routeIs('blog.page') ? 'active' : '' }}" href="{{ route('blog.page') }}">
                    <i class="fa fa-file-text"></i>
                    <span>blog</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="{{ Request::routeIs('contact.page') ? 'active' : '' }}" href="{{ route('contact.page') }}">
                    <i class="fa fa-envelope-open"></i>
                    <span>contact</span>
                </a>
            </li>
        </ul>
        <div class="menu-toggler">
            <span>
                <i class="text-white lni-menu"></i>
            </span>
        </div>
    </div>
</header>
<!--   Header End   -->
