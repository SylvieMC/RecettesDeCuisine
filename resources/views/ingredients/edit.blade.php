@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Mettre à jour un ingrédient</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('ingredient.update', $ingredient->id) }}">
            @method('PUT') 
            @csrf
            <div class="form-group">    
              <label for="nom">Nouveau nom :</label>
              <input type="text" class="form-control" name="nom" value="{{ $ingredient->nom }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <form action="{{ route('ingredient.destroy', $ingredient->id)}}" method="post" align="center">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger float-center" type="submit">Supprimer cet ingrédient</button>
        </form>
    </div>
</div>
@endsection