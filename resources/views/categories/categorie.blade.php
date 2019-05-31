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
                    <categorie :categorie="{{ $categorie }}" :recettes="{{ $recettes }}"></categorie>
                </div>
                <form action="{{ route('categorie.destroy', $categorie->id)}}" method="post" align="center">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger float-center" type="submit">Supprimer cette categorie</button>
                </form>
            </section>
            <bottom></bottom>
@endsection
