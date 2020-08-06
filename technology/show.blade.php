<!DOCTYPE html>
<html>
<!-- technology -->
<div>
    <h3>{{ $technology->title }}</h3>
    <p>On {{ $technology->created_at }}</p>
    <p>By {{ $technology->user_name }}</p>
        
    <p>{!! $technology->content !!}</p>

    Updated On: {{$technology->updated_at}} 
    @if (Auth::id() == $technology->user_id)
        <div>
            <a href="/technology/{{ $technology->id }}/edit">Edit</a>
            <form action="/technology/{{ $technology->id }}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit">Delete</button>
            </form>
        </div>
    @endif
</div> 

<!-- create response -->
<h1>Create a response!</h1>
<div>
    <form action="/technologyresponse/{{ $technology->id }}" method="POST">
        @csrf
        
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
        <input type="hidden" name="technology_id" value="{{ $technology->id }}">
        <label for="content">Isi:</label>
        <input type="text" name="content" placeholder="Enter isi" id="content">

        <button type="submit">Create!</button>
    </form>
</div>

<!-- responses -->
<h1>Responses:</h1>

@foreach($technologyresponse as $key => $technologyresponse)
    @if($technologyresponse->technology_id == $technology->id)
        <div>
            <p>On {{ $technologyresponse->created_at }}</p>
            <p>By {{ $technologyresponse->user_name }}</p>
            <p>{{ $technologyresponse->content }}</p>
            Updated on: {{ $technologyresponse->updated_at }}
        </div>
        @if($technologyresponse->user_id == Auth::id())
            edit
        @endif
    @endif
@endforeach

</html>