@extends ('layouts.app')

@section ('content')

<section>
    <div class="container">
        <h1>{{ $comic->title }} <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">Edit</a></h1>
        <p>{{ $comic->description }}</p>
        <img src="{{ $comic->thumb }}"  width="64" alt="{{ $comic->title }}">
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->type }}</p>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Back</a>
    </div>
</section>

@endsection