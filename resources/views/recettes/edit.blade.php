@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Mettre à jour une recette</h1>

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
        <form method="post" action="{{ route('recette.update', $recette->id) }}">
            @method('PUT') 
            @csrf
            <div class="form-group">    
              <label for="nom">Nom :</label>
              <input type="text" class="form-control" name="nom"/>
            </div>
            <div class="form-group">    
                <label for="description">Description :</label>
                <input type="text" class="form-control" name="description"/>
            </div>
            <div class="form-group">    
                <label for="image">URL :</label>
                <input type="text" class="form-control" name="image"/>
            </div> 
            <div class="form-group">    
                <label for="temps">temps de preparation en minutes :</label>
                <input type="number" id="temps" name="temps" min="1" max="1000">
            </div>
            <div class="form-group">    
                <label for="portions">Nombre de portions :</label>
                <input type="number" id="portions" name="portions" min="1" max="100">
            </div> 

            <div class="form-group">
            <label for="createur">Créateur :</label>
            <select name="createur" id="createur">
              @foreach ($utilisateurs as $utilisateur)
              <option value="{{$utilisateur->id}}">{{$utilisateur->pseudo}}</option>
              @endforeach
            </select>  
            </div> 
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection