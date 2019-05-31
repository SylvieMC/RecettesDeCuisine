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
            <h2>Les recettes du mois :</h2>
            <recettes :recettes="{{ $recettes }}" :utilisateurs="{{ $utilisateurs }}" :categories="{{ $categories }}" :count="{{ $nbCategorieParRecette }}"></recettes>
            <bottom></bottom>
@endsection
