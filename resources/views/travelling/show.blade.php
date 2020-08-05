<!DOCTYPE html>
<html>
<!-- travelling -->
<div>
    <h3>{{ $travelling->title }}</h3>
    <p>On {{ $travelling->created_at }}</p>
    <p>By {{ $travelling->user_name }}</p>
        
    <p>{!! $travelling->content !!}</p>

    Updated On: {{$travelling->updated_at}} 
    @if (Auth::id() == $travelling->user_id)
        <div>
            <a href="/travelling/{{ $travelling->id }}/edit">Edit</a>
            <form action="/travelling/{{ $travelling->id }}" method="POST">
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
    <form action="/travellingresponse/{{ $travelling->id }}" method="POST">
        @csrf
        
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
        <input type="hidden" name="travelling_id" value="{{ $travelling->id }}">
        <label for="content">Isi:</label>
        <input type="text" name="content" placeholder="Enter isi" id="content">

        <button type="submit">Create!</button>
    </form>
</div>

<!-- responses -->
<h1>Responses:</h1>

@foreach($travellingresponse as $key => $travellingresponse)
    @if($travellingresponse->travelling_id == $travelling->id)
        <div>
            <p>On {{ $travellingresponse->created_at }}</p>
            <p>By {{ $travellingresponse->user_name }}</p>
            <p>{{ $travellingresponse->content }}</p>
            Updated on: {{ $travellingresponse->updated_at }}
        </div>
        @if($travellingresponse->user_id == Auth::id())
            edit
        @endif
    @endif
@endforeach

</html>