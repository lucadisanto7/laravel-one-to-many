@extends('layouts.dashboards')

@section('main-content')
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <h2>Aggiungi un nuovo progetto</h2>
            </div>
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="" class="control-label">Nome Progetto</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm" @error('name') is-invalid @enderror placeholder="Nome Progetto" value="{{ old('name')}}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror 
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">Immagine</label>
                            <input type="file" name="image" id="image" class="form-control form-control-sm" >
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">Tipologia progetto</label>
                            <select name="type_id" id="" class="form form-select-sm">
                                <option value="">Seleziona tipologia</option>
                                @foreach ($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">Sommario Progetto</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm" >{{ old('summary','summary')}}</textarea>
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