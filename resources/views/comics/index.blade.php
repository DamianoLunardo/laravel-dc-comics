@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Thumb</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale Date</th>
                <th>Type</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
                <tr>
                    <td>
                        <a href="{{ route('comics.show', $comic) }}">
                        {{ $comic->title }}</td>
                    <td>{{ $comic->description }}</td>
                    <td><img src="{{ $comic->thumb }}" width="64" alt="{{ $comic->title }}"></td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <span>edit</span>
                        <span>delete</span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Nessun fumetto trovato</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
