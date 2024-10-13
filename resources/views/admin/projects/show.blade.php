@extends('layouts.dashboards')

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>{{$project->name}}</h2>
            <h4>{{$project->type !== null ? $project->type->name : ''}}</h4>
            <img class="project-image" src="{{ $project->image !== null ? asset('./storage/'.$project->image) : 'https://plachehold.co/600x400?text=Immagine+copertina'}}" alt="{{ $project->name}}">
            <p>{{$project->slug}}</p>
            <p>{{$project->summary}}</p>
        </div>
    </div>
</div>
    
@endsection