<section class="container-modal modal-edit">
    <section class="container-form--modal">
        <div class="close-modal">
            <i class="fa-solid fa-xmark btn-close-modal-edit"></i>
        </div>
        <form action={{ route('note.update', ['id' => $note['id']]) }} method="POST">
            @csrf
            @method('PUT')
            @error('error')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="title" class="form-label">Titulo</label>
                <input required type="text" class="form-control" id="title" name="title"
                    value={{ $note['title'] }}>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Nota</label>
                <textarea required class="form-control" id="text" name="text" rows="3">{{ $note['text'] }}</textarea>
            </div>
            <div class="mb-3">
                <label for="passwordCheck" class="form-label">Escolha a cor da nota</label>
                <div class="colors">
                    <div class="form-check form-check-inline">
                        <input {{ $note['color'] === '6527BE' ? 'checked' : '' }} class="form-check-input"
                            type="radio" name="color" id="color-1" value="6527BE">
                        <label class="form-check-label" for="color-1">
                            <div class="color-note" style="background-color: #6527BE;"></div>
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input {{ $note['color'] === '068FFF' ? 'checked' : '' }} class="form-check-input"
                            type="radio" name="color" id="color-2" value="068FFF">
                        <label class="form-check-label" for="color-2">
                            <div class="color-note" style="background-color: #068FFF;"></div>
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input {{ $note['color'] === 'ff4500' ? 'checked' : '' }} class="form-check-input"
                            type="radio" name="color" id="color-3" value="ff4500">
                        <label class="form-check-label" for="color-3">
                            <div class="color-note" style="background-color: #ff4500;"></div>
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input {{ $note['color'] === '16FF00' ? 'checked' : '' }} class="form-check-input"
                            type="radio" name="color" id="color-4" value="16FF00">
                        <label class="form-check-label" for="color-4">
                            <div class="color-note" style="background-color: #16FF00;"></div>
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input {{ $note['color'] === 'FFED00' ? 'checked' : '' }} class="form-check-input"
                            type="radio" name="color" id="color-5" value="FFED00">
                        <label class="form-check-label" for="color-5">
                            <div class="color-note" style="background-color: #FFED00;"></div>
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input {{ $note['color'] === 'F90716' ? 'checked' : '' }} class="form-check-input"
                            type="radio" name="color" id="color-6" value="F90716">
                        <label class="form-check-label" for="color-6">
                            <div class="color-note" style="background-color: #F90716;"></div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Editar nota</button>
            </div>
        </form>
    </section>
</section>
