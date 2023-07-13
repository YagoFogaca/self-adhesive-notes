@extends('layouts.index')

@section('content')
    <x-nav></x-nav>

    <section class="container-notes">
        @foreach ($data as $note)
            @include('components.card-note.index', ['note' => $note])
            @include('components.modal-edit.index', ['note' => $note])
        @endforeach
    </section>

    @include('components.modal.index')

    <script src={{ asset('assets/js/search.js') }}></script>
@endsection
