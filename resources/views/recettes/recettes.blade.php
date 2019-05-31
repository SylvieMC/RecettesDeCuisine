@extends('base')

@section('main')
            <heading></heading>
            <section class="resume-section p-3 p-lg-5 d-flex flex-column">
                <div class="my-auto">
                    <h2 class="mb-5">La liste complete des recettes</h2>
                        <recettes :recettes="{{ $recettes }}" :utilisateurs="{{ $utilisateurs }}" :categories="{{ $categories }}" :count="{{ $nbCategorieParRecette }}"></recettes>
                </div>
            </section>
            <bottom></bottom>
@endsection
