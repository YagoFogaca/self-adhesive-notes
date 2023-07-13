<nav class="navbar navbar-expand-lg" style="background-color: #A076F9;">
    <div class="container-fluid">
        <a class="navbar-brand" href={{ route('app') }}>
            <img src={{ asset('./assets/imgs/logo.png') }} style="width: 40px;" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex" role="search" style="align-items: center;">
                <input class="form-control me-2" type="text" id="input-search" placeholder="Pesquisar"
                    aria-label="Search">
                <button class="btn btn-dark" id="btn-search" type="button">Buscar</button>
                <button class="btn btn-close" style="margin-left: 20px;" id="btn-close-search" type="button"></button>
            </form>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <button class="nav-link active btn-open-modal-create" type="button">Criar</button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('logout') }}>Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
