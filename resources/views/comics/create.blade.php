@extends ('layouts.app')

@section ('content')

<section>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
           @csrf
           
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" 
                placeholder="title">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Title</label>
                <input type="text" class="form-control" name="description" id="description" 
                placeholder="description">
              </div>
              <div class="mb-3">
                <label for="thumb" class="form-label">Image(url)</label>
                <input type="text" class="form-control" name="thumb" id="thumb" 
                placeholder="url image">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Title</label>
                <input type="price" class="form-control" name="price" id="price" 
                placeholder="price">
              </div>
              <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" name="series" id="series" 
                placeholder="series">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" 
                placeholder="sale_date">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" name="type" id="type" 
                placeholder="type">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>


        </form>
    </div>
</section>

@endsection