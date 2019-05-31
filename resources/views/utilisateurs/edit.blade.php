@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a User</h1>

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
        <form method="post" action="{{ route('utilisateur.update', $utilisateur->id) }}">
            @method('PUT') 
            @csrf
            <div class="form-group">    
              <label for="pseudo">Pseudo :</label>
              <input type="text" class="form-control" name="pseudo"/>
              </div>
              <div class="form-group">
              <label for="role">Rôle de l'utilisateur :</label>
              <select name="role" id="role">
                @foreach ($roles as $role)
                <option value="{{$role->role}}">{{$role->role}}</option>
                @endforeach
              </select>  
              </div>  

              <div class="form-group">
              <label for="avatar">Avatar de l'utilisateur :</label>
              <select name="avatar" id="avatar">
                @foreach ($avatars as $avatar)
                <option value="{{$avatar->id}}">{{$avatar->url}}</option>
                @endforeach
              </select>  
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection