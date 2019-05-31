@extends('base')

@section('main')
            <heading></heading>
            <div class="col-sm-12">
      			 	@if(session()->get('success'))
      			    	<div class="alert alert-success">
      			      		{{ session()->get('success') }}  
      			    	</div>
      			  	@endif
    		    </div>
            <form action="{{ route('utilisateur.destroy', $utilisateur->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            <utilisateur :utilisateur="{{ $utilisateur }}" :avatar="{{ $avatar }}" :recettes="{{ $recettes }}" ></utilisateur>
            <bottom></bottom>
@endsection