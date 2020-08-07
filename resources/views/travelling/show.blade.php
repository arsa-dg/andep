@extends("travelling.master")

@section("content")
<!-- links -->
<div>
    <a href="/travelling" class="btn btn-dark mb-2 ml-5">Back to Travelling</a>
</div>

<!-- travelling -->
<div class="card mb-3 ml-5 mr-5">
    <div class="card-header">
        <h3>{{ $travelling->title }}</h3>
        <p>On {{ $travelling->created_at }}</p>
        <p>By {{ $travelling->user_name }}</p>
    </div>
    <div class="card-body">
        <p>{{ $travelling->content }}</p>
    </div>
    <div class="card-footer">
        Updated On: {{$travelling->updated_at}} 
        @if (Auth::id() == $travelling->user_id)
            <div>
                <a href="/travelling/{{ $travelling->id }}/edit" class="btn btn-info">Edit</a>
                <form action="/travelling/{{ $travelling->id }}" method="POST">
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
            <form action="/travellingresponse/{{ $travelling->id }}" method="POST">
                @csrf
                
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
                <input type="hidden" name="travelling_id" value="{{ $travelling->id }}">
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

@foreach($travellingresponse as $key => $travellingresponse)
    @if($travellingresponse->travelling_id == $travelling->id)
    <div class="card mb-3 ml-5 mr-5">
        <div class="card-header">
            <p>On {{ $travellingresponse->created_at }}</p>
            <p>By {{ $travellingresponse->user_name }}</p>
        </div>
        <div class="card-body">
            <p>{{ $travellingresponse->content }}</p>
        </div>
        <div class="card-footer">
            Updated on: {{ $travellingresponse->updated_at }}
            @if($travellingresponse->user_id == Auth::id())

            @endif
        </div>
    </div>
    @endif
@endforeach

@endsection