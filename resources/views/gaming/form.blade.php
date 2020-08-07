@extends("gaming.master")

@section("content")

<!-- links -->
<div>
    <a href="/gaming" class="btn btn-dark mb-2 ml-5">Back to Gaming</a>
</div>

<div class="card mb-3 ml-5 mr-5">
    <div class="card-body">
        <form action="/gaming" method="POST">
            @csrf
            
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" class="form-control" name="title" placeholder="Enter judul" id="title">
            </div>
            <div class="form-group">
                <label for="content">Isi:</label>
                <input type="text" class="form-control" name="content" placeholder="Enter isi" id="content">
            </div>

            <button type="submit" class="btn btn-primary">Create!</button>
        </form>
    </div>
</div>

@endsection