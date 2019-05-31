@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Ajouter une étape</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('etape.store')}}">
          @csrf
          <div class="form-group">    
              <label for="numero">Numéro étape :</label>
              <input type="number" class="form-control" name="numero" min="1" max="20"/>
          </div>
          <div class="form-group">    
              <label for="description">description étape :</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <select name="recette" id="recette">
            @foreach ($recettes as $recette)
            <option value="{{$recette->id}}">{{$recette->nom}}</option>
            @endforeach
          </select>
          <button type="submit" class="btn btn-primary">Ajouter la nouvelle étape</button>
      </form>
  </div>
</div>
</div>
@endsection