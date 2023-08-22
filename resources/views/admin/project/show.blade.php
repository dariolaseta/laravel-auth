@extends("layouts.app");

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"> ID: {{ $project->id }}</h5>
                <img src="{{ $project->image }}" alt="{{ $project->title }}">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $project->title }}
                    </h5>
                    <p class="card-text">
                        {{ $project->content }}
                    </p>
                </div>

            </div>
            <a href=" {{ route("admin.project.index") }}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>
</div>

@endsection