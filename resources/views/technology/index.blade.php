@extends("technology.master")

@section("content")

<!-- links -->
<div class="mt-2">
    <a href="/" class="btn btn-dark mb-2 ml-5">Back to Home</a>
    <a href="/technology/create" class="btn btn-success mb-2 ml-1">Start a discussion!</a>
</div>

@foreach($technology as $key => $technology)
    <div class="card mb-3 ml-5 mr-5">
        <div class="card-header">
            <h3>
                <a href="/technology/{{ $technology->id }}">{{ $technology->title }}</a> 
            </h3>
            <p>By {{ $technology->user_name }}</p>
        </div>
        <div class="card-body">
            <p>{{ $technology->content }}</p>
        </div>
        <div class="card-footer">
            Asked: {{ $technology->created_at }}
        </div>
    </div>
@endforeach

@endsection