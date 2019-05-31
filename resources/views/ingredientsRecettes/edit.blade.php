@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update un Ingrédient Recette</h1>

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
        <form method="post" action="{{ route('ingredientRecette.update', $ingredientsRecettes->id) }}">
            @method('PUT') 
            @csrf
            <div class="form-group">    
                <label for="quantite">Quantité :</label>
                <input type="text" class="form-control" name="quantite"/>
            </div>
            <div class="form-group">    
                <label for="unite">Unité :</label>
                <input type="text" class="form-control" name="unite"/>
            </div>

            <select name="recette" id="recette">
            @foreach ($recettes as $recette)
            <option value="{{$recette->id}}">{{$recette->nom}}</option>
            @endforeach
            </select>
          <select name="ingredient" id="ingredient">
            @foreach ($ingredients as $ingredient)
            <option value="{{$ingredient->id}}">{{$ingredient->nom}}</option>
            @endforeach
            </select>  
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <form action="{{ route('ingredientRecette.destroy', $ingredientsRecettes->id)}}" method="post" align="center">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger float-center" type="submit">Supprimer cet ingredientRecette</button>
        </form>
    </div>
</div>
@endsection