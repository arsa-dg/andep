<!DOCTYPE html>
<html>
<!-- gaming -->
<div>
    <h3>{{ $gaming->title }}</h3>
    <p>On {{ $gaming->created_at }}</p>
    <p>By {{ $gaming->user_name }}</p>
        
    <p>{!! $gaming->content !!}</p>

    Updated On: {{$gaming->updated_at}} 
    @if (Auth::id() == $gaming->user_id)
        <div>
            <a href="/gaming/{{ $gaming->id }}/edit">Edit</a>
            <form action="/gaming/{{ $gaming->id }}" method="POST">
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
    <form action="/gamingresponse/{{ $gaming->id }}" method="POST">
        @csrf
        
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
        <input type="hidden" name="gaming_id" value="{{ $gaming->id }}">
        <label for="content">Isi:</label>
        <input type="text" name="content" placeholder="Enter isi" id="content">

        <button type="submit">Create!</button>
    </form>
</div>

<!-- responses -->
<h1>Responses:</h1>

@foreach($gamingresponse as $key => $gamingresponse)
    @if($gamingresponse->gaming_id == $gaming->id)
        <div>
            <p>On {{ $gamingresponse->created_at }}</p>
            <p>By {{ $gamingresponse->user_name }}</p>
            <p>{{ $gamingresponse->content }}</p>
            Updated on: {{ $gamingresponse->updated_at }}
        </div>
        @if($gamingresponse->user_id == Auth::id())
            edit
        @endif
    @endif
@endforeach

</html>