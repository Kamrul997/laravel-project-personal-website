<!--   Header Start -->
<header>
    <div class="header-navbar h-100">
        <a class="navbar-brand" href="{{ route('home.page') }}">
            <b>A</b><span>Arshia</span>
        </a>
        <ul class="list-group menu text-center" id="menu">
            <li class="list-group-item">
                <a class="active" href="{{ route('home.page') }}">
                    <i class="fa fa-home"></i>
                    <span>home</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="{{ (request()->is('/about')) ? 'active' : '' }}" href="{{ route('about.page') }}">
                    <i class="fa fa-user"></i>
                    <span>about</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="{{ (request()->is('/resume')) ? 'active' : '' }}" href="{{ route('resume.page') }}">
                    <i class="fa fa-address-book"></i>
                    <span>resume</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="{{ (request()->is('/portfolio')) ? 'active' : '' }}" href="{{ route('portfolio.page') }}">
                    <i class="fa fa-briefcase"></i>
                    <span>works</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="{{ (request()->is('/blog')) ? 'active' : '' }}" href="{{ route('blog.page') }}">
                    <i class="fa fa-file-text"></i>
                    <span>blog</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="{{ (request()->is('/contact')) ? 'active' : '' }}" href="{{ route('contact.page') }}">
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
