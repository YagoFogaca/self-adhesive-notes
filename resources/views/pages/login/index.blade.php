@extends('layouts.index')

@section('content')
    @extends('components.card-form.index')
@section('form')
    <section class="section-form">
        <form action={{ route('store') }} method="POST">
            @csrf
            @error('errorAuth')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Seu Email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Sua senha">
            </div>
            <div class="mb-3 route-link">
                <span>Não possui conta? <a href={{ route('create') }}>Clique aqui</a></span>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
    </section>
@endsection
@endsection
