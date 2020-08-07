@extends("technology.master")

@section("content")

<!-- links -->
<div>
    <a href="/technology" class="btn btn-dark mt-2 mb-2 ml-5">Back to Technology</a>
</div>

<div class="card mb-3 ml-5 mr-5">
    <div class="card-body">
        <form action="/technology/{{ $technology->id }}" method="POST">
            @csrf
            @method("PUT")
            
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" class="form-control" value="{{ $technology->title }}" name="title" placeholder="Enter judul" id="title">
            </div>
            <div class="form-group">
                <label for="content">Isi:</label>
                <input type="text" class="form-control" value="{{ $technology->content }}" name="content" placeholder="Enter isi" id="content">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection