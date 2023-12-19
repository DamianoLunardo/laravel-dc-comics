@extends ('layouts.app')

@section ('content')

<section>
    <div class="container">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
           @csrf
           @method('PUT')
           
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" 
                placeholder="title" value="{{ $comic->title }}">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Title</label>
                <input type="text" class="form-control" name="description" id="description" 
                placeholder="description" value="{{ $comic->description }}">
              </div>
              <div class="mb-3">
                <label for="thumb" class="form-label">Image(url)</label>
                <input type="text" class="form-control" name="thumb" id="thumb" 
                placeholder="url image" value="{{ $comic->thumb }}">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Title</label>
                <input type="price" class="form-control" name="price" id="price" 
                placeholder="price" value="{{ $comic->price }}">
              </div>
              <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" name="series" id="series" 
                placeholder="series" value="{{ $comic->series }}">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" 
                placeholder="sale_date" value="{{ $comic->sale_date }}">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" name="type" id="type" 
                placeholder= "type" value="{{ $comic->type }}>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>


        </form>
    </div>
</section>

@endsection