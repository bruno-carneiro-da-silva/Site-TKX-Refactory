<nav class="main-nav">
    <ul class="parent-nav">
        <li>
            <a class="nav-link" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo/logotkx-black.png') }}" alt="logo" class="me-5 hidden-logo">
                <span class="rolling-text">PÁGINA INICIAL</span>
            </a>
        </li>
        <li>
            <a class="nav-link click-scroll" href="{{ url('/') }}#section_2">
                <span class="rolling-text">SOBRE NÓS</span>
            </a>
        </li>
        <li>
            <a class="nav-link click-scroll" href="{{ url('/') }}#section_3">
                <span class="rolling-text">NOSSAS SOLUÇÕES</span>
            </a>
        </li>
        <li>
            <a class="nav-link click-scroll" href="{{ url('/') }}#section_10">
                <span class="rolling-text">BLOG</span>
            </a>
        </li>
        <li>
            <a class="nav-link click-scroll" href="{{ url('/') }}#section_8">
                <span class="rolling-text">CONTATO</span>
            </a>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">ÁREA DO CLIENTE</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('appoinment') }}">Serviço Personalizado</a></li>
                <li><a href="{{ route('projects-details-2') }}">Projetos Realizados</a></li>
                <li><a href="{{ route('team-details') }}">Detalhes da Equipe</a></li>
                {{-- <li><a href="{{ route('pricing') }}">Preços</a></li> --}}
                <li><a href="{{ route('faq') }}">FAQ</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link click-scroll" href="{{ url('/') }}#section_7">
                <span class="rolling-text">LOGIN</span>
            </a>
        </li>
    </ul>
</nav>
