@extends('layouts.index')

@section('content')
    <x-nav></x-nav>

    <section class="container-notes">
        @foreach ($data as $note)
            @include('components.card-note.index', ['note' => $note])
        @endforeach
    </section>

    @include('components.modal.index')
@endsection
