<!DOCTYPE html>
<html>
@foreach($cooking as $key => $cooking)
    <div>
    <h3>
        <a href="/cooking/{{ $cooking->id }}">{{ $cooking->title }}</a> 
    </h3>
    <p>By {{ $cooking->user_name }}</p>
    <p>{{ $cooking->content }}</p>
    Asked: {{ $cooking->created_at }}
    </div>
@endforeach

</html>