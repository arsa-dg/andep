<!DOCTYPE html>
<html>
@foreach($gaming as $key => $gaming)
    <div>
    <h3>
        <a href="/gaming/{{ $gaming->id }}">{{ $gaming->title }}</a> 
    </h3>
    <p>By {{ $gaming->user_name }}</p>
    <p>{{ $gaming->content }}</p>
    Asked: {{ $gaming->created_at }}
    </div>
@endforeach

</html>