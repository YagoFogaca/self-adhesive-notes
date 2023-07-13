<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href={{ route('app') }}>
            <img src={{ asset('./assets/imgs/logo.png') }} style="width: 40px;" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="button">Buscar</button>
            </form>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <button class="nav-link active btn-open" type="button">Criar</button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('logout') }}>Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
