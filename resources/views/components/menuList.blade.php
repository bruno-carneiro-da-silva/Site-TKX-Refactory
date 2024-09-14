<nav class="main-nav">
    <ul class="parent-nav">
        <li>
            <a class="nav-link " href="#">
                <span class="rolling-text">PÁGINA INICIAL</span>
            </a>
            {{-- <ul class="submenu mega-menu-wrapper">
                <li class="menu-single-list">
                    <a href="#" class="top-title">Multipages</a>
                    <ul>
                        <li><a href="{{ route('index') }}">Corporate Demo</a></li>
                        <li><a href="{{ route('index-two') }}">Financial Demo</a></li>
                        <li><a href="{{ route('index-three') }}">Marketing Demo</a></li>
                        <li><a href="{{ route('index-four') }}">Agency Demo</a></li>
                        <li><a href="{{ route('index-five') }}">Startup Demo</a></li>
                        <li><a href="{{ route('index-six') }}">Construction Demo</a></li>
                        <li><a href="{{ route('index-seven') }}">Construction 2 Demo</a></li>
                        <li><a href="{{ route('index-eight') }}">Company Demo</a></li>
                    </ul>
                </li>
                <li class="menu-single-list">
                    <a href="#" class="top-title">OnePage</a>
                    <ul>
                        <li><a href="{{ route('onepage-one') }}">Onepage Corporate</a></li>
                        <li><a href="{{ route('onepage-two') }}">Onepage Financial</a></li>
                        <li><a href="{{ route('onepage-three') }}">Onepage Marketing</a></li>
                        <li><a href="{{ route('onepage-four') }}">Onepage Agency</a></li>
                        <li><a href="{{ route('onepage-five') }}">Onepage Startup</a></li>
                        <li><a href="{{ route('onepage-six') }}">Onepage Construction</a></li>
                        <li><a href="{{ route('onepage-seven') }}">Onepage Construction 2</a></li>
                        <li><a href="{{ route('onepage-eight') }}">Onepage Company</a></li>
                    </ul>
                </li>
            </ul> --}}
        </li>
        <li>
            <a class="nav-link" href="{{ route('about') }}">
                <span class="rolling-text">SOBRE NÓS</span>
            </a>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">NOSSAS SOLUÇÕES</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('service') }}">Serviço</a></li>
                <li><a href="{{ route('service-details') }}">Detalhes do serviço</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">BLOG</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('blog-col-1') }}">Blog Col 1</a></li>
                <li><a href="{{ route('blog-col-2') }}">Blog Col 2</a></li>
                <li><a href="{{ route('blog-details') }}">Blog </a></li>
                <li><a href="{{ route('blog-details-2') }}">Blog v2</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link" href="{{ route('contact') }}">
                <span class="rolling-text">CONTATO</span>
            </a>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">ÁREA DO CLIENTE</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('appoinment') }}">Appoinment</a></li>
                <li><a href="{{ route('projects-details-2') }}">Project Details v2</a></li>
                <li><a href="{{ route('team') }}">Equipe</a></li>
                <li><a href="{{ route('team-details') }}">Detalhes da Equipe</a></li>
                <li><a href="{{ route('pricing') }}">Preços</a></li>
                <li><a href="{{ route('faq') }}">Faq</a></li>
            </ul>
        </li>
    </ul>
</nav>
