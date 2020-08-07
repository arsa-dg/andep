@extends("technology.master")

@section("content")
<!-- links -->
<div>
    <a href="/technology" class="btn btn-dark mt-2 mb-2 ml-5">Back to Technology</a>
</div>

<!-- technology -->
<div class="card mb-3 ml-5 mr-5">
    <div class="card-header">
        <h3>{{ $technology->title }}</h3>
        <p>On {{ $technology->created_at }}</p>
        <p>By {{ $technology->user_name }}</p>
    </div>
    <div class="card-body">
        <p>{{ $technology->content }}</p>
    </div>
    <div class="card-footer">
        Updated On: {{$technology->updated_at}} 
        @if (Auth::id() == $technology->user_id)
            <div>
                <a href="/technology/{{ $technology->id }}/edit" class="btn btn-info">Edit</a>
                <form action="/technology/{{ $technology->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        @endif
    </div>
</div>

<!-- create response -->
<div class="card mb-3 ml-5 mr-5">
    <div class="card-body">
        <h1>Create a response!</h1>
        <div>
            <form action="/technologyresponse/{{ $technology->id }}" method="POST">
                @csrf
                
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
                <input type="hidden" name="technology_id" value="{{ $technology->id }}">
                <div class="form-group">
                    <label for="content">Isi:</label>
                    <input type="text" class="form-control" name="content" placeholder="Enter isi" id="content">
                </div>

                <button type="submit" class="btn btn-primary">Create!</button>
            </form>
        </div>
    </div>
</div>

<!-- responses -->
<h1 class="ml-5">Responses:</h1>

@foreach($technologyresponse as $key => $technologyresponse)
    @if($technologyresponse->technology_id == $technology->id)
    <div class="card mb-3 ml-5 mr-5">
        <div class="card-header">
            <p>On {{ $technologyresponse->created_at }}</p>
            <p>By {{ $technologyresponse->user_name }}</p>
        </div>
        <div class="card-body">
            <p>{{ $technologyresponse->content }}</p>
        </div>
        <div class="card-footer">
            Updated on: {{ $technologyresponse->updated_at }}
            @if($technologyresponse->user_id == Auth::id())

            @endif
        </div>
    </div>
    @endif
@endforeach

@endsection