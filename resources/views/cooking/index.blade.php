@extends("cooking.master")

@section("content")

<!-- links -->
<div>
    <a href="/" class="btn btn-dark mb-2 ml-5">Back to Home</a>
    <a href="/cooking/create" class="btn btn-success mb-2 ml-1">Start a discussion!</a>
</div>

@foreach($cooking as $key => $cooking)
    <div class="card mb-3 ml-5 mr-5">
        <div class="card-header">
            <h3>
                <a href="/cooking/{{ $cooking->id }}">{{ $cooking->title }}</a> 
            </h3>
            <p>By {{ $cooking->user_name }}</p>
        </div>
        <div class="card-body">
            <p>{{ $cooking->content }}</p>
        </div>
        <div class="card-footer">
            Asked: {{ $cooking->created_at }}
        </div>
    </div>
@endforeach

@endsection