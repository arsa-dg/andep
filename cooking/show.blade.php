<!DOCTYPE html>
<html>
<!-- cooking -->
<div>
    <h3>{{ $cooking->title }}</h3>
    <p>On {{ $cooking->created_at }}</p>
    <p>By {{ $cooking->user_name }}</p>
        
    <p>{!! $cooking->content !!}</p>

    Updated On: {{$cooking->updated_at}} 
    @if (Auth::id() == $cooking->user_id)
        <div>
            <a href="/cooking/{{ $cooking->id }}/edit">Edit</a>
            <form action="/cooking/{{ $cooking->id }}" method="POST">
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
    <form action="/cookingresponse/{{ $cooking->id }}" method="POST">
        @csrf
        
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
        <input type="hidden" name="cooking_id" value="{{ $cooking->id }}">
        <label for="content">Isi:</label>
        <input type="text" name="content" placeholder="Enter isi" id="content">

        <button type="submit">Create!</button>
    </form>
</div>

<!-- responses -->
<h1>Responses:</h1>

@foreach($cookingresponse as $key => $cookingresponse)
    @if($cookingresponse->cooking_id == $cooking->id)
        <div>
            <p>On {{ $cookingresponse->created_at }}</p>
            <p>By {{ $cookingresponse->user_name }}</p>
            <p>{{ $cookingresponse->content }}</p>
            Updated on: {{ $cookingresponse->updated_at }}
        </div>
        @if($cookingresponse->user_id == Auth::id())
            edit
        @endif
    @endif
@endforeach

</html>