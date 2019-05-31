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
            <section class="resume-section p-3 p-lg-5 d-flex flex-column">
                <div class="my-auto">
                    <recette :recette="{{ $recette }}" :utilisateur="{{ $utilisateur }}" :categorie="{{ $categorie }}" :ingredients="{{ $ingredients }}" :etapes="{{ $etapes }}"></recette>
                </div>
                <form action="{{ route('recette.destroy', $recette->id)}}" method="post" align="center">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger float-center" type="submit">Supprimer cette recette</button>
                </form>
            </section>
            <bottom></bottom>
@endsection