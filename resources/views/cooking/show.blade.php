@extends("cooking.master")

@section("content")
<!-- links -->
<div>
    <a href="/cooking" class="btn btn-dark mb-2 ml-5">Back to Cooking</a>
</div>

<!-- cooking -->
<div class="card mb-3 ml-5 mr-5">
    <div class="card-header">
        <h3>{{ $cooking->title }}</h3>
        <p>On {{ $cooking->created_at }}</p>
        <p>By {{ $cooking->user_name }}</p>
    </div>
    <div class="card-body">
        <p>{{ $cooking->content }}</p>
    </div>
    <div class="card-footer">
        Updated On: {{$cooking->updated_at}} 
        @if (Auth::id() == $cooking->user_id)
            <div>
                <a href="/cooking/{{ $cooking->id }}/edit" class="btn btn-info">Edit</a>
                <form action="/cooking/{{ $cooking->id }}" method="POST">
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
            <form action="/cookingresponse/{{ $cooking->id }}" method="POST">
                @csrf
                
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
                <input type="hidden" name="cooking_id" value="{{ $cooking->id }}">
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

@foreach($cookingresponse as $key => $cookingresponse)
    @if($cookingresponse->cooking_id == $cooking->id)
    <div class="card mb-3 ml-5 mr-5">
        <div class="card-header">
            <p>On {{ $cookingresponse->created_at }}</p>
            <p>By {{ $cookingresponse->user_name }}</p>
        </div>
        <div class="card-body">
            <p>{{ $cookingresponse->content }}</p>
        </div>
        <div class="card-footer">
            Updated on: {{ $cookingresponse->updated_at }}
            @if($cookingresponse->user_id == Auth::id())

            @endif
        </div>
    </div>
    @endif
@endforeach

@endsection