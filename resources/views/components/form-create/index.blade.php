@extends('components.card-form.index')

@section('form')
    <section class="section-form">
        @if (session()->has('error'))
            <div class="invalid-feedback">
                {{ session()->get('error') }}
            </div>
        @endif
        <form action={{ route('createAccount') }} method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Nome</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Seu nome">
                @error('username')
                    <div class="invalid-feedback">
                        Nome inválido.
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email">
                @error('email')
                    <div class="invalid-feedback">
                        Email inválido.
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Sua senha">
                @error('password')
                    <div class="invalid-feedback">
                        Sua senha precisa ter 8 caracteres.
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="passwordCheck" class="form-label">Confirme sua senha</label>
                <input type="password" class="form-control" id="passwordCheck" placeholder="Confirme sua senha">
            </div>
            <div class="mb-3 route-link">
                <span>Já possui conta? <a href={{ route('login') }}>Clique aqui</a></span>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Criar conta</button>
            </div>
        </form>
    </section>
@endsection
