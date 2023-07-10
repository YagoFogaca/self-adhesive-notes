@extends('layouts.index')

@section('content')
    @extends('components.card-form.index')
@section('form')
    <section class="section-form">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Seu Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Seu Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Sua senha">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Confirme sua senha</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Confirme sua senha">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">Criar conta</button>
            </div>
        </form>
    </section>
@endsection
@endsection
