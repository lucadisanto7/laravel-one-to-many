@extends('layouts.dashboards')
@section('main.content')
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                <div class="alert-alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                                <li>{{$error}} </li>
                            @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('admin.projects.update', ['project' => $project->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <label for="" class="control-label">Nome progetto</label>
                        <input type="text" name="name" id="" class="form-control form-control-sm @error('name') is-invalid @enderror" 
                            placeholder="Nome progetto" value="{{ old('name', $project->name)}}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        @if ($project->image != null)
                            <img class="project-image" src="{{ asset('./storage/'.$project->image)}}" alt="{{ $project->name}}">
                        @else
                            <img src="https://plachehold.co/600x400?text=Immagine+copertina" alt="{{$project->name}}">
                        @endif
                    </div>  
                    <select name="type_id" id="" class="form form-select-sm">
                        <option value="">Seleziona tipologia</option>
                        @foreach ($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>  
                    <div class="col-12">
                        <label for="" class="control-label">Sommario progetto</label>
                        <input type="text" name="name" id="" class="form-control form-control-sm" 
                            placeholder="Nome progetto" value="{{ old('summary', $project->summary)}}">
                    </div>         
                    <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                    </div>                   
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection