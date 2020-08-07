@extends("gaming.master")

@section("content")
<!-- links -->
<div>
    <a href="/gaming" class="btn btn-dark mb-2 ml-5">Back to Gaming</a>
</div>

<!-- gaming -->
<div class="card mb-3 ml-5 mr-5">
    <div class="card-header">
        <h3>{{ $gaming->title }}</h3>
        <p>On {{ $gaming->created_at }}</p>
        <p>By {{ $gaming->user_name }}</p>
    </div>
    <div class="card-body">
        <p>{{ $gaming->content }}</p>
    </div>
    <div class="card-footer">
        Updated On: {{$gaming->updated_at}} 
        @if (Auth::id() == $gaming->user_id)
            <div>
                <a href="/gaming/{{ $gaming->id }}/edit" class="btn btn-info">Edit</a>
                <form action="/gaming/{{ $gaming->id }}" method="POST">
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
            <form action="/gamingresponse/{{ $gaming->id }}" method="POST">
                @csrf
                
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
                <input type="hidden" name="gaming_id" value="{{ $gaming->id }}">
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

@foreach($gamingresponse as $key => $gamingresponse)
    @if($gamingresponse->gaming_id == $gaming->id)
    <div class="card mb-3 ml-5 mr-5">
        <div class="card-header">
            <p>On {{ $gamingresponse->created_at }}</p>
            <p>By {{ $gamingresponse->user_name }}</p>
        </div>
        <div class="card-body">
            <p>{{ $gamingresponse->content }}</p>
        </div>
        <div class="card-footer">
            Updated on: {{ $gamingresponse->updated_at }}
            @if($gamingresponse->user_id == Auth::id())

            @endif
        </div>
    </div>
    @endif
@endforeach

@endsection