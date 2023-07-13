<article class="card-note">
    <div class="card-note--color" style="background-color: #{{ $note['color'] }};">
        <div class="card-note--config">
            <div class="btn-group" role="group">
                <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-gear"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-pen"></i>Editar</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i>Apagar</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-note--infos">
        <h3 class="card-note--infos-titulo">{{ $note['title'] }}</h3>
        <p class="card-note--infos-note">{{ $note['text'] }}</p>
    </div>
</article>
