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

</html>