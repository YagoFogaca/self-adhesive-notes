<section class="container-modal">
    <section class="container-form--create">
        <div class="close-modal">
            <i class="fa-solid fa-xmark btn-closeModal"></i>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" value="Titulo 1">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Nota</label>
                <input type="text" class="form-control" id="text" name="text" placeholder="Sua nota">
            </div>
            <div class="mb-3">
                <label for="passwordCheck" class="form-label">Escolha a cor da nota</label>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Criar nota</button>
            </div>
        </form>
    </section>
</section>
