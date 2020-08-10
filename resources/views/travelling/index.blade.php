@extends("travelling.master")

@section("content")

<!-- links -->
<div>
    <a href="/" class="btn btn-dark mb-2 ml-5">Back to Home</a>
    <a href="/travelling/create" class="btn btn-success mb-2 ml-1">Start a discussion!</a>
    atau Bergabung forum video <a href="http://meet.google.com" class="btn btn-success mb-2 ml-1">Join Meet!</a>
</div>

@foreach($travelling as $key => $travelling)
    <div class="card mb-3 ml-5 mr-5">
        <div class="card-header">
            <h3>
                <a href="/travelling/{{ $travelling->id }}">{{ $travelling->title }}</a> 
            </h3>
            <p>By {{ $travelling->user_name }}</p>
        </div>
        <div class="card-body">
            <p>{{ $travelling->content }}</p>
        </div>
        <div class="card-footer">
            Asked: {{ $travelling->created_at }}
        </div>
    </div>
@endforeach

@endsection