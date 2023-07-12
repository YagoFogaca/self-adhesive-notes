@extends('layouts.index')

@section('content')
    <x-nav></x-nav>
    <section class="container-notes">
        @include('components.card-note.index')
    </section>

    @include('components.modal.index')
@endsection
