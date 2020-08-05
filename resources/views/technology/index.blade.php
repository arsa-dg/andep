<!DOCTYPE html>
<html>
@foreach($technology as $key => $technology)
    <div>
    <h3>
        <a href="/technology/{{ $technology->id }}">{{ $technology->title }}</a> 
    </h3>
    <p>By {{ $technology->user_name }}</p>
    <p>{{ $technology->content }}</p>
    Asked: {{ $technology->created_at }}
    </div>
@endforeach

</html>