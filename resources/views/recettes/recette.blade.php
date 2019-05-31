@extends('base')

@section('main')
            <heading></heading>
            <section class="resume-section p-3 p-lg-5 d-flex flex-column">
                <div class="my-auto">
                    <recette :recette="{{ $recette }}" :utilisateur="{{ $utilisateur }}" :categorie="{{ $categorie }}" :ingredients="{{ $ingredients }}" :etapes="{{ $etapes }}"></recette>
                </div>
            </section>
            <bottom></bottom>
@endsection