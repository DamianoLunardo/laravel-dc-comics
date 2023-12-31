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
                <th>
                   <a href="{{ route('comics.create') }}" class="btn btn-primary">Add comic</a>
                </th>
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
                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        
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
