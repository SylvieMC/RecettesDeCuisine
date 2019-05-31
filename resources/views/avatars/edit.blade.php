@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update an avatar</h1>

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
        <form method="post" action="{{ route('avatar.update', $avatar->id) }}">
            @method('PUT') 
            @csrf
            <div class="form-group">    
              <label for="url">Url de votre avatar :</label>
              <input type="text" class="form-control" name="url"/>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <form action="{{ route('avatar.destroy', $avatar->id)}}" method="post" align="center">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger float-center" type="submit">Supprimer cet avatar</button>
      </form>
    </div>
</div>
@endsection