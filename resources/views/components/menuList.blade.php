<nav class="main-nav">
    <ul class="parent-nav">
        <li>
            <a class="nav-link " href="{{ url('/') }}">
                <span class="rolling-text">PÁGINA INICIAL</span>
            </a>
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
                <li><a href="{{ route('appoinment') }}">Serviço Personalizado</a></li>
                <li><a href="{{ route('projects-details-2') }}">Detalhes do Projeto v2</a></li>
                <li><a href="{{ route('team') }}">Equipe</a></li>
                <li><a href="{{ route('team-details') }}">Detalhes da Equipe</a></li>
                <li><a href="{{ route('pricing') }}">Preços</a></li>
                <li><a href="{{ route('faq') }}">Faq</a></li>
            </ul>
        </li>
    </ul>
</nav>
