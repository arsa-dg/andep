<!DOCTYPE html>
<html>
@foreach($travelling as $key => $travelling)
    <div>
    <h3>
        <a href="/travelling/{{ $travelling->id }}">{{ $travelling->title }}</a> 
    </h3>
    <p>By {{ $travelling->user_name }}</p>
    <p>{{ $travelling->content }}</p>
    Asked: {{ $travelling->created_at }}
    </div>
@endforeach

</html>